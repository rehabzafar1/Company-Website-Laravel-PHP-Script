<?php

namespace App\Http\Controllers\Admin;

use App\Models\PackageOption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $packageoptions = PackageOption::latest()->paginate(5);
        return view('admin.package-options.index',compact('packageoptions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package-options.create');
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
        'name'      =>          'required',
        ]);

        foreach ($request->name as $name){
            $packageoption = [
                'name'    =>      $name,
            ];
            PackageOption::create($packageoption);

        }
        return redirect()->route('admin.package-option.index')
            ->with('success','Package item added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PackageOption  $packageOption
     * @return \Illuminate\Http\Response
     */
    public function show(PackageOption $packageOption)
    {
        $data['options'] = $packageOption;
        return view('admin.package-options.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PackageOption  $packageOption
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageOption $packageOption)
    {
        //
        $data['options'] = $packageOption;
        return view('admin.package-options.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PackageOption  $packageOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackageOption $packageOption)
    {
        //
        $request->validate([
           'name'       =>      'required',
        ]);
        $packageOption->name        =           $request->name;
        $packageOption->update();
        return redirect()->route('admin.package-option.index')->
        with('success','Package list Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PackageOption  $packageOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageOption $packageOption)
    {
        //
        $packageOption->delete();
        return redirect()->route('admin.package-option.index')->
        with('success','Package list Deleted Successfully');
    }
}
