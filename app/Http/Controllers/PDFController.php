<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function getPDF(Request $request)
    {
//        dd($request->key);
        $pdf = PDF::loadView('pdf.LogPDF');

        return $pdf->stream('LogPDF.pdf');
    }
}
