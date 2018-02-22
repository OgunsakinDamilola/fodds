<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Collateral;
use App\Models\Designation;
use App\Models\FinancialAidType;
use App\Models\IdentityType;
use App\Models\Title;
use Illuminate\Http\Request;

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

    public function questionnaire($type)
    {
        return view('pages.aid-application.questionnaire', compact('type'));
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
            'phone.*' => 'required|digits:11',
            'email.*' => 'required|string|email|max:255',
            'id_type.*' => 'required',
            'id_number.*' => 'required',
            'id_issue_date.*' => 'required',
            'id_expiry_date.*' => 'required',
            'passport_photo_path.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


    }

}
