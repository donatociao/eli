<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function saveContact(Request $request) {

      $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'phone' => 'required',
          'message' => 'required'
      ]);

      $contact = new Contact;

      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->subject = $request->subject;
      $contact->phone_number = $request->phone_number;
      $contact->message = $request->message;

      $contact->save();

      \Mail::send('email_template',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'phone' => $request->get('phone'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('ciao.donatociao@gmail.com');
               });

      return back()->with('success', 'Grazie per averci inviato la tua richiesta!');

  }
}
}
