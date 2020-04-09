<?php

namespace App\Http\Controllers;

use App\Registermail;
use App\User;
use Illuminate\Http\Request;

class RegistermailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny',User::class);
        $mail=Registermail::find(1);
        return view('admin.mail.index',compact('mail'));
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
     * @param  \App\Registermail  $registermail
     * @return \Illuminate\Http\Response
     */
    public function show(Registermail $registermail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registermail  $registermail
     * @return \Illuminate\Http\Response
     */
    public function edit(Registermail $mail)
    {
        $this->authorize('update',$mail,Registermail::class);
        return view('admin.mail.edit',compact('mail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registermail  $registermail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registermail $mail)
    {
        $this->authorize('update',$mail,Registermail::class);
        $mail->contenu=$request->contenu;
        $mail->name=$request->has('name');
        $mail->email=$request->has('email');
        $mail->password=$request->has('password');
        $mail->save();
        return redirect()->route('mail');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registermail  $registermail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registermail $registermail)
    {
        //
    }
}
