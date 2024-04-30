<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\admin;
use App\Models\Company;
use App\Models\Job;
use App\Models\Employee;
use Illuminate\Http\UploadedFile;

class jobsController extends Controller
{
    public function index(request $request)
    {
        Session::put('page', 'Create-jobs');

        $com = Company::all();
        $message = $request->input('message') ?? null;
        return view('admin.createJobs',compact('com','message'));
    }


    public function index2(Request $request,$id)
    {
        
        Session::put('page', 'ALL-jobs');
        $jobs = job::all();
        $message = $request->input('message') ?? null;
        $com = Company::all();
        $update = job::where('id', $id)->first() ?? null;
        $message = $request->input('message') ?? null;
        return view('admin.allJobs', compact('jobs','message','update','com'));
    }


    public function allJobs(request $request)
    {
        Session::put('page', 'ALL-jobs');
        $jobs = job::all();
        $com = Company::all();
        $message = $request->input('message') ?? null;
        return view('admin.allJobs', compact('jobs','message','com'));
    }

    public function destroy(request $request,$id)
    {
        // Perform the deletion


        // dd($id);
        

        $job = job::find($id);
        if ($job) {
            $job->delete();
            // Delete successful
        } else {
            // Company with id 1 not found
        }

        // Optionally, you can redirect back or return a response
        return redirect()->back()->with('success', 'Company deleted successfully.');
    }



    public function update(request $request, $id)
    {




        $job = job::where('id', $id)->first();

        $request->validate([
            'name' => 'required',
            'description' => 'required|min:10',
            'type' => 'required',
            'company_id' => 'required|exists:companies,id',
        ]);


        $job->name = $request->name;
    $job->description = $request->description;
    $job->type = $request->type;
    $job->company_id = $request->company_id;
    $job->category = $request->category;

    if ($request->hasFile('logo')) {

        
        $logo = $request->file('logo');
        $logo_name = time().'.'.$logo->getClientOriginalExtension();
        $logo->move(public_path('jobs banners'), $logo_name);
        $job->logo = $logo_name;
    }


    $job->save();

    return redirect()->route('alljobs.index')->with('success', 'Job Updated successfully.');
        

    }



    public function storeJobs(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required|min:10',
        'type' => 'required',
        'company_id' => 'required|exists:companies,id',
    ]);

    $job = new Job;
    $job->name = $request->name;
    $job->description = $request->description;
    $job->type = $request->type;
    $job->company_id = $request->company_id;
    $job->category = $request->category;
    if ($request->hasFile('logo')) {

       
        $logo = $request->file('logo');
        $logo_name = time().'.'.$logo->getClientOriginalExtension();
        $logo->move(public_path('jobs banners'), $logo_name);
        $job->logo = $logo_name;
    }

    $job->save();

    return redirect()->route('alljobs.index')->with('success', 'Job created successfully.');
}
}
