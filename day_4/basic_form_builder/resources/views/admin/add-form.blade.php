@extends('admin.master')

@section('main-content')

    <section>
        <div class="container-fluid">

            {!! Session::has('success') ? '<div class="alert alert-success alert-dismissible">
       <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>'. Session::get("success") .'</div>' : '' !!}
            {!! Session::has('error') ? '<div class="alert alert-danger alert-dismissible">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>'. Session::get("error") .'</div>' : '' !!}


            <div class="card">
                <div class="card-header  card_main text-dark font-weight-bold">Basic Form Builder</div>

                <form method="post" action="/store" name="frmInfo" id="frmInfo">
                    {{ csrf_field() }}
                    <div class="step-app" id="demo">

                        <ul class="step-steps">
                            <li data-step-target="step1" class="font-weight-bold rounded mr-3">1. Informations</li>
                            <li data-step-target="step2" class="font-weight-bold text-white rounded mr-3">2.
                                Attachments
                            </li>
                            <li data-step-target="step3" class="font-weight-bold text-white rounded">3. Payment</li>
                        </ul>
                        <div class="step-content">
                            <!-- Information  -->
                            <div class="step-tab-panel " data-step="step1" id="frmOne" name="frmOne">
                                <!-- Basic Info  -->
                                <div class="card ">
                                    <div class="card-header  card_main text-dark font-weight-bold">Basic Instructions
                                    </div>
                                    <div class="card-body">
                                        <fieldset class="border p-2">
                                            <legend class="w-auto">Address</legend>

                                            <div class="row">
                                                <div class="col">

                                                    <div class="row pb-1">
                                                        <label for="division"
                                                               class="col-sm-4 col-form-label">Division</label>
                                                        <div class="col-sm-8 " >
                                                            <input type="text" class="form-control {{$errors->has('division') ? 'has-error': ''}}" id="division"
                                                                   name="division" value="{{old('division')}}" placeholder="type your division"
                                                                   >
                                                            {!! $errors->first('division','<span class="help-block">:message</span>') !!}
                                                        </div>
                                                    </div>
                                                    <div class="row pb-1">
                                                        <label for="police_station" class="col-sm-4 col-form-label">Police
                                                            Station</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="police_station"
                                                                   name="police_station"
                                                                   placeholder="type your police station" value="{{old('police_station')}}">
                                                        </div>
                                                    </div>
                                                    <div class="row pb-1">
                                                        <label for="post_code" class="col-sm-4 col-form-label">Post
                                                            Code</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" class="form-control" id="post_code"
                                                                   name="post_code" value="{{old('post_code')}}" >
                                                        </div>
                                                    </div>
                                                    <div class="row pb-1">
                                                        <label for="telephone_number" class="col-sm-4 col-form-label">Telephone
                                                            No</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control"
                                                                   id="telephone_number" name="telephone_number"
                                                                    value="{{old('telephone_number')}}" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row pb-1">
                                                        <label for="district"
                                                               class="col-sm-4 col-form-label">District</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="district"
                                                                   name="district" value="{{old('district')}}"  >
                                                        </div>
                                                    </div>
                                                    <div class="row pb-1">
                                                        <label for="post_office" class="col-sm-4 col-form-label">Post
                                                            Office</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" class="form-control" id="post_office"
                                                                   name="post_office" value="{{old('post_office')}}"  >
                                                        </div>
                                                    </div>
                                                    <div class="row pb-1">
                                                        <label for="house_flat_road" class="col-sm-4 col-form-label">House,
                                                            Flat, Road</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="house_flat_road"
                                                                   name="house_flat_road"
                                                                   placeholder="House, Flat, Road" value="{{old('house_flat_road')}}">
                                                        </div>
                                                    </div>

                                                    <div class="row pb-1">
                                                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                                                        <div class="col-sm-8">
                                                            <input type="email" class="form-control" id="email"
                                                                   name="email"
                                                                   value="{{old('email')}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                    </div>
                                </div>

                                <!-- Company information  -->
                                <div class="card card-info mt-4">
                                    <div class="card-header  card_main text-dark font-weight-bold">A. Company
                                        Information
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="name_of_org_eng" class="col-sm-6 col-form-label">Name of
                                                Organization/ Company/
                                                Industrial Project(English)</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name_of_org_eng"
                                                       id="name_of_org_eng" value="{{old('name_of_org_eng')}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name_of_org_ban" class="col-sm-6 col-form-label">Name of
                                                Organization/ Company/
                                                Industrial Project(Bangla)</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name_of_org_ban"
                                                       id="name_of_org_ban" value="{{old('name_of_org_ban')}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="type_of_org" class="col-sm-3 col-form-label">Type of the
                                                organization</label>
                                            <div class="col-sm-3">
                                                <select class="custom-select" id="type_of_org" name="type_of_org" value="{{old('type_of_org')}}">
                                                    <option value="0">Government organization</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <label for="status_of_org" class="col-sm-3 col-form-label">Status of
                                                the organization<i class="fa fa-question-circle" aria-hidden="true"></i></label>
                                            <div class="col-sm-3">
                                                <select class="custom-select" id="status_of_org" name="status_of_org">
                                                    <option selected>Select One</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="ownership_of_org" class="col-sm-3 col-form-label">Ownership
                                                status</label>
                                            <div class="col-sm-3">
                                                <select class="custom-select" id="ownership_of_org" name="ownership_of_org">
                                                    <option selected>Company</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <label for="country_of_org" class="col-sm-3 col-form-label">Country of
                                                Origin<i class="fa fa-question-circle" aria-hidden="true"></i></label>
                                            <div class="col-sm-3">
                                                <select class="custom-select" id="country_of_org" name="country_of_org">
                                                    <option selected>Select One</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="name_of_the_project" class="col-sm-3 col-form-label">Name of the
                                                project <i class="fa fa-question-circle" aria-hidden="true"></i></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="name_of_the_project"
                                                       id="name_of_the_project" value="{{old('name_of_the_project')}}" placeholder="" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="business_sector" class="col-sm-3 col-form-label">Business
                                                Sector (BBS Class Code)
                                                <i class="fa fa-question-circle" aria-hidden="true"></i></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                       id="business_sector" name="business_sector" value="{{old('business_sector')}}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="major_activities" class="col-sm-3 col-form-label">Major
                                                activities in brief</label>
                                            <div class="col-sm-9">
                                                <textarea name="major_activities" id="major_activities"
                                                          class=" form-control" rows="4"
                                                          placeholder="Maximum 240 characters" value="{{old('major_activities')}}"></textarea>
                                                <p class="text_color_1">0/240</p>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-sm-12 col-md-3">

                                                <lable class="col-form-label mt-2">Is this first project of this company?
                                                    <font color="red">* </font>
                                                </lable>
                                            </div>
                                            <div class="col-sm-12  col-md-4 col-sm-offset-6 ">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input " type="radio" name="first_or_not" id="first_or_not_One"
                                                           value="1">
                                                    <label class="form-check-label" for="first_or_not_One">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="first_or_not" id="first_or_not_Zero"
                                                           value="0">
                                                    <label class="form-check-label" for="first_or_not_Zero">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Compensation Benefit  -->
                                <div class="mt-4">
                                    <fieldset class="border p-2">
                                        <legend class="w-auto">Compensation and Benefit:</legend>
                                        <div>
                                            <table class="table table-striped table-borderedd table-responsive">
                                                <thead>
                                                <tr>
                                                    <th scope="col" width="40%">Salary Structure</th>
                                                    <th scope="col" width="25%">Payment</th>
                                                    <th scope="col" width="25%">Amount</th>
                                                    <th scope="col" width="10%">Curency</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td scope="row">a. Basic salary/Honorarium</td>
                                                    <td scope="row">
                                                        <select class="custom-select" id="inputGroupSelect01" >
                                                            <option selected>Monthly</option>
                                                            <option value="1">Half Yearly</option>
                                                            <option value="2">Yearly</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="col-12 rounded" style="height:35px"
                                                               placeholder="" name="basic_amount" value="{{old('basic_amount')}}">
                                                    </td>
                                                    <td scope="row">
                                                        <select class="custom-select" id="inputGroupSelect01" >
                                                            <option selected>PBA</option>
                                                            <option value="1">USD</option>
                                                            <option value="2">BDT</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td scope="row">b. House rent</td>
                                                    <td scope="row">
                                                        <select class="custom-select" id="inputGroupSelect01">
                                                            <option selected>Monthly</option>
                                                            <option value="1">Half Yearly</option>
                                                            <option value="2">Yearly</option>
                                                        </select>
                                                    </td>
                                                    <td scope="row">
                                                        <input type="number" class="col-12  rounded" name="house_amount" value="{{old('house_amount')}}" style="height:35px">
                                                    </td>
                                                    <td scope="row">
                                                        <select class="custom-select" id="inputGroupSelect01">
                                                            <option selected>PBA</option>
                                                            <option value="1">USD</option>
                                                            <option value="2">BDT</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td scope="row">c. Other fringe benefits</td>

                                                    <td scope="row" colspan="3">
                                                        <textarea name="fringe_benefits" id="fringe_benefits" cols="150"
                                                                  class="rounded" rows="4" value="{{old('fringe_benefit')}}"
                                                                  placeholder="Maximum 250 characters"></textarea>
                                                    </td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>


                            <!-- Attachment  -->
                            <div class="step-tab-panel" data-step="step2" id="frmTwo" name="frmTwo">
                                <!-- Necessary documents  -->
                                <div class="card card-info mt-5 ">
                                    <div class="card-header  card_main text-dark font-weight-bold">Necessary documents
                                        to be attached here
                                        (Only
                                        PDF
                                        file)
                                    </div>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col"> attachment (you may prefer to select file from
                                                recent attachment)<i class="fa fa-question-circle"
                                                                     aria-hidden="true"></i></th>
                                            <th scope="col">Attached PDF file (Each File Max. size 2MB)</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1 <font color="red">* </font>
                                            </th>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque
                                                quisquam aspernatur
                                                iure rem
                                                praesentium molestiae.
                                                <button class="btn btn-default text-white bg-primary py-1"><i
                                                        class="fa fa-file-pdf-o bg-white text-dark "
                                                        aria-hidden="true"></i> Recent
                                                    attachment
                                                </button>
                                            </td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label" for="inputGroupFile02"
                                                               aria-describedby="inputGroupFileAddon02">Choose
                                                            file</label>
                                                        <input type="file" class="custom-file-input"
                                                               id="inputGroupFile02" >
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">2 <font color="red">* </font>
                                            </th>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque
                                                quisquam aspernatur
                                                iure rem
                                                praesentium molestiae.
                                                <button class="btn btn-default text-white bg-primary py-1"><i
                                                        class="fa fa-file-pdf-o bg-white text-dark "
                                                        aria-hidden="true"></i> Recent
                                                    attachment
                                                </button>
                                            </td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label" for="inputGroupFile02"
                                                               aria-describedby="inputGroupFileAddon02">Choose
                                                            file</label>
                                                        <input type="file" class="custom-file-input"
                                                               id="inputGroupFile02">
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">3 <font color="red">* </font>
                                            </th>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque
                                                quisquam aspernatur
                                                iure rem
                                                praesentium molestiae.
                                                <button class="btn btn-default text-white bg-primary py-1"><i
                                                        class="fa fa-file-pdf-o bg-white text-dark "
                                                        aria-hidden="true"></i> Recent
                                                    attachment
                                                </button>
                                            </td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label" for="inputGroupFile02"
                                                               aria-describedby="inputGroupFileAddon02">Choose
                                                            file</label>
                                                        <input type="file" class="custom-file-input"
                                                               id="inputGroupFile02">
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>


                            <!-- Service Fee Payment  -->
                            <div class="step-tab-panel" data-step="step3" id="frmThree" name="frmThree">
                                <div class="card card-info mt-5 mb-2 pb-5">
                                    <div class="card-header card_main text-dark font-weight-bold">Service Fee Payment
                                    </div>
                                    <div class="row m-1 pt-2">
                                        <div class="col">

                                            <div class="row pb-1">
                                                <label for="contact_name" class="col-sm-4 col-form-label">Contact name
                                                    <font color="red">*
                                                    </font>
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="contact_name"
                                                           name="contact_name" value="{{old('contact_name')}}" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="row pb-1">
                                                <label for="contact_phone" class="col-sm-4 col-form-label">Contact phone
                                                    <font color="red">*
                                                    </font>
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="contact_phone"
                                                           name="contact_phone" value="{{old('contact_phone')}}" placeholder=""  >
                                                </div>
                                            </div>
                                            <div class="row pb-1">
                                                <label for="pay_amount" class="col-sm-4 col-form-label">Pay
                                                    amount</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="pay_amount"
                                                           name="pay_amount" value="{{old('pay_amount')}}" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="row pb-1">
                                                <label for="total_amount" class="col-sm-4 col-form-label">Total
                                                    amount</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control {{$errors->has('total_amount') ? 'has-error': ''}}"
                                                           name="total_amount" id="total_amount" value="{{old('total_amount')}}">
                                                    {!! $errors->first('total_amount','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="row pb-1">
                                                <label for="contact_email" class="col-sm-4 col-form-label">Contact email
                                                    <font color="red">*
                                                    </font>
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control" id="contact_email"
                                                           name="contact_email" value="{{old('contact_email')}}"
                                                           placeholder="">
                                                </div>
                                            </div>
                                            <div class="row pb-1">
                                                <label for="contact_address" class="col-sm-4 col-form-label">Contact
                                                    address <font color="red">*
                                                    </font>
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="contact_address"
                                                           name="contact_address" value="{{old('contact_address')}}" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="row pb-1">
                                                <label for="vat_on_pay_amount" class="col-sm-4 col-form-label">VAT on
                                                    pay amount</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="vat_on_pay_amount"
                                                           name="vat_on_pay_amount" value="{{old('vat_on_pay_amount')}}" placeholder="">
                                                </div>
                                            </div>

                                            <div class="row pb-1">
                                                <label for="payment_status" class="col-sm-4 col-form-label">Payment
                                                    Status</label>
                                                <div class="col-sm-4">
                                                    <input type="text" disabled
                                                           class="form-control bg-warning text-white text-center"
                                                           id="payment_status" name="payment_status" placeholder=""
                                                           value="Not Paid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-danger m-3" role="alert">
                                        <b>Vat/Tax</b> and <b>Transection Charge </b>is a approximate amount, those may
                                        vary based on the
                                        Sonali
                                        Bank
                                        system and those will be visible here after payment submission.
                                    </div>
                                    <div class="form-group form-check mx-auto col-2">
                                        <input type="checkbox" class="form-check-input" id="all_info_are_correct"
                                               name="all_info_are_correct" value="all_correct">
                                        <label class="form-check-label" for="all_info_are_correct">All information are
                                            correct</label>
                                    </div>
                                </div>
                                <!-- Buttons  -->
                                <div class="row mt-4 mb-5 pb-1">
                                    <div class="col-4">
                                        <button type="button" class="btn btn-info col-5">Save & Draft</button>
                                        <!-- <button type="button" class="btn btn-info btn-lg mr-3">Save & Draft</button> -->
                                        <button type="submit" class="btn btn-success   col-5">Payment & Submit <i
                                                class="fa fa-question-circle" aria-hidden="true"></i></button>
                                        <!-- <button type="button" class="btn btn-succes btn-lg">Payment & Submit <i class="fa fa-question-circle" aria-hidden="true"></i> </button> -->
                                    </div>
                                    <div class="col-sm-4">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="step-footer">
                            <button data-step-action="prev" class="step-btn">Previous</button>
                            <button data-step-action="next" class="step-btn">Next</button>
                            <button data-step-action="finish" class="step-btn">Finish</button>
                        </div>
                    </div>
                </form>

                <!-- </div> -->
            </div>
        </div>
    </section>

@endsection
