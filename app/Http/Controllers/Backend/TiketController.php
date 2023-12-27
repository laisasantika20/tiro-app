<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tiket;

class TiketController extends Controller
{
    //
    public function TiketView () {
        return view ('backend.data_tiket.data_tiket');
    }
}
