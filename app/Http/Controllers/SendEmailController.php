<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
  function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'mobile' =>  'required',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'email'   =>   $request->email,
            'message'   =>   $request->message,
            'mobile'   =>   $request->mobile
        );

     Mail::to('info@eliano.it')->send(new SendMail($data));
     return back()->with('success', 'Grazie per averci inviato un messaggio!');
}
