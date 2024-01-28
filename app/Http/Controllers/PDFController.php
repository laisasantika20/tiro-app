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
        // Validasi input
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
    
        // Pemrosesan tanggal
        $start_date = \Carbon\Carbon::parse($request->input('start_date'))->format('Y-m-d');
        $end_date = \Carbon\Carbon::parse($request->input('end_date'))->endOfDay()->format('Y-m-d H:i:s');
    
        try {
            // Query untuk mendapatkan data tiket berdasarkan rentang tanggal
            $allDataTiket = Tiket::whereBetween('created_at', [$start_date, $end_date])
                ->get();
    
            // Data yang akan dikirim ke view
            $data = [
                'greeting' => 'Report Tiket RORO',
                'allDataTiket' => $allDataTiket,
            ];
    
            // Load view dan generate PDF
            $pdf = PDF::loadView('backend.generate_report.report', $data);
    
            // Unduh PDF dengan nama 'Report.pdf'
            return $pdf->download('Report.pdf');
        } catch (\Exception $e) {
            // Handle kesalahan dengan kembali ke halaman sebelumnya
            return back()->with('error', 'Gagal menghasilkan laporan PDF');
        }
    }
}