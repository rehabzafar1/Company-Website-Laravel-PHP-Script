<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use App\Models\PackageOption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $packages = Package::latest()->paginate(5);
        return view('admin.packages.index',compact('packages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['options'] = PackageOption::all();
        return view('admin.packages.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required',
            'icon'              => 'required',
            'price'             => 'required',
        ]);

        $package = [
            'name'         =>       $request->name,
            'price'        =>       $request->price,

        ];
        if ($request->hasFile("icon") && $request->file('icon')->isValid()) {
            $imgFilename           = $request->file('icon')->getClientOriginalName();
            $imgFilename           = time()."-".$imgFilename;
            $imgDestinationPath    = storage_path('app/public/images/icons');
            $package['icon']      = $imgFilename;
            $request->file('icon')->move($imgDestinationPath, $imgFilename);
        }
        $package = Package::create($package);

        $package->options()->attach($request->optionsCheckboxes);

        return redirect()->route('admin.package.index')
            ->with('success','Package added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
        return view('admin.packages.show',compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
        $data['options']             =       PackageOption::all();
        $data['package']            =       $package;

        $packageOptions   = [];
        $data['packageOptions']  = $packageOptions = [];
        if(!is_null($package->options)){
            foreach ($package->options as $option){
                $packageOptions[] = $option->name;
            }
            $data['packageOptions']    = $packageOptions;
        }

        return view('admin.packages.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name'          => 'required',
            'price'         => 'required'
        ]);
        $package->name      = $request->name;
        $package->price     = $request->price;

        if ($request->hasFile("icon") && $request->file('icon')->isValid()) {
            $imgFilename           = $request->file('icon')->getClientOriginalName();
            $imgFilename           = time()."-".$imgFilename;
            $imgDestinationPath    = storage_path('app/public/images/icons');
            $package->icon      = $imgFilename;
            $request->file('icon')->move($imgDestinationPath, $imgFilename);
        }
        $package->update();


        $package->options()->sync($request->optionsCheckboxes);

        return redirect()->route('admin.package.index')->
        with('success','Package Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
        $package->delete();
        return redirect()->route('admin.package.index')->
        with('success','Package Deleted Successfully');
    }
}
