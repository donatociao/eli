<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Immobile;
use App\Stato;
use Illuminate\Support\Facades\DB;

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
      $visite = DB::table('views')->where('viewable_id', '=', '?')->count();

      return view('back.dash', compact('immobili', 'count', 'visite'));
    }
}
