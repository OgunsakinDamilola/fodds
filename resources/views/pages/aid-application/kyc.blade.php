@extends('layouts.app')

@section('page-title') KYC FORM @endsection

@section('title') KYC form @endsection

@section('breadcrumb')

    <ol class="breadcrumb">
    <li><a href="#"><i class="demo-pli-coin"></i></a></li>
    <li><a href="#">{{$type}} Financial Aid</a></li>
    <li>KYC form</li>
    <li class="active">Business Owner(s)/Partner(s) Details</li>
    </ol>

@endsection

@section('content')

    <form method="post" enctype="multipart/form-data" action="">
        @csrf
        <!-- KYC FORM Opening -->
<div class="kyc_forms">
    <input type="hidden" id="count_kyc_form" value="1"/>
    <div id="kyc_form_1" class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Business Owner / Partner Detail</h3>
        </div>
        <div class="panel-body">
            <!-- Inline Form  -->
            <!--===================================================-->

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label text-semibold">Title</label>
                        <select class="special_select form-control" name="title[]" required>
                            <optgroup label="Select Title">
                                <option value="1">Mr. </option>
                                <option value="2">Mrs. </option>
                                <option value="3">Master </option>
                                <option value="4">Miss </option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-feedback">
                        <label class="control-label text-semibold">First Name</label>
                        <input type="text" placeholder="First name" class="form-control" name="first_name[]" required>
                        <i class="demo-pli-add-user form-control-feedback"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-feedback">
                        <label class="control-label text-semibold">Middle Name</label>
                        <input type="text" placeholder="Middle name" class="form-control" name="middle_name[]" required>
                        <i class="demo-pli-add-user form-control-feedback"></i>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-feedback">
                        <label class="control-label text-semibold">Last Name</label>
                        <input type="text" placeholder="Last name" class="form-control" name="last_name[]" required>
                        <i class="demo-pli-add-user form-control-feedback"></i>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Address</label>
                        <textarea placeholder="Address" rows="4" class="form-control" required name="address[]"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Residential Address</label>
                        <textarea placeholder="Residential Address" rows="4" class="form-control" required name="residential_address[]"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group has-feedback">
                        <label class="control-label text-semibold"> Designation</label>
                        <select class="special_select form-control" name="designation" required>
                            <optgroup label="Designation">
                                <option value="1">Director </option>
                                <option value="2">Owner </option>
                                <option value="3">Partner </option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-feedback">
                        <label class="control-label text-semibold"> Email</label>
                        <input type="email" placeholder="E-mail" class="form-control" name="email" required>
                        <i class="demo-pli-mail form-control-feedback"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-feedback">
                        <label class="control-label text-semibold"> Phone Number</label>
                        <input type="text" placeholder="11 digits number" class="form-control" name="phone" required>
                        <i class="demo-pli-old-telephone form-control-feedback"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-feedback">
                        <label class="control-label text-semibold"> Date of Birth</label>
                        <input type="text" placeholder="Date of birth" class="form-control datepicker" name="date_of_birth" required>
                        <i class="demo-pli-calendar-4 form-control-feedback"></i>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group has-feedback">
                        <label class="control-label text-semibold">ID Type</label>
                        <input type="text" placeholder="Identity Card Type" class="form-control" name="id_type[]" required>
                        <i class="demo-pli-checked-user form-control-feedback"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-feedback">
                        <label class="control-label text-semibold">ID Number</label>
                        <input type="text" placeholder="Identity Card Number" class="form-control" name="id_number[]" required>
                        <i class="demo-pli-lock-user form-control-feedback"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-feedback">
                        <label class="control-label text-semibold">ID Issue Date</label>
                        <input type="text" placeholder="Identity Card Issue Date" class="form-control datepicker" name="id_issue_date[]" required>
                        <i class="demo-pli-calendar-4 form-control-feedback"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-feedback">
                        <label class="control-label text-semibold">ID Expiry Date</label>
                        <input type="text" placeholder="Identity Card Expiry Date" class="form-control datepicker" name="id_expiry_date[]" required>
                        <i class="demo-pli-calendar-4 form-control-feedback"></i>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group has-feedback">
                        <label class="control-label text-semibold"> Passport Photograph</label>
                        <input type="file" name="passport_photograph[]" class="form-control" required />
                        <i class="demo-pli-file-pictures form-control-feedback"></i>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group has-feedback">
                        <label class="control-label text-semibold"> TIN (Tax Identification Number)   *** <small>Mandatory for Directors and Owners</small></label>
                        <input type="text" name="tin[]" class="form-control" placeholder="Tax Identification Number" />
                    </div>
                </div>
            </div>


            <!--===================================================-->
            <!-- End Inline Form  -->

        </div>
    </div>
</div>

    <!-- KYC FORM Close -->

    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="row">
                        <div class="col-xs-6">
                            <button class="btn btn-primary btn-block" type="submit"> Submit</button>
                        </div>
                        <div class="col-xs-3">
                            <button  type="button" id="add_business"  class="btn btn-primary btn-labeled btn-block" data-toggle="tooltip" data-original-title="Add another business owner or partner details form"><i class="btn-label fa fa-plus"></i> Add</button>
                        </div>
                        <div class="col-xs-3">
                            <button  type="button" id="remove_business" class="btn btn-danger btn-labeled btn-block" data-toggle="tooltip" data-original-title="Remove business owner or partner details form"><i class="btn-label fa fa-minus"></i> Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </form>
@endsection

@section('javascript')
<script src="{{asset('js/pages/kyc.js')}}"></script>
@endsection