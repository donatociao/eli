<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Immobile;
use App\Stato;
use App\Contact;

class DashController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $immobili = Immobile::all();
      $count = Immobile::all()->count();
      $newMessages = Contact::where('is_read', '=', '0')->count();
      return view('back.dash', compact('immobili', 'count', 'newMessages'));
    }

    public function messages()
    {
      $contacts = Contact::orderBy('id', 'DESC')->get();
      return view('back.messages', compact('contacts'));
    }


    public function messageShow($id)
    {
      $messageToshow = Contact::where('id', $id)->first();

      $msg = Contact::find($id);
      if($msg) {
        $msg->is_read = 1;
        $msg->save();
      }

      return view('back.messageshow', compact('messageToshow'));
    }
}
