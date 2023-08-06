<?php

namespace App\Http\Controllers;

use App\Models\EmployeeEducationalQualification;
use App\Models\EmployeePersonalInformation;
use App\Models\EmployeeProfessionalInformation;
use DB;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\Datatables;

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
                    'msc_cgpa' => 'nullable|decimal:0,2',
                    'msc_year' => 'nullable|numeric',

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
        // $data = Employee::get();
        $data = DB::table('employee_personal_information')
            ->join('employee_educational_qualifications', 'employee_personal_information.id', '=', 'employee_educational_qualifications.emp_id')
            ->join('employee_professional_information', 'employee_personal_information.id', '=', 'employee_professional_information.employees_id')
            ->get();
        // $data = DB::table('EmployeePersonalInformation')
        //     ->join('EmployeeEducationalQualification', 'EmployeePersonalInformation.id', '=', 'EmployeeEducationalQualification.emp_id')
        //     ->join('EmployeeProfessionalInformation', 'EmployeePersonalInformation.id', '=', 'EmployeeProfessionalInformation.employees_id')
        //     ->get();
        // dd($data);
        if ($request->ajax()) {
            // dd($request->ajax());
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('employee.edit', ($row->emp_id)) . ' " class="edit btn btn-success btn-sm">Edit</a> </br>
                                  <a href="' . route('employee.delete', ($row->emp_id)) . ' "  class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('employees');
    }
    public function DeleteEmployee($id)
    {
        // __ Query Builder __ //
        // $delete = DB::table('employee')->where('id', $id)->delete();
        // __Using ORM __
        $data = EmployeePersonalInformation::find($id);
        // $employeeID = "employee_personal_information.id";
        // dd($employeeID);

        // $data = DB::table('employee_personal_information')
        //     ->join('employee_educational_qualifications', 'employee_personal_information.id', '=', 'employee_educational_qualifications.emp_id')
        //     ->join('employee_professional_information', 'employee_personal_information.id', '=', 'employee_professional_information.employees_id')
        //     ->get()
        //     ->where($id = 'employee_personal_information.id');
        if ($data) {
            // Delete related records from other tables
            // $employee->educationalQualifications()->delete()->where($id = 'employee_educational_qualifications.emp_id');
            // $employee->professionalInformation()->delete()->where($id = 'employee_professional_information.employees_id');
            // Delete related records from other tables conditionally
            $data->educationalQualifications()
                ->where('emp_id', $id)
                ->delete();

            $data->professionalInformation()
                ->where('employees_id', $id)
                ->delete();

            // Delete the employee's personal information
            $data->delete();
            return redirect('/employees');
        } else {
            return redirect()->back()->with('message', 'Data delete failed');

        }
    }

    public function EditEmployee($id)
    {
        // $employee = DB::table('employee')->where('id', $id)->first();
        // __Using ORM __
        // $employee = Employee::find($id);
        $employeeArray = DB::table('employee_personal_information')
            ->join('employee_educational_qualifications', 'employee_personal_information.id', '=', 'employee_educational_qualifications.emp_id')
            ->join('employee_professional_information', 'employee_personal_information.id', '=', 'employee_professional_information.employees_id')
            ->where('employee_personal_information.id', '=', $id)
            ->get();
        $employee = $employeeArray[0];
        // dd($employee[0]);
        return view('edit', compact('employee'));

    }

    public function UpdateData($id, Request $req)
    {

        DB::beginTransaction();
        try {

            $personal_info_data = $req->validate([
                'name' => 'required|string',
                'age' => 'required|numeric',
                'mobile' => 'required|string',
                'nid' => 'required|string',
                'address' => 'required|string',
                'gender' => 'required|string',

            ]);

            $personalInfoUpdate = EmployeePersonalInformation::where('id', $id)->update($personal_info_data);
            // dd($personalInfoUpdate);
            if ($personalInfoUpdate) {

                $edu_info_data = $req->validate([

                    'ssc_gpa' => 'required|decimal:0,2',
                    'ssc_year' => 'required|numeric',
                    'hsc_gpa' => 'required|decimal:0,2',
                    'hsc_year' => 'required|numeric',
                    'bsc_cgpa' => 'required|decimal:0,2',
                    'bsc_year' => 'required|numeric',
                    'msc_cgpa' => 'nullable|decimal:0,2',
                    'msc_year' => 'nullable|numeric',

                ]);

                // Update into EmployeeEducationalQualification

                $eduInfoUpdate = EmployeeEducationalQualification::where('emp_id', $id)->update($edu_info_data);
                // $eduInfoUpdate = $data->educationalQualifications()
                //     ->where('emp_id', $id)
                //     ->update($edu_info_data);

                // dd($eduInfoUpdate);
                // return $eduInfo;
            }
            // dd($eduInfoUpdate);
            if ($personalInfoUpdate && $eduInfoUpdate) {
                $professional_info_data = $req->validate([

                    'previous_company_name' => 'required|string',
                    'designation' => 'required|string',
                    'experience' => 'required|decimal:0,2',
                    'current_salary' => 'required|decimal:0,2',
                ]);
                // Update into EmployeeProfessionalInformation

                $eduInfoUpdate = EmployeeProfessionalInformation::where('employees_id', $id)->update($professional_info_data);
                // $eduInfoUpdate = $data->professionalInformation()
                //     ->where('employees_id', $id)
                //     ->update($professional_info_data);
            }

            DB::commit(); // // If all inserts succeed, commit the transaction
            return redirect('/employees')->with('success', 'Data inserted successfully.');
        } catch (\Exception $e) {
            DB::rollback(); // If any insert fails, rollback the transaction
            dd($e->getMessage(), $e->getFile(), $e->getLine());
            return redirect()->back()->with('error', 'Data insert failed. Please try again.');
        }

    }
}
