<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Collateral;
use App\Models\Designation;
use App\Models\FinancialAid;
use App\Models\FinancialAidType;
use App\Models\IdentityType;
use App\Models\KYC;
use App\Models\Title;
use Illuminate\Http\Request;
use nilsenj\Toastr\Facades\Toastr;

class FinancialAidController extends Controller
{

    public function __construct()
    {
        $this->Helpers = new HelpersController();
    }

    public function getFormsDependencies()
    {
        return [
            'titles' => Title::getTitles(),
            'collaterals' => Collateral::getCollaterals(),
            'designations' => Designation::getDesignations(),
            'financial_aid_types' => FinancialAidType::getFinancialAidTypes(),
            'identity_types' => IdentityType::getIdentityTypes(),
            'banks' => Bank::getBanks()
        ];
    }

    public function apply($type){
        $titles = $this->Helpers->titles();
        $designations = $this->Helpers->designations();
        $identities   = $this->Helpers->identities();
        return view('pages.aid-application.kyc',compact('type','titles','designations','identities'));
    }

    public function questionnaire()
    {
        $type = session()->get('financial_aid_type');
        $aid_id = session()->get('financial_aid_id');
        return view('pages.aid-application.questionnaire', compact('type','aid_id'));
    }

    public function saveKycInformation(request $r)
    {
        $this->validate($r, [
            'title.*' => 'required|string',
            'first_name.*' => 'required|string|max:255',
            'last_name.*' => 'required|string|max:255',
            'middle_name.*' => 'required|string|max:255',
            'address.*' => 'required|string',
            'residential_address.*' => 'required|string',
            'designation.*' => 'required',
            'date_of_birth.*' => 'required',
            'phone.*' => 'required',
            'email.*' => 'required|string|email|max:255',
            'id_type.*' => 'required',
            'id_number.*' => 'required',
            'id_issue_date.*' => 'required',
            'id_expiry_date.*' => 'required',
            'passport_photo_path.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $type = $r->type;
        $financial_aid = FinancialAid::store(auth()->id());
        if ($financial_aid)
        {
            $financial_aid_id = $financial_aid->id;
            $data = $r->all();
            $store = KYC::store($data,$financial_aid_id,$r);
            Toastr::success('You have completed the KYC form. Just few more forms and you will be done with your application');
            session()->put('financial_aid_id',$financial_aid_id);
            session()->put('financial_aid_type',$type);

            return redirect(url('/apply/financial-aid/financial-questionnaire'));
        }


    }

}
