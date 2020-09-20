<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Immobile;
use PDF;

class PdfController extends Controller
{
  public function downloadPDF($id) {
          $immobile = Immobile::find($id);
          //dd($immobile->img_preview);
          //$pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('back.scheda', compact('immobile'));
          $pdf = PDF::loadView('back.scheda', compact('immobile'));

          //return $pdf->download('immobile.pdf');
          return $pdf->stream();
  }
}
