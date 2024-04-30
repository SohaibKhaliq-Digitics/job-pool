<?php

namespace App\Http\Controllers\candidates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use App\Models\candidate;
use Session;


class canditatesController extends Controller
{
    public function allCandidate(request $request)
    {
        Session::put('page', 'Candidates');

        $message = $request->input('message') ?? null;
        $candidates = candidate::where('status', 'pending')->get();
        return view('admin.allcandidates', compact('candidates','message'));

    }
    public function aprovedCandidate(request $request)
    {
        Session::put('page', 'Approved-Candidates');

        $message = $request->input('message') ?? null;
        $candidates = candidate::where('status', 'approved')->get();
        return view('admin.aprovedcandidates', compact('candidates','message'));

    }
    public function rejectedCandidate(request $request)
    {
        Session::put('page', 'Rejected-Candidates');

        $message = $request->input('message') ?? null;
        $candidates = candidate::where('status', 'rejected')->get();
        return view('admin.rejectedcandidates', compact('candidates','message'));

    }


    public function approve($id)
{
    $candidate = Candidate::find($id);
    $candidate->status = 'approved';
    $candidate->save();

    return redirect()->back();
}

public function reject($id)
{
    $candidate = Candidate::find($id);
    $candidate->status = 'rejected';
    $candidate->save();

    return redirect()->back();
}

}
