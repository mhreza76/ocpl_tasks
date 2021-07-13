<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class BasicFormController extends Controller
{
    public function add() {
       return view('admin.add-form');
    }

    public function store(Request $request) {
//        dd($request->all());

        // validaition
//        if(!isset($request->all_info_are_correct)){
//            return view('admin.add-form');
//        }
        $rules = [
            'total_amount' => 'required',
            'division' => 'required',
        ];

        $this->validate($request, $rules);

//        custom message
//        $messages['division.required'] = 'Division is required.';
//        $this->validate($request, $rules, $messages);


        // business logic


        try {

            DB::beginTransaction();

            // db store
            $employee = new Employee;
            $employee->name_of_org_eng = $request->name_of_org_eng;
            $employee->name_of_org_ban = $request->name_of_org_ban;
            $employee->type_of_org = $request->type_of_org;
            $employee->status_of_org = $request->status_of_org;
            $employee->ownership_of_org = $request->ownership_of_org;
            $employee->country_of_org = $request->country_of_org;
            $employee->name_of_the_project = $request->name_of_the_project;
            $employee->business_sector = $request->business_sector;
            $employee->major_activities = $request->major_activities;
            $employee->first_or_not = $request->first_or_not;
            $employee->contact_name = $request->contact_name;
            $employee->contact_phone = $request->contact_phone;
            $employee->pay_amount = $request->pay_amount;
            $employee->total_amount = $request->total_amount;
            $employee->contact_email = $request->contact_email;
            $employee->contact_address = $request->contact_address;
            $employee->vat_on_pay_amount = $request->vat_on_pay_amount;
            $employee->all_info_are_correct = $request->all_info_are_correct;
            $employee->save();



            // another table

            DB::commit();

            // return with success or error message


          return redirect()->back()->with('success', 'Data stored successfully');

        } catch(\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function list() {
        $data = Employee::all();
        return view('admin.list', ['datas'=>$data]);
//        return Employee::all();
    }
}
