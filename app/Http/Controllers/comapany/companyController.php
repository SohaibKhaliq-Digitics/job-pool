<?php

namespace App\Http\Controllers\comapany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event_manager;
use Session;

class companyController extends Controller
{
    public function index()
    {
        Session::put('page','all_managers');
        $managers=Event_manager::all();
        return view ('s_admin.all_managers',compact('managers'));
    }
}
