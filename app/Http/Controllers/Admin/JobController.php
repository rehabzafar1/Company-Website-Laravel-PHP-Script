<?php

namespace App\Http\Controllers\Admin;

use App\Models\CareerCategory;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{

    public function index()
    {
        $data['jobs'] = Job::latest()->paginate(5);
        return view('admin.jobs.index',$data);
    }

    public function create()
    {
        //
        $data['categories'] = CareerCategory::all();
        return view('admin.jobs.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'              =>      'required',
            'description'       =>      'required',
            'experience'        =>      'required',
            'type'              =>      'required',
            'expiry'            =>      'required',
            'location'          =>      'required',
            'category'          =>      'required',

        ]);
        $job    = [

            'name'                  =>          $request->name,
            'description'           =>          $request->description,
            'experience'            =>          $request->experience,
            'type'                  =>          $request->type,
            'expiry'                =>          $request->expiry." 00:00:00",
            'location'              =>          $request->location,
            'career_category_id'    =>          $request->category,
        ];

        $job = Job::create($job);
        return redirect(route('admin.jobs.index'))->
        with('success','Job Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(job $job)
    {
        //
        $data['job']   =   $job;
        return view('admin.jobs.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(job $job)
    {
        //
        $d['categories'] = CareerCategory::all();
        $data['job'] = $job;
        return view('admin.jobs.edit',$data,$d);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, job $job)
    {
        //
        $request->validate([
            'name'              =>      'required',
            'description'       =>      'required',
            'experience'        =>      'required',
            'type'              =>      'required',
            'expiry'            =>      'required',
            'location'          =>      'required',
            'category'          =>      'required',

        ]);
        $job->name                  =        $request->name;
        $job->description           =        $request->description;
        $job->experience            =        $request->experience;
        $job->type                  =        $request->type;
        $job->expiry                =        $request->expiry;
        $job->location              =        $request->location;
        $job->career_category_id    =        $request->category;

        $job->update();
        return redirect(route('admin.jobs.index'))->
            with('success','Job updated successfully');
    }

    public function destroy(job $job)
    {
        $job->delete();
       return redirect()->route('admin.jobs.index')->
           with('success','Job deleted successfully');
    }
}
