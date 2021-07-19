
@extends('admin.master')

@section('title')
    <title>Show</title>
@endsection

@section('main-content')

    <sectiion>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header  card_main text-dark font-weight-bold">Basic Form Builder</div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header  card_main text-dark font-weight-bold">Basic Instructions</div>
                        <div class="card-body">
                            <fieldset class="border rounded p-2" style="border: 1px solid #a0aec0 !important;">
                                <legend class="w-auto">Company Information</legend>

                                <div class="row">
                                    <div class="col-md-5">
                                        <span class="v_lable">Name of Organization (English)</span>
                                        <span class="float-right">:</span>
                                    </div>
                                    <div class="col-md-7">
                                        <spqn> {{ $app_info->name_of_org_eng }} </spqn>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <span class="v_lable">Name of Organization (Bangla)</span>
                                        <span class="float-right">:</span>
                                    </div>
                                    <div class="col-md-7">
                                      <spqn> {{ $app_info->name_of_org_ban }} </spqn>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <span class="v_lable">Type of the organization</span>
                                        <span class="float-right">:</span>
                                    </div>
                                    <div class="col-md-7">
                                        {{$type_of_org[$app_info->type_of_org] ?? ""}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <span class="v_lable">Status of the organization</span>
                                        <span class="float-right">:</span>
                                    </div>
                                    <div class="col-md-7">
                                        {{$status_of_org[$app_info->status_of_org] ?? ""}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <span class="v_lable">Ownership status</span>
                                        <span class="float-right">:</span>
                                    </div>
                                    <div class="col-md-7">
                                        {{$ownership_of_org[$app_info->ownership_of_org] ?? ""}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <span class="v_lable">Country of Origin</span>
                                        <span class="float-right">:</span>
                                    </div>
                                    <div class="col-md-7">
                                        {{$country_of_org[$app_info->country_of_org] ?? ""}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <span class="v_lable">Name of the project</span>
                                        <span class="float-right">:</span>
                                    </div>
                                    <div class="col-md-7">
                                        {{$app_info->name_of_the_project}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <span class="v_lable">Business Sector (BBS Class Code) </span>
                                        <span class="float-right">:</span>
                                    </div>
                                    <div class="col-md-7">
                                        {{$app_info->business_sector}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <span class="v_lable">Major activities in brief</span>
                                        <span class="float-right">:</span>
                                    </div>
                                    <div class="col-md-7">
                                        {{$app_info->major_activities}}
                                    </div>
                                </div>

                            </fieldset>

                            <div class="pt-4">
                                <fieldset class="border rounded p-2" style="border: 1px solid #a0aec0 !important;">
                                    <legend class="w-auto">Service Fee Payment</legend>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <span class="v_lable">Contact name</span>
                                            <span class="float-right">:</span>
                                        </div>
                                        <div class="col-md-7">
                                            {{ $app_info->contact_name}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <span class="v_lable">Contact email</span>
                                            <span class="float-right">:</span>
                                        </div>
                                        <div class="col-md-7">
                                            {{ $app_info->contact_email}}
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-5">
                                            <span class="v_lable">Contact phone</span>
                                            <span class="float-right">:</span>
                                        </div>
                                        <div class="col-md-7">
                                            {{$app_info->contact_phone}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <span class="v_lable">Contact address</span>
                                            <span class="float-right">:</span>
                                        </div>
                                        <div class="col-md-7">
                                            {{$app_info->contact_address}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <span class="v_lable">Pay amount</span>
                                            <span class="float-right">:</span>
                                        </div>
                                        <div class="col-md-7">
                                            {{$app_info->pay_amount}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <span class="v_lable">VAT on pay amount</span>
                                            <span class="float-right">:</span>
                                        </div>
                                        <div class="col-md-7">
                                            {{$app_info->vat_on_pay_amount}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <span class="v_lable">Total amount</span>
                                            <span class="float-right">:</span>
                                        </div>
                                        <div class="col-md-7">
                                            {{$app_info->total_amount}}
                                        </div>
                                    </div>

                                </fieldset>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </sectiion>
@endsection
