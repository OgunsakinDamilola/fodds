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

    public function apply($type)
    {
        return view('pages.aid-application.kyc', compact('type'));
    }

    public function questionnaire($type)
    {
        return view('pages.aid-application.questionnaire', compact('type'));
    }

}
