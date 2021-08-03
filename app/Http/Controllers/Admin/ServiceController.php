<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['services']   =  Service::latest()->paginate(5);
        return view('admin.services.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.services.create');
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
            'name'              =>          'required',
            'description'       =>          'required',
            'icon'              =>          'required',
            'image'             =>          'required',
        ]);
        $service = [
            'name'              =>          $request->name,
            'description'       =>          $request->description,
        ] ;
        if ($request->hasFile("icon") && $request->file('icon')->isValid()) {
            $imgFilename           = $request->file('icon')->getClientOriginalName();
            $imgFilename           = time()."-".$imgFilename;
            $imgDestinationPath    = storage_path('app/public/images/services');
            $service['icon']      = $imgFilename;
            $request->file('icon')->move($imgDestinationPath, $imgFilename);
        }
        if ($request->hasFile("image") && $request->file('image')->isValid()) {
            $imgFilename           = $request->file('image')->getClientOriginalName();
            $imgFilename           = time()."-".$imgFilename;
            $imgDestinationPath    = storage_path('app/public/images/services');
            $service['image']      = $imgFilename;
            $request->file('image')->move($imgDestinationPath, $imgFilename);
        }
        Service::create($service);
        return redirect(route('admin.service.index'))->
        with('success','Service Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
        $data['service'] =$service;
        return view('admin.services.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
        $data['service'] = $service;
        return view('admin.services.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
        $request->validate([
            'name'              =>          'required',
            'description'       =>          'required',
        ]);
        $service->name              =       $request->name;
        $service->description       =       $request->description;

        if ($request->hasFile("icon") && $request->file('icon')->isValid()) {
            $imgFilename           = $request->file('icon')->getClientOriginalName();
            $imgFilename           = time()."-".$imgFilename;
            $imgDestinationPath    = storage_path('app/public/images/services');
            $service->icon      = $imgFilename;
            $request->file('icon')->move($imgDestinationPath, $imgFilename);
        }
        if ($request->hasFile("image") && $request->file('image')->isValid()) {
            $imgFilename           = $request->file('image')->getClientOriginalName();
            $imgFilename           = time()."-".$imgFilename;
            $imgDestinationPath    = storage_path('app/public/images/services');
            $service['image']      = $imgFilename;
            $request->file('image')->move($imgDestinationPath, $imgFilename);
        }
        $service->update();
        return redirect(route('admin.service.index'))->
        with('success','Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
        $service->delete();
        return redirect(route('admin.service.index'))->
        with('success','service Deleted Successfully');
    }
}
