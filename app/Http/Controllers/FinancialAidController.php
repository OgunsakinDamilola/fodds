<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancialAidController extends Controller
{
    public function apply($type){

        return view('pages.aid-application.kyc',compact('type'));

    }

    public function questionnaire($type){

        return view('pages.aid-application.questionnaire',compact('type'));

    }

}
