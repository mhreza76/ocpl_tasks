@extends('admin.master')

@section('main-content')

    <section>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header  card_main text-dark font-weight-bold">Basic Form Builder</div>
                <!-- <div class="card-body"> -->
                <form action="#" name="frmInfo" id="frmInfo">

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
                                <!-- <form action="#" name="frmInfo" id="frmInfo"> -->
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
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="division"
                                                                   name="division" value="" placeholder="Dhaka"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="row pb-1">
                                                        <label for="police_station" class="col-sm-4 col-form-label">Police
                                                            Station</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="police_station"
                                                                   name="police_station" value=""
                                                                   placeholder="Uttara West" required>
                                                        </div>
                                                    </div>
                                                    <div class="row pb-1">
                                                        <label for="post_code" class="col-sm-4 col-form-label">Post
                                                            Code</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" class="form-control" id="post_code"
                                                                   name="post_code" value="" placeholder="1230" required>
                                                        </div>
                                                    </div>
                                                    <div class="row pb-1">
                                                        <label for="telephone_number" class="col-sm-4 col-form-label">Telephone
                                                            No</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" class="form-control"
                                                                   id="telephone_number" name="telephone_number"
                                                                   placeholder="01611211563" value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row pb-1">
                                                        <label for="district"
                                                               class="col-sm-4 col-form-label">District</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="district"
                                                                   name="district" value="" placeholder="Naogaon" required>
                                                        </div>
                                                    </div>
                                                    <div class="row pb-1">
                                                        <label for="post_office" class="col-sm-4 col-form-label">Post
                                                            Office</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="post_office"
                                                                   name="post_office" value="" placeholder="" >
                                                        </div>
                                                    </div>
                                                    <div class="row pb-1">
                                                        <label for="house_flat_road" class="col-sm-4 col-form-label">House,
                                                            Flat, Road</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="house_flat_road"
                                                                   name="house_flat_road"
                                                                   placeholder="House, Flat, Road" value="">
                                                        </div>
                                                    </div>

                                                    <div class="row pb-1">
                                                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                                                        <div class="col-sm-8">
                                                            <input type="email" class="form-control" id="email"
                                                                   name="email" placeholder="test@testmail.com"
                                                                   value="">
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
                                            <label for="name_of_company_eng" class="col-sm-6 col-form-label">Name of
                                                Organization/ Company/
                                                Industrial Project(English)</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" for="name_of_company_eng"
                                                       id="name_of_company_eng" value=""
                                                       placeholder="Master Array Ltd." required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name_of_company_ban" class="col-sm-6 col-form-label">Name of
                                                Organization/ Company/
                                                Industrial Project(Bangla)</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" for="name_of_company_ban"
                                                       id="name_of_company_ban" value=""
                                                       placeholder="মাস্টার অ্যারে লি.">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name_of_company_eng" class="col-sm-3 col-form-label">Type of the
                                                organization</label>
                                            <div class="col-sm-3">
                                                <select class="custom-select" id="inputGroupSelect01" required>
                                                    <option selected>Government organization</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <label for="name_of_company_eng" class="col-sm-3 col-form-label">Status of
                                                the organization<i class="fa fa-question-circle" aria-hidden="true"></i></label>
                                            <div class="col-sm-3">
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Select One</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name_of_company_eng" class="col-sm-3 col-form-label">Ownership
                                                status</label>
                                            <div class="col-sm-3">
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Company</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <label for="name_of_company_eng" class="col-sm-3 col-form-label">Country of
                                                Origin<i class="fa fa-question-circle" aria-hidden="true"></i></label>
                                            <div class="col-sm-3">
                                                <select class="custom-select" id="inputGroupSelect01" required>
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
                                                <input type="text" class="form-control" for="name_of_the_project"
                                                       id="name_of_the_project" value="" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name_of_the_project" class="col-sm-3 col-form-label">Business
                                                Sector (BBS Class Code)
                                                <i class="fa fa-question-circle" aria-hidden="true"></i></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" for="name_of_the_project"
                                                       id="name_of_the_project" value="" placeholder="">
                                                <p class="text_color_1">if you don't know the code, please select from
                                                    the list.</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name_of_the_project" class="col-sm-3 col-form-label">Major
                                                activities in brief</label>
                                            <div class="col-sm-9">
                                                <textarea name="major_activites" id="major_activites"
                                                          class=" form-control" rows="4"
                                                          placeholder="Maximum 240 characters"></textarea>
                                                <p class="text_color_1">0/240</p>
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
                                                        <select class="custom-select" id="inputGroupSelect01" required>
                                                            <option selected>Monthly</option>
                                                            <option value="1">Half Yearly</option>
                                                            <option value="2">Yearly</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="col-12 rounded" style="height:35px"
                                                               placeholder="1010" required>
                                                    </td>
                                                    <td scope="row">
                                                        <select class="custom-select" id="inputGroupSelect01" required>
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
                                                        <input type="number" class="col-12  rounded" style="height:35px"
                                                               placeholder="0.00">
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
                                                                  class="rounded" rows="4"
                                                                  placeholder="Maximum 250 characters"></textarea>
                                                    </td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- </form> -->

                            </div>


                            <!-- Attachment  -->
                            <div class="step-tab-panel" data-step="step2" id="frmTwo" name="frmTwo">
                                <!-- <form action="#" name="frmAttachment" id="frmAttachment"> -->
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
                                            <th scope="col">Required attachment (you may prefer to select file from
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
                                                               id="inputGroupFile02" required>
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

                                <!-- </form> -->
                            </div>


                            <!-- Service Fee Payment  -->
                            <div class="step-tab-panel" data-step="step3" id="frmThree" name="frmThree">
                                <!-- <form action="#" name="frmPayment" id="frmPayment"> -->
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
                                                           name="contact_name" value="" placeholder="Reza" required>
                                                </div>
                                            </div>
                                            <div class="row pb-1">
                                                <label for="contact_phone" class="col-sm-4 col-form-label">Contact phone
                                                    <font color="red">*
                                                    </font>
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="contact_phone"
                                                           name="contact_phone" placeholder="01611211563" value="" required>
                                                </div>
                                            </div>
                                            <div class="row pb-1">
                                                <label for="pay_amount" class="col-sm-4 col-form-label">Pay
                                                    amount</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="pay_amount"
                                                           name="pay_amount" value="" placeholder="250" required>
                                                </div>
                                            </div>
                                            <div class="row pb-1">
                                                <label for="total_amount" class="col-sm-4 col-form-label">Total
                                                    amount</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="post_code"
                                                           name="total_amount" class="form-control" id="total_amount"
                                                           name="total_amount" value="" placeholder="250.00">
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
                                                    <input type="text" class="form-control" id="contact_email"
                                                           name="contact_email" value=""
                                                           placeholder="rezabaiust@gmail.com" required>
                                                </div>
                                            </div>
                                            <div class="row pb-1">
                                                <label for="contact_address" class="col-sm-4 col-form-label">Contact
                                                    address <font color="red">*
                                                    </font>
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="contact_address"
                                                           name="contact_address" value="" placeholder="Dhaka" required>
                                                </div>
                                            </div>
                                            <div class="row pb-1">
                                                <label for="vat_on_pay_amount" class="col-sm-4 col-form-label">VAT on
                                                    pay amount</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" id="vat_on_pay_amount"
                                                           name="vat_on_pay_amount" placeholder="0" value="">
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
                                        <input type="checkbox" class="form-check-input" id="allInformationCorrect"
                                               name="allInformationCorrect" required>
                                        <label class="form-check-label" for="allInformationCorrect">All information are
                                            correct</label>
                                    </div>
                                </div>
                                <!-- Buttons  -->
                                <div class="row mt-4 mb-5 pb-1">
                                    <div class="col-4">
                                        <button type="button" class="btn btn-info col-5">Save & Draft</button>
                                        <!-- <button type="button" class="btn btn-info btn-lg mr-3">Save & Draft</button> -->
                                        <button type="button" class="btn btn-success   col-5">Payment & Submit <i
                                                class="fa fa-question-circle" aria-hidden="true"></i></button>
                                        <!-- <button type="button" class="btn btn-succes btn-lg">Payment & Submit <i class="fa fa-question-circle" aria-hidden="true"></i> </button> -->
                                    </div>
                                    <div class="col-sm-4">

                                    </div>
                                </div>
                                <!-- </form> -->
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
