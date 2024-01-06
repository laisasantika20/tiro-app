<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'greeting' => 'Report Bulanan Tiket RORO',
            'allDataTiket' => Tiket::all(),
        ];
        $pdf = Pdf::loadView('backend.data_tiket.report', $data);

        return $pdf->download('Report.pdf');
    }

    
}
