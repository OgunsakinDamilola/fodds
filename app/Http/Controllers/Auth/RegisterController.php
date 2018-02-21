<?php

namespace App\Http\Controllers\Auth;

use App\Mail\VerifyMail;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use nilsenj\Toastr\Facades\Toastr;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|digits:11',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Profile::store($data, $user->id);

        $user->attachRole(Role::CUSTOMER);

        if (VerifyUser::store($user->id))
        {
//            Mail::to($user)->send(new VerifyMail($user));
            try
            {
                Mail::to($user)->send(new VerifyMail($user));
            }catch (\Exception $e)
            {
                Toastr::error("Check your internet connection", "No Network Connection");
            }
        }

        return $user;
    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if (isset($verifyUser)) {
            $user = $verifyUser->user;
            if (!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                Toastr::success("Your e-mail is verified. You can now login", "Welcome");
                $status = "Your e-mail is verified. You can now login.";
            } else {
                Toastr::warning("Your e-mail is already verified. You can now login.");
                $status = "Your e-mail is already verified. You can now login.";
            }
        } else {
            Toastr::error("Sorry your email cannot be identified.", "Warning");
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }

        return redirect('/login')->with('status', $status);
    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        Toastr::success("We sent you an activation code. Check your email and click on the link to verify.");
        return redirect('/login')->with('status', 'We sent you an activation code. Check your email and click on the link to verify.');
    }
}
