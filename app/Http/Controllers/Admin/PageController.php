<?php

namespace App\Http\Controllers\Admin;

use App\Models\EmailQuery;
use App\Models\Employee;
use App\Models\Job;
use App\Models\SubService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function dashboard(){
        $data['employees'] = Employee::with('id')->count();
        $data['emails']    = EmailQuery::with('id')->count();
        $data['jobs']      = Job::with('id')->count();
        $data['services']  = SubService::with('id')->count();
        return view('vendor.multiauth.admin.home',$data);
    }
}
