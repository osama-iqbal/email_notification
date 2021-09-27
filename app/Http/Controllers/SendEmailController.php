<?php

namespace App\Http\Controllers;

use App\Models\send_email;
use Illuminate\Http\Request;
use App\Mail\email_sender;
use Mail;
use DB;
use Session;
class SendEmailController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email = DB:: table('send_emails')->insert([
            'email_address' => $request->email,
            'message' => $request->message,
        ]);
        if ($email){
            $detail = [
                'Email'=>$request->email,
                'Message'=>$request->message,
            ];
            Mail::to($request->email)->send(new email_sender($detail));
            Session:: flash('msg',"Email sent successfully");
            return redirect('/');
        }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\send_email  $send_email
     * @return \Illuminate\Http\Response
     */
    public function show(send_email $send_email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\send_email  $send_email
     * @return \Illuminate\Http\Response
     */
    public function edit(send_email $send_email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\send_email  $send_email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, send_email $send_email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\send_email  $send_email
     * @return \Illuminate\Http\Response
     */
    public function destroy(send_email $send_email)
    {
        //
    }
}
