<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use Session;


class employeeController extends Controller
{
    public function index(Request $request)
    {
        
        Session::put('page', 'Employees');
        $emp = Employee::all();

        $id=0;
        $update = Company::where('id', $id)->first() ?? null;
        $message = $request->input('message') ?? null;
        return view('admin.employees', compact('emp','message','update'));
    }

    public function index2(Request $request,$id)
    {
        
        Session::put('page', 'Employees');
        $emp = Employee::all();
        $comp = Company::all();

        $update = Employee::where('id', $id)->first() ?? null;
        $message = $request->input('message') ?? null;
        return view('admin.employees', compact('emp','message','update','comp'));
    }


    public function destroy(request $request,$id)
    {
        
        

        $Emp = Employee::find($id);
        if ($Emp) {
            $Emp->delete();
            // Delete successful
        } else {
            // Company with id 1 not found
        }

        // Optionally, you can redirect back or return a response
        return redirect()->back()->with('success', 'Company deleted successfully.');
    }

    public function update(request $request, $id)
    {




        $emp = Employee::where('id', $id)->first();

        

        // if (isset($request->logo)) {
        //     $imagename = time() . '.' . $request->logo->extension();
        //     $request->logo->move(public_path('comapny images'), $imagename);
        //     $companyUp->logo = $imagename;

        // }


        $emp->first_name = $request->first_name;
        $emp->last_name = $request->last_name;
        $emp->company_id = $request->company_id;
        $emp->email = $request->email;
        $emp->phone = $request->phone;

        $emp->save();

        return redirect()->back()->with('success', 'Updated  successfully.');

        

    }
}
