<?php

namespace App\Http\Controllers\Admin;

use App\Models\CareerCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareerCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['categories'] = CareerCategory::latest()->paginate(10);
        return view('admin.career-categories.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.career-categories.create');
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
            'name'          =>      'required',
            'icon'          =>      'required',
        ]);

        $career             =   [
            'name'          =>      $request->name,
        ];

        if ($request->hasFile("icon") && $request->file('icon')->isValid()) {
            $imgFilename           = $request->file('icon')->getClientOriginalName();
            $imgFilename           = time()."-".$imgFilename;
            $imgDestinationPath    = storage_path('app/public/images/icons/career');
            $career['icon']        = $imgFilename;
            $request->file('icon')->move($imgDestinationPath, $imgFilename);
        }
        CareerCategory::create($career);
        return redirect(route('admin.career-category.index'))->
            with('success','Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CareerCategory  $careerCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CareerCategory $careerCategory)
    {
        //
        $data['category'] = $careerCategory;
        return view('admin.career-category.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CareerCategory  $careerCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(CareerCategory $careerCategory)
    {
        //
        $data['category'] =     $careerCategory;
        return view('admin.career-categories.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CareerCategory  $careerCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CareerCategory $careerCategory)
    {
        //
        $request->validate([
            'name'                  =>          'required',
            'icon'                  =>          'required',
        ]);

         $careerCategory->name     =      $request->name;
        if ($request->hasFile("icon") && $request->file('icon')->isValid()) {
            $imgFilename           = $request->file('icon')->getClientOriginalName();
            $imgFilename           = time()."-".$imgFilename;
            $imgDestinationPath    = storage_path('app/public/images/icons/career');
            $careerCategory['icon']        = $imgFilename;
            $request->file('icon')->move($imgDestinationPath, $imgFilename);
        }
         $careerCategory->update();
         return redirect(route('admin.career-category.index'))->
         with('success','Career Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CareerCategory  $careerCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CareerCategory $careerCategory)
    {
        $careerCategory->delete();
        return redirect(route('admin.career-category.index'))->
        with('error','Category Deleted Successfully');
    }
}
