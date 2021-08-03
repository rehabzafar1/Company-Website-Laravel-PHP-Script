<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Mail;
use App\Models\EmailQuery;
use App\Models\EmailReply;
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
        $data['emails']     =       EmailQuery::latest()->paginate(5);
        return view('admin.email-queries.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmailQuery  $emailQuery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EmailQuery::find($id)->delete();
        return redirect(route('admin.emails'))->
        with('success','Email Deleted Successfully');

    }

    public function queryReply(Request $request,$id){
        $request->validate([
           'subject'             =>      'required',
           'message'             =>      'required',
        ]);

        $reply                   =       [
            'subject'            =>     $request->subject,
            'message'            =>     $request->message,
            'email_query_id'     =>     $id,
        ];

        EmailReply::create($reply);

        $data = EmailQuery::find($id);

        $data->message = $request->message;
        $data->subject = $request->subject;

        Mail::send('admin.email-queries.email-reply',['request' => $data], function ($reply) use ($data){
            $reply->from('Info@SunzTech', "SunzTech");
            $reply->subject($data->subject);
            $reply->to($data->email);
        });
        return redirect(route('admin.emails'))->
            with('success','Reply sent successfully');
    }
}
