<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use App\Models\User as ModelsUser;
use Database\Seeders\user;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function beranda()
    {
        $monthlyTicketCounts = Tiket::whereYear('created_at', date('Y'))
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();
        $countUser = ModelsUser::count();
        $countTiket = Tiket::count();
        $totalPendapatan = Tiket::sum('harga');
        $latestTickets = Tiket::latest()->take(5)->get();
        return view('admin.index', compact('countTiket','monthlyTicketCounts','countUser','totalPendapatan','latestTickets'));
    }
}
