<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Libraries\Encryption;
use Yajra\DataTables\DataTables;

class EmployeeController extends Controller
{
    public function ShowForms() {
        return view('welcome');
    }
    public function InsertData(Request $req) {
        $insert = DB::table('employee')->insert([
            'name'=>$req->name,
            'age'=>$req->age,
            'mobile'=>$req->mobile,
            'nid'=>$req->nid,
            'address'=>$req->address,
            'gender'=>$req->gender,
            'ssc_gpa'=>$req->ssc_gpa,
            'ssc_year'=>$req->ssc_year,
            'hsc_gpa'=>$req->hsc_gpa,
            'hsc_year'=>$req->hsc_year,
            'bsc_cgpa'=>$req->bsc_cgpa,
            'bsc_year'=>$req->bsc_year,
            'msc_cgpa'=>$req->msc_cgpa,
            'msc_year'=>$req->msc_year,
            'previous_company_name'=>$req->previous_company_name,
            'designation'=>$req->designation,
            'experience'=>$req->experience,
            'current_salary'=>$req->current_salary,
        ]);
        if ($insert) {
            return redirect('/');
        } else {
            return 'Data insert failed';

        }
    }
    public function ShowEmployee(Request $request) {
        $data = DB::table('employee')->select()->get();
        // dd($data);

        if ($request->ajax()) {
            // dd($request->ajax());
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>
                                  <a href="' . route('emp.delete', ($row->id)) . ' "  class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('employees');
    }
    public function DeleteEmployee($id) {
        $delete = DB::table('employee')->where('id',$id)->delete();
        if ($delete) {
            return redirect('/employees');
        } else {
            return 'Data delete failed';

        }
    }
}
