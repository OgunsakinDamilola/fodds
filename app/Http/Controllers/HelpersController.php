<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Collateral;
use App\Models\Designation;
use App\Models\Title;
use Illuminate\Http\Request;

class HelpersController extends Controller
{

    public function titles(){
        $titles = Title::all();
        $returnValues = '';
        foreach($titles as $i => $title){
            $returnValue = '<option value="'.$title->id.'">'.$title->name.'</option>';
            $returnValues = $returnValues.$returnValue;
        }
        return $returnValues;
    }

    public function designations(){
        $designations = Designation::all();
        $returnValues = '';
        foreach($designations as $i => $designation){
            $returnValue = '<option value="'.$designation->id.'">'.$designation->name.'</option>';
            $returnValues = $returnValues.$returnValue;
        }
        return $returnValues;
    }

    public function banks(){
        $banks = Bank::all();
        $returnValues = '';
        foreach($banks as $i => $bank){
            $returnValue = '<option value="'.$bank->id.'">'.$bank->name.'</option>';
            $returnValues = $returnValues.$returnValue;
        }
        return $returnValues;
    }

    public function collateral(){
        $collateral = Collateral::all();
        $returnValues = '';
        foreach($collateral as $i => $option){
            $returnValue = '<option value="'.$option->id.'">'.$option->name.'</option>';
            $returnValues = $returnValues.$returnValue;
        }
        return $returnValues;
    }

}
