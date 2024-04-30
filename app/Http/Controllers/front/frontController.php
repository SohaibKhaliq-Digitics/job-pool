<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Mail\CandidateCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin;
use App\Models\Company;
use App\Models\candidate;
use App\Models\Job;
use App\Models\Employee;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class frontController extends Controller
{
    public function index()
    {
        $eventDataPaginated = DB::table('jobs')->paginate(3);
        return view('front.index',compact('eventDataPaginated'));
    }
    public function jobView(request $request)
    {

        $id = $request->message;
        $job = Job::find($id);
        $Alljobs = Job::take(4)->get();
        return view('front.job-view',compact('job','Alljobs'));
    }

    public function applyJob(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:candidates',
        'phone' => 'required|unique:candidates',
        'img' => 'nullable|image',
        'cv' => 'nullable|file',
        'company_id' => 'nullable|exists:companies,id',
    ]);

    $candidate = new Candidate;
    $candidate->name = $request->name;
    $candidate->email = $request->email;
    $candidate->phone = $request->phone;
    $candidate->company_id = $request->company_id;
    $candidate->status = "Pending";

    

    if ($request->hasFile('img')) {
        $file = $request->file('img');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('candidate_images'), $filename);
        $candidate->img = $filename;
    }
    
    if ($request->hasFile('cv')) {
        $file = $request->file('cv');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('candidate_cv'), $filename);
        $candidate->cv = $filename;
    }

    

    Mail::to($candidate->email)->send(new CandidateCreated($candidate));

    $candidate->save();

    return redirect()->back()->with('success', 'Application Submited.');
}
    
}
