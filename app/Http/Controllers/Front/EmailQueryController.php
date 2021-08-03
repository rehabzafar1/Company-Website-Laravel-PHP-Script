<?php

namespace App\Http\Controllers\Front;

use App\Models\EmailQuery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('front.contact');

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
            'name'          =>              'required',
            'email'         =>              'required',
            'subject'       =>              'required',
            'message'       =>              'required',

        ]);
        $query               =   [
          'name'             =>             $request->name,
          'email'            =>             $request->email,
          'subject'          =>             $request->subject,
          'message'          =>             $request->message,
        ];

        EmailQuery::create($query);
        return redirect(route('contact'))->
            with('success','Thanks we contact you Shortly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmailQuery  $emailQuery
     * @return \Illuminate\Http\Response
     */
    public function show(EmailQuery $emailQuery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmailQuery  $emailQuery
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailQuery $emailQuery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmailQuery  $emailQuery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmailQuery $emailQuery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmailQuery  $emailQuery
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailQuery $emailQuery)
    {
        //
    }
}
