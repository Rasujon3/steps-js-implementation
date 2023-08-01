<?php

namespace App\Http\Controllers;

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
            'experience' => 'required|decimal:0,2',
            'current_salary' => 'required|decimal:0,2',
        ]);
        // Custom validation
        $designation = $req->get('designation');
        $name = $req->get('name');
        $previous_company_name = $req->get('previous_company_name');

        if (intval($designation) || intval($name) || intval($previous_company_name)) {
            return redirect()->back()->with('error', 'Integer number is not allowed for name, designation & previous company name.');
        }

        $insert = DB::table('employee')->insert($data);
        if ($insert) {
            return redirect('/employees');
        } else {
            return 'Data insert failed';

        }
    }
    public function ShowEmployee(Request $request)
    {
        $data = DB::table('employee')->select()->get();
        // dd($data);

        if ($request->ajax()) {
            // dd($request->ajax());
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="' . route('employee.edit', ($row->id)) . ' " class="edit btn btn-success btn-sm">Edit</a>
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
        if ($delete) {
            return redirect('/employees');
        } else {
            return 'Data delete failed';

        }
    }

    public function EditEmployee($id)
    {
        $employee = DB::table('employee')->where('id', $id)->first();
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
            'experience' => 'required|decimal:0,2',
            'current_salary' => 'required|decimal:0,2',
        ]);
        // Custom validation
        $designation = $req->get('designation');
        $name = $req->get('name');
        $previous_company_name = $req->get('previous_company_name');

        if (intval($designation) || intval($name) || intval($previous_company_name)) {
            return redirect()->back()->with('error', 'Integer number is not allowed for name, designation & previous company name.');
        }

        $update = DB::table('employee')->where('id', $id)->update($data);
        if ($update) {
            return redirect('/employees');
        } else {
            return "Update Failed";
        }

    }
}
