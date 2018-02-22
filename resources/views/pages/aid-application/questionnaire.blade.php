@extends('layouts.app')

@section('page-title') Financial questionnaire @endsection

@section('title') Financial questionnaire @endsection

@section('breadcrumb')

    <ol class="breadcrumb">
        <li><a href="#"><i class="demo-pli-coin"></i></a></li>
        <li><a href="#">{{$type}} Financial Aid</a></li>
        <li>KYC form</li>
        <li>Business Owner(s)/Partner(s) Details</li>
        <li class="active">Financial questionnaire</li>
    </ol>

@endsection

@section('content')

    <div class="panel">
        <div class="eq-height clearfix">
            <div class="col-md-3 eq-box-md text-center box-vmiddle-wrap bord-hor">

                <!-- Simple Promotion Widget -->
                <!--===================================================-->
                <div class="box-vmiddle pad-all">
                    <h3 class="text-main">Financial Questionnaire</h3>
                     <div class="pad-ver">
                        <i class="demo-pli- icon-5x"></i>
                     </div>
                     <p class="pad-btn text-md">You are almost done, just few more forms to go.</p>
                    <br>
                </div>
                <!--===================================================-->
            </div>
            <div class="col-md-9 eq-box-md eq-no-panel">

                <!-- Main Form Wizard -->
                <!--===================================================-->
                <div id="demo-bv-wz">
                    <div class="wz-heading pad-top">
                        <!--Nav-->
                        <ul class="row wz-step wz-icon-bw wz-nav-off mar-top wz-steps">
                            <li class="col-xs-2 bv-tab-success active">
                                <a data-toggle="tab" href="#demo-bv-tab1" aria-expanded="true">
                                    <span class="text-danger"><i class="demo-pli-coin icon-2x"></i></span>
                                    <p class="text-semibold mar-no"></p>
                                </a>
                            </li>
                            <li class="col-xs-2 bv-tab-success">
                                <a data-toggle="tab" href="#demo-bv-tab2" aria-expanded="false">
                                    <span class="text-warning"><i class="demo-pli-home icon-2x"></i></span>
                                    <p class="text-semibold mar-no"></p>
                                </a>
                            </li>
                            <li class="col-xs-2 bv-tab-success">
                                <a data-toggle="tab" href="#demo-bv-tab3" aria-expanded="false">
                                    <span class="text-info"><i class="fa fa-bank fa-2x"></i></span>
                                    <p class="text-semibold mar-no"></p>
                                </a>
                            </li>
                            <li class="col-xs-2">
                                <a data-toggle="tab" href="#demo-bv-tab4" aria-expanded="false">
                                    <span class="text-success"><i class="demo-pli-information icon-2x"></i></span>
                                    <p class="text-semibold mar-no"></p>
                                </a>
                            </li>
                            <li class="col-xs-2">
                                <a data-toggle="tab" href="#demo-bv-tab5" aria-expanded="false">
                                    <span class="text-success"><i class="demo-pli-recycling icon-2x"></i></span>
                                    <p class="text-semibold mar-no"></p>
                                </a>
                            </li>
                            <li class="col-xs-2">
                                <a data-toggle="tab" href="#demo-bv-tab6" aria-expanded="false">
                                    <span class="text-success"><i class="demo-pli-information icon-2x"></i></span>
                                    <p class="text-semibold mar-no"></p>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--progress bar-->
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-primary" style="width: 25%; left: 0%; position: relative; transition: all 0.5s;"></div>
                    </div>


                    <!--Form-->
                    <form id="demo-bv-wz-form" class="form-horizontal bv-form" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;" disabled="disabled"></button>
                        <div class="panel-body">
                            <div class="tab-content">

                                <!--First tab-->
                                <div id="demo-bv-tab1" class="tab-pane active in">
                                    <h3> Financial Aid Details</h3>
                                    <div class="form-group has-feedback">
                                        <label class="col-lg-3 control-label">Aid Amount (&#x20a6;)</label>
                                        <div class="col-lg-7">
                                            <input type="number" class="form-control" name="amount" placeholder="Aid amount">
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label class="col-lg-3 control-label">Terms</label>
                                        <div class="col-lg-7">
                                            <select class="form-control special_select" name="term">
                                                @for($x = 0 ; $x < 24; $x++)
                                                <option value="{{$x+1}}"> {{$x+1}} month(s)</option>
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label class="col-lg-3 control-label">Purpose of Financial Aid</label>
                                        <div class="col-lg-7">
                                            <textarea class="form-control" name="purpose" rows="4">       </textarea>
                                        </div>
                                    </div>
                                </div>

                                <!--Second tab-->
                                <div id="demo-bv-tab2" class="tab-pane fade">
                                    <h3> Business Details   <small class="text text-sm-right">All fields are required</small> </h3>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                             <label> Business Name</label>
                                               <input type="text" name="business_name" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label"> Business Type</label>
                                                <div class="radio">
                                                        <input id="demo-inline-form-radio-2" checked class="magic-radio" type="radio" name="business_type">
                                                        <label for="demo-inline-form-radio-2">Sole Proprietorship</label>
                                                        <input id="demo-inline-form-radio-3" class="magic-radio" type="radio" name="business_type">
                                                        <label for="demo-inline-form-radio-3">Partnership </label>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                            <div class="form-group col-md-3">
                                                <label> Cert Of Registration Number</label>
                                                <input type="text" name="cert_of_reg_num" class="form-control"/>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label> Date of Registration</label>
                                                <input type="text" name="date_of_reg" class="form-control datepicker"/>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label> Years of Existence</label>
                                                <input type="text" name="years_of_existence" class="form-control"/>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label> TIN (Tax Identification Number) </label>
                                                <input type="text" name="business_tin" class="form-control"/>
                                            </div>
                                    </div>

                                    <div class="row">
                                            <div class="form-group col-md-6">
                                                <label> Nature of Business</label>
                                                <textarea class="form-control" name="nature_of_business" rows="3">

                                                </textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label> Business Address</label>
                                                <textarea class="form-control" name="business_address" rows="3">

                                                </textarea>
                                            </div>
                                    </div>

                                    <div class="row">
                                            <div class="form-group col-md-3">
                                                <label class="control-label">Phone Number</label>
                                                <input class="form-control" name="business_phone" type="text"/>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="control-label">Email</label>
                                                <input class="form-control" name="business_email" type="email"/>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="control-label">Number of Staff</label>
                                                <input class="form-control" name="number_of_staff" type="text"/>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label class="control-label">Number of Owners/Partners</label>
                                                <input class="form-control" name="number_of_owners" type="text"/>
                                            </div>
                                    </div>

                                    <div class="row">
                                            <div class="form-group col-md-4">
                                                <label class="control-label"><small> Number of Office Equipment with value above 100,000</small></label>
                                                <input type="number" name="num_of_office_equip_with_value_above_100k" class="form-control"/>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label"><small>Total amount of Office Equipment with value above 100,000</small></label>
                                                <input type="number" name="total_amount_of_office_equip_with_value_above_100k" class="form-control"/>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label class="control-label">Last financial year turn over</label>
                                                <input type="number" name="last_financial_year_turn_over" class="form-control"/>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label class="control-label">Last financial year profit</label>
                                                <input type="number" name="last_financial_year_profit" class="form-control"/>
                                            </div>
                                    </div>

                                </div>

                                <!--Third tab-->
                                <div id="demo-bv-tab3" class="tab-pane">
                                    <h3>Disbursement Information</h3>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Bank Name</label>
                                        <div class="col-sm-8">
                                           <select class="form-control special_select">
                                               @foreach(\App\Models\Bank::all() as $serial => $bank)
                                               <option value="{{$bank->id}}">
                                                  {{$bank->name}}
                                               </option>
                                                   @endforeach
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Account Number</label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="Account Number" name="account_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">BVN</label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="BVN (Bank Verification Number)" name="bvn" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--Fourth tab-->
                                <div id="demo-bv-tab4" class="tab-pane mar-btm text-center">

                                    <h3>Reference Information</h3>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>First Name</label>
                                            <input type="text" placeholder="First name" name="reference_first_name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Middle Name</label>
                                            <input type="text" placeholder="Middle name" name="reference_middle_name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Last Name</label>
                                            <input type="text" placeholder="Last name" name="reference_last_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Phone Number</label>
                                            <input type="text" placeholder="Phone number" name="reference_phone_number" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Email</label>
                                            <input type="text" placeholder="E-mail" name="reference_email" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Profession</label>
                                            <input type="text" placeholder="Profession" name="reference_profession" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Address</label>
                                            <textarea class="form-control" required name="reference_address"></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Residence Address</label>
                                            <textarea class="form-control" required name="reference_residence_address"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div id="demo-bv-tab5" class="tab-pane mar-btm text-center">
                                    <h3>Collateral</h3>
                                    <div class="form-group">
                                        <label for="demo-is-inputnormal" class="col-sm-3 control-label"> Collateral</label>
                                        <div class="col-sm-6">
                                            <select class="special_select form-control" name="collateral">
                                                @foreach(\App\Models\Collateral::all() as $serial => $collateral)
                                                <option value="{{$collateral->id}}">{{$collateral->name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="demo-is-inputnormal" class="col-sm-3 control-label"> Normal Input</label>
                                        <div class="col-sm-6">
                                             <textarea class="form-control" name="collateral_description" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div id="demo-bv-tab6" class="tab-pane mar-btm text-center">
                                    <h3>Declaration</h3>
                                    <p class="text text-md">
                                            I/We hereby apply for a financial aid with FODDS Capital. I/We accept and agree to be bound by the Terms &amp; Conditions
                                            should an acceptance of financial aid request and offer be made by FODDS Capital. I/We hereby accept my/our liability to
                                            FODDS Capital. I/We understand that FODDS Capital may, at its discretion, terminate this agreement for breach of any of
                                            the terms and conditions, at which point all outstanding obligations become due. I/We declare that the information given
                                            is true and accurate to the best of my/our knowledge. I/We authorize FODDS Capital to carry out all necessary credit checks
                                            with credit bureau and relevant background checks in the process of appraising my/our application. In the event that the amount
                                            I/We qualify for is less than the amount applied for, I/We authorize FODDS Capital to contact me and credit my account with the
                                            approved amount.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--Footer button-->
                        <div class="panel-footer text-right">
                            <div class="box-inline">
                                <button type="button" class="previous btn btn-primary disabled">Previous</button>
                                <button type="button" class="next btn btn-primary" style="">Next</button>
                                <button type="submit" class="finish btn btn-warning" style="display: none;" disabled="">Finish</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--===================================================-->
                <!-- End of Main Form Wizard -->

            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script src="{{asset('js/pages/questionnaire.js')}}"></script>
@endsection