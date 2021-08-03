<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Models\SubService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubServiceController extends Controller
{

    public function index()
    {
        $data['subServices'] = SubService::latest()->paginate(5);
        return view('admin.sub-services.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['services']    =  Service::all();
        return view('admin.sub-services.create',$data);
    }

    public function store(Request $request)
    {
      $request->validate([
            'icon'                =>              'required',
            'name'                =>              'required',
            'description'         =>              'required',
            'service'             =>              'required',
      ]);

      $subService           =               [
         'name'             =>              $request->name,
         'description'      =>              $request->description,
         'service_id'       =>              $request->service,

      ] ;
        if ($request->hasFile("icon") && $request->file('icon')->isValid()) {
            $imgFilename           = $request->file('icon')->getClientOriginalName();
            $imgFilename           = time()."-".$imgFilename;
            $imgDestinationPath    = storage_path('app/public/images/services/sub-services');
            $subService['icon']      = $imgFilename;
            $request->file('icon')->move($imgDestinationPath, $imgFilename);
        }

      SubService::create($subService);
      return redirect(route('admin.sub-service.index'))->
          with('success','Sub Service added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function show(SubService $subService)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function edit(SubService $subService)
    {
        $data['services']        =       Service::all();
        $data['subService']     =       $subService;
        return view('admin.sub-services.edit',$data);
    }

    public function update(Request $request, SubService $subService)
    {
        $request->validate([
            'icon'                =>              'required',
            'name'                =>              'required',
            'description'         =>              'required',
            'service'             =>              'required',
        ]);


            $subService->name                   =            $request->name;
            $subService->description            =            $request->description;
            $subService->service_id                =            $request->service;


        if ($request->hasFile("icon") && $request->file('icon')->isValid()) {
            $imgFilename           = $request->file('icon')->getClientOriginalName();
            $imgFilename           = time()."-".$imgFilename;
            $imgDestinationPath    = storage_path('app/public/images/services/sub-services');
            $subService['icon']      = $imgFilename;
            $request->file('icon')->move($imgDestinationPath, $imgFilename);
        }
        $subService->update();
        return redirect(route('admin.sub-service.index'))->
            with('success','Sub Service Updated Successfully');
    }
    public function destroy(SubService $subService)
    {
        $subService->delete();
        return redirect(route('admin.sub-service.index'))->
            with('success','Sub Service Deleted Successfully');
    }
}
