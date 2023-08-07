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
        $personal_info_data = $req->validate([
            'name' => 'required|string',
            'age' => 'required|numeric',
            'mobile' => 'required|string',
            'nid' => 'required|string',
            'address' => 'required|string',
            'gender' => 'required|string',

        ]);
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
        $professional_info_data = $req->validate([

            'previous_company_name' => 'required|string',
            'designation' => 'required|string',
            'experience' => 'required|decimal:0,2',
            'current_salary' => 'required|decimal:0,2',
        ]);
        DB::beginTransaction();
        try {
            // Custom validation
            // $designation = $req->get('designation');
            // $name = $req->get('name');
            // $previous_company_name = $req->get('previous_company_name');

            // if (intval($designation) || intval($name) || intval($previous_company_name)) {
            //     return redirect()->back()->with('error', 'Integer number is not allowed for name, designation & previous company name.');
            // }

            // Insert into EmployeePersonalInformation
            $personalInfo = EmployeePersonalInformation::create($personal_info_data);
            // dd($personalInfo);
            if ($personalInfo) {

                // Insert into EmployeeEducationalQualification

                $eduInfo = EmployeeEducationalQualification::create($edu_info_data + ['emp_id' => $personalInfo->id]);
                // dd($eduInfo);
                // return $eduInfo;
            }

            // dd($eduInfo);
            if ($personalInfo && $eduInfo) {

                // Insert into EmployeeProfessionalInformation
                $professionalInfo = EmployeeProfessionalInformation::create($professional_info_data + ['employees_id' => $personalInfo->id]);
            }

            DB::commit(); // // If all inserts succeed, commit the transaction
            return redirect('/employees')->with('success', 'Data inserted successfully.');
        } catch (\Exception $e) {
            DB::rollback(); // If any insert fails, rollback the transaction
            // dd($e->getMessage(), $e->getFile(), $e->getLine());
            return redirect()->back()->with('error', 'Data insert failed. Please try again.')->withInput();
            // return redirect()->back()->with($errors)->withInput();
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
        // $data = DB::table('employee_personal_information')
        //     ->join('employee_educational_qualifications', 'employee_personal_information.id', '=', 'employee_educational_qualifications.emp_id')
        //     ->join('employee_professional_information', 'employee_personal_information.id', '=', 'employee_professional_information.employees_id')
        //     ->get();
        // dd($data);
        /* ********************************************************** */

        // __ Using Eloquent ORM __

        // $data = EmployeePersonalInformation::with('educationalQualifications')->with("professionalInformation")->get()->toArray();
        // dd($data[0]->id);

        // $data = EmployeePersonalInformation::with('educationalQualifications', 'professionalInformation')->get();
        // $firstRecordId = $data[0]->id;

        // dd($data);

        // $data = EmployeePersonalInformation::with('educationalQualifications', 'professionalInformation')->get()->toArray();
        // dd($data);

        $data = EmployeePersonalInformation::with('educationalQualifications', 'professionalInformation')
            ->get();

        $formattedData = collect($data)->map(function ($item) {
            // Extract educationalQualifications values
            $educationalQualificationsData = [];
            foreach ($item->educationalQualifications as $qualification) {
                // dd($item->educationalQualifications);
                // dd($qualification);
                $educationalQualificationsData['ssc_gpa'] = $item->educationalQualifications->ssc_gpa;
                $educationalQualificationsData['ssc_year'] = $item->educationalQualifications->ssc_year;
                $educationalQualificationsData['hsc_gpa'] = $item->educationalQualifications->hsc_gpa;
                $educationalQualificationsData['hsc_year'] = $item->educationalQualifications->hsc_year;
                $educationalQualificationsData['bsc_cgpa'] = $item->educationalQualifications->bsc_cgpa;
                $educationalQualificationsData['bsc_year'] = $item->educationalQualifications->bsc_year;
                $educationalQualificationsData['msc_cgpa'] = $item->educationalQualifications->msc_cgpa;
                $educationalQualificationsData['msc_year'] = $item->educationalQualifications->msc_year;
                // dd($educationalQualificationsData);
            }

            // Extract professionalInformation values
            $professionalInformationData = [];
            foreach ($item->professionalInformation as $information) {
                // dd($item->professionalInformation);
                $professionalInformationData['previous_company_name'] = $item->professionalInformation->previous_company_name;
                $professionalInformationData['designation'] = $item->professionalInformation->designation;
                $professionalInformationData['experience'] = $item->professionalInformation->experience;
                $professionalInformationData['current_salary'] = $item->professionalInformation->current_salary;
                // dd($professionalInformationData);
            }
            return (object) [
                'id' => $item->id,
                'name' => $item->name,
                'age' => $item->age,
                'mobile' => $item->mobile,
                'nid' => $item->nid,
                'address' => $item->address,
                'gender' => $item->gender,
                'ssc_gpa' => $educationalQualificationsData['ssc_gpa'],
                'ssc_year' => $educationalQualificationsData['ssc_year'],
                'hsc_gpa' => $educationalQualificationsData['hsc_gpa'],
                'hsc_year' => $educationalQualificationsData['hsc_year'],
                'bsc_cgpa' => $educationalQualificationsData['bsc_cgpa'],
                'bsc_year' => $educationalQualificationsData['bsc_year'],
                'msc_cgpa' => $educationalQualificationsData['msc_cgpa'],
                'msc_year' => $educationalQualificationsData['msc_year'],
                'previous_company_name' => $professionalInformationData['previous_company_name'],
                'designation' => $professionalInformationData['designation'],
                'experience' => $professionalInformationData['experience'],
                'current_salary' => $professionalInformationData['current_salary'],
                // Add other properties as needed
            ];
        });
        // dd($formattedData);
        if ($request->ajax()) {
            return Datatables::of($formattedData)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    // dd($row);
                    $actionBtn = '<a href="' . route('employee.edit', $row->id) . '" class="edit btn btn-success btn-sm">Edit</a> </br>
                    <form action="' . route('employee.delete', $row->id) . '" method="POST">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
                    </form>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('employees');
    }
    public function DeleteEmployee($id)
    {

        // __Using ORM __
        $data = EmployeePersonalInformation::find($id);

        if ($data) {

            $data->educationalQualifications()
                ->where('emp_id', $id)
                ->delete();

            $data->professionalInformation()
                ->where('employees_id', $id)
                ->delete();

            // Delete the employee's personal information
            $data->delete();
            return redirect('/employees')->with('success', 'Data deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Data delete failed');

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
        $personal_info_data = $req->validate([
            'name' => 'required|string',
            'age' => 'required|numeric',
            'mobile' => 'required|string',
            'nid' => 'required|string',
            'address' => 'required|string',
            'gender' => 'required|string',

        ]);

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

        $professional_info_data = $req->validate([

            'previous_company_name' => 'required|string',
            'designation' => 'required|string',
            'experience' => 'required|decimal:0,2',
            'current_salary' => 'required|decimal:0,2',
        ]);

        DB::beginTransaction();
        try {

            $personalInfoUpdate = EmployeePersonalInformation::where('id', $id)->update($personal_info_data);
            // dd($personalInfoUpdate);
            if ($personalInfoUpdate) {

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

                // Update into EmployeeProfessionalInformation

                $eduInfoUpdate = EmployeeProfessionalInformation::where('employees_id', $id)->update($professional_info_data);
                // $eduInfoUpdate = $data->professionalInformation()
                //     ->where('employees_id', $id)
                //     ->update($professional_info_data);
            }

            DB::commit(); // // If all inserts succeed, commit the transaction
            return redirect('/employees')->with('success', 'Data updated successfully.');
        } catch (\Exception $e) {
            DB::rollback(); // If any insert fails, rollback the transaction
            // dd($e->getMessage(), $e->getFile(), $e->getLine());
            return redirect()->back()->with('error', 'Data update failed. Please try again.');
        }

    }
}
