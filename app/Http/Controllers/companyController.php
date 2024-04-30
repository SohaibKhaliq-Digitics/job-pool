<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Session;


class companyController extends Controller
{
    public function index(Request $request)
    {
        
        Session::put('page', 'Company');
        $companies = Company::all();

        $id=0;
        $update = Company::where('id', $id)->first() ?? null;
        $message = $request->input('message') ?? null;
        return view('admin.companies', compact('companies','message','update'));
    }
    public function index2(Request $request,$id)
    {
        Session::put('page', 'Company');
        $companies = Company::all();

        $update = Company::where('id', $id)->first() ?? null;
        $message = $request->input('message') ?? null;
        return view('admin.companies', compact('companies','message','update'));
    }
    public function ViewCompany(Request $request,$id)
    {
        
        $company = Company::where('id', $id)->first();
        // $message = $request->input('message') ?? null;
        return view('companyView', compact('company'));
    }

    public function destroy(request $request,$id)
    {
        // Perform the deletion


        // dd($id);
        

        $company = Company::find($id);
        if ($company) {
            $company->delete();
            // Delete successful
        } else {
            // Company with id 1 not found
        }

        // Optionally, you can redirect back or return a response
        return redirect()->back()->with('success', 'Company deleted successfully.');
    }

    public function update(request $request, $id)
    {

        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'logo' => 'required',
            'website' => 'required',
        ]);


        $companyUp = company::where('id', $id)->first();

        if (isset($request->logo)) {
            $imagename = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('comapny images'), $imagename);
            $companyUp->logo = $imagename;

        }


        $companyUp->name = $request->name;
        $companyUp->email = $request->email;
        $companyUp->website = $request->website;





        $companyUp->save();

        return redirect()->back()->with('success', 'Updated  successfully.');

        

    }
}
