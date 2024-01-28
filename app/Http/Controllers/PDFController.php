<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function formDownload()
    {
        return view('backend.generate_report.form_download');
    }

    public function generatePDF(Request $request)
    {
        // Ambil data tanggal mulai dan selesai dari request
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
    
        // Query untuk mendapatkan data tiket berdasarkan rentang tanggal
        $allDataTiket = Tiket::whereBetween('created_at', [$start_date, $end_date])
            ->get();
    
        // Data yang akan dikirim ke view
        $data = [
            'greeting' => 'Report Tiket RORO',
            'allDataTiket' => $allDataTiket,
        ];
    
        // Load view dan generate PDF
        $pdf = Pdf::loadView('backend.generate_report.report', $data);
    
        // Unduh PDF dengan nama 'Report.pdf'
        return $pdf->download('Report.pdf');
    }
}