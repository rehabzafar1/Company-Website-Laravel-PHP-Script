<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $employees = Employee::latest()->paginate(5);
        return view('admin.employee.index',compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.employee.create');
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
            'name'          => 'required',
            'designation'   => 'required',
            'description'   => 'required',
            'email'         => 'required',
            'phone'         => 'required',
            'facebook'      => 'required',
            'linkedin'      => 'required',
            'image'         => 'required',
        ]);

        $employee = [
             'name'         =>      $request->name,
             'designation'  =>      $request->designation,
             'description'  =>      $request->description,
             'email'        =>      $request->email,
             'phone'        =>      $request->phone,
             'facebook'     =>      $request->facebook,
             'linkedin'     =>      $request->linkedin,
        ];
        if ($request->hasFile("image") && $request->file('image')->isValid()) {
            $imgFilename           = $request->file('image')->getClientOriginalName();
            $imgFilename           = time()."-".$imgFilename;
            $imgDestinationPath    = storage_path('app/public/images');
            $employee['image']      = $imgFilename;
            $request->file('image')->move($imgDestinationPath, $imgFilename);
        }
        Employee::create($employee);
        return redirect()->route('admin.employee.index')
            ->with('success','Employee added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
        return view('admin.employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
        $data['employee']   =   $employee;
        return view('admin.employee.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
       $request->validate([
           'name'          => 'required',
           'designation'   => 'required',
           'description'   => 'required',
           'email'         => 'required',
           'phone'         => 'required',
           'facebook'      => 'required',
           'linkedin'      => 'required',

       ]);
        $employee->name                     =                  $request->name;
        $employee->designation              =                  $request->designation;
        $employee->description              =                  $request->description;
        $employee->email                    =                  $request->email;
        $employee->phone                    =                  $request->phone;
        $employee->facebook                 =                  $request->facebook;
        $employee->linkedin                 =                  $request->linkedin;

        if ($request->hasFile("image") && $request->file('image')->isValid()) {
            $imgFilename           = $request->file('image')->getClientOriginalName();
            $imgFilename           = time()."-".$imgFilename;
            $imgDestinationPath    = storage_path('app/public/images');
            $employee->image      = $imgFilename;
            $request->file('image')->move($imgDestinationPath, $imgFilename);
        }

        $employee->update();
        return redirect()->route('admin.employee.index')->
            with('success','Employee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
        return redirect()->route('admin.employee.index')->
            with('success','Employee Deleted Successfully');
    }
}
