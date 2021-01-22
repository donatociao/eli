<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Contact;
use Mail;

class ContactController extends Controller
{

  public function getContact() {

       return view('home');
     }


  public function saveContact(Request $request) {

      // $contact = $request->all();
      $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'phone' => 'required',
          'message' => 'required'
      ]);

      $contact = new Contact;

      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->phone = $request->phone;
      $contact->message = $request->message;

      $contact->save();

      $url = URL::previous();

      dd($url);

      Mail::send('email_template',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'phone' => $request->get('phone'),
                 'user_message' => $request->get('message'),
                 'immobile' => $url,
             ), function($message) {
                  $message->from('mailereliano@gmail.com');
                  // $message->to('ciao.donatociao@gmail.com');
                  $message->to('ciao.donatociao@gmail.com', 'Enrico Eliano')->subject
            ('Nuova richiesta dal sito Eliano.it');
               });

      return back()->with('success', 'Grazie per averci inviato la tua richiesta!');

  }
}
