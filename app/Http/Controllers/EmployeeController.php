<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeEducationalQualification;
use App\Models\EmployeePersonalInformation;
use App\Models\EmployeeProfessionalInformation;
use DB;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EmployeeController extends Controller
{
    public function ShowForms()
    {
        return view('welcome');
    }
    public function InsertData(Request $req)
    {
        DB::beginTransaction();
        try {
            // Custom validation
            // $designation = $req->get('designation');
            // $name = $req->get('name');
            // $previous_company_name = $req->get('previous_company_name');

            // if (intval($designation) || intval($name) || intval($previous_company_name)) {
            //     return redirect()->back()->with('error', 'Integer number is not allowed for name, designation & previous company name.');
            // }

            $personal_info_data = $req->validate([
                'name' => 'required|string',
                'age' => 'required|numeric',
                'mobile' => 'required|string',
                'nid' => 'required|string',
                'address' => 'required|string',
                'gender' => 'required|string',

            ]);
            // Insert into EmployeePersonalInformation
            $personalInfo = EmployeePersonalInformation::create($personal_info_data);
            // dd($personalInfo);
            if ($personalInfo) {

                $edu_info_data = $req->validate([

                    'ssc_gpa' => 'required|decimal:0,2',
                    'ssc_year' => 'required|numeric',
                    'hsc_gpa' => 'required|decimal:0,2',
                    'hsc_year' => 'required|numeric',
                    'bsc_cgpa' => 'required|decimal:0,2',
                    'bsc_year' => 'required|numeric',

                ]);

                // Insert into EmployeeEducationalQualification

                $eduInfo = EmployeeEducationalQualification::create($edu_info_data + ['emp_id' => $personalInfo->id]);
                // dd($eduInfo);
                // return $eduInfo;
            }
            // dd($eduInfo);
            if ($personalInfo && $eduInfo) {
                $professional_info_data = $req->validate([

                    'previous_company_name' => 'required|string',
                    'designation' => 'required|string',
                    'experience' => 'required|decimal:0,2',
                    'current_salary' => 'required|decimal:0,2',
                ]);
                // Insert into EmployeeProfessionalInformation
                $professionalInfo = EmployeeProfessionalInformation::create($professional_info_data + ['employees_id' => $personalInfo->id]);
            }

            DB::commit(); // // If all inserts succeed, commit the transaction
            return redirect('/employees')->with('success', 'Data inserted successfully.');
        } catch (\Exception $e) {
            DB::rollback(); // If any insert fails, rollback the transaction
            dd($e->getMessage(), $e->getFile(), $e->getLine());
            return redirect()->back()->with('error', 'Data insert failed. Please try again.');
        }

        // $insert = DB::table('employee')->insert($data);
        // __Using ORM __
        // $Personal_info_data_insert = EmployeePersonalInformation::create($personal_info_data);
        // if ($Personal_info_data_insert) {
        //     $edu_info_data_insert = EmployeeEducationalQualification::create($edu_info_data);
        // } elseif ($Personal_info_data_insert) {
        //     $Professional_info_data_insert = EmployeeProfessionalInformation::create($professional_info_data);
        //     return redirect('/employees');
        // } else {
        //     return 'Data insert failed';
        // }
    }
    public function ShowEmployee(Request $request)
    {
        // $data = DB::table('employee')->select()->get();
        // dd($data);
        // __ Using Eloquent ORM __
        $data = Employee::get();

        if ($request->ajax()) {
            // dd($request->ajax());
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('employee.edit', ($row->id)) . ' " class="edit btn btn-success btn-sm">Edit</a> </br>
                                  <a href="' . route('employee.delete', ($row->id)) . ' "  class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('employees');
    }
    public function DeleteEmployee($id)
    {
        $delete = DB::table('employee')->where('id', $id)->delete();
        // __Using ORM __
        $employee = Employee::find($id);
        if ($employee) {
            $employee->delete();
            return redirect('/employees');
        } else {
            return redirect()->back()->with('message', 'Data delete failed');

        }
    }

    public function EditEmployee($id)
    {
        // $employee = DB::table('employee')->where('id', $id)->first();
        // __Using ORM __
        $employee = Employee::find($id);
        return view('edit', compact('employee'));

    }

    public function UpdateData($id, Request $req)
    {
        $data = $req->validate([
            'name' => 'required|string',
            'age' => 'required|numeric',
            'mobile' => 'required|string',
            'nid' => 'required|string',
            'address' => 'required|string',
            'gender' => 'required|string',
            'ssc_gpa' => 'required|decimal:0,2',
            'ssc_year' => 'required|numeric',
            'hsc_gpa' => 'required|decimal:0,2',
            'hsc_year' => 'required|numeric',
            'bsc_cgpa' => 'required|decimal:0,2',
            'bsc_year' => 'required|numeric',
            'msc_cgpa' => 'nullable|decimal:0,2',
            'msc_year' => 'nullable|numeric',
            'previous_company_name' => 'required|string',
            'designation' => 'required|string',
            'experience' => 'required|string',
            'current_salary' => 'required|string',
        ]);
        // Custom validation
        $designation = $req->get('designation');
        $name = $req->get('name');
        $previous_company_name = $req->get('previous_company_name');

        if (intval($designation) || intval($name) || intval($previous_company_name)) {
            return redirect()->back()->with('error', 'Integer number is not allowed for name, designation & previous company name.');
        }

        // $update = DB::table('employee')->where('id', $id)->update($data);
        // __Using ORM __
        $update = Employee::find($id)->update($data);
        if ($update) {
            return redirect('/employees');
        } else {
            return "Update Failed";
        }

    }
}
