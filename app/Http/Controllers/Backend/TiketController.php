<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\golongan;
use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\Kapal;

class TiketController extends Controller
{
    //
    public function TiketView () {
        $data['allDataTiket']=Tiket::all();
        return view ('backend.data_tiket.data_tiket', $data);
    }

    public function TiketAdd()
    {
        $kap = Kapal::all();
        $golongans = Golongan::all(); // Pastikan nama model Golongan sesuai dengan nama sebenarnya
        $data['allDataTiket'] = Tiket::all();

        return view('backend.data_tiket.input_tiket', compact('data', 'kap', 'golongans'));
    }
    

    public function TiketStore (Request $request) {
        // dd($request);
        $validateData = $request->validate([
            'textNo_Plat' => 'required',
            'selectgolongan' => 'required',
        ]);
    
        // Temukan harga berdasarkan golongan yang dipilih
        $golongan = golongan::where('nama_golongan', $request->input('selectgolongan'))->first();
        $harga = $golongan->harga;
    
        $data = new Tiket();
        $data->no_plat = $request->textNo_Plat;
        $data->kd_tiket =$request->textKd_tiket; // Untuk menghasilkan Kode Tiket baru
        $data->kapal_id = $request->jenis_kapal;
        $data->golongan = $request->selectgolongan;
        $data->tujuan = $request->textTujuan;
        $data->harga = $harga; // Menggunakan harga yang sudah diambil dari Golongan
        $data->save();
          
            return redirect()->route('nota.print')->with('message','Berhasil Tambah Tiket');
    }

    public function TiketEdit ($id){
            
        $kap = Kapal::all();
        $golongans = golongan::all();
        $editData=Tiket::find($id);
        return view('backend.data_tiket.edit_tiket', compact('editData', 'kap', 'golongans'));
    }
    

    public function TiketUpdate (Request $request, $id) {
        // dd($request);
        $validateData=$request->validate([
            'textNo_Plat' => 'required',
            'selectgolongan' => 'required',
        ]);


                // Temukan harga berdasarkan golongan yang dipilih
                $golongan = golongan::where('nama_golongan', $request->input('selectgolongan'))->first();
                $harga = $golongan->harga;
                
           // dd($request);
           $data=Tiket::find($id);
           $data->no_plat=$request->textNo_Plat;
           $data->kapal_id=$request->jenis_kapal;
           $data->golongan=$request->selectgolongan;
           $data->tujuan=$request->textTujuan;
           $data->harga = $harga; // Menggunakan harga yang sudah diambil dari Golongan
           $data->save();
             

           return redirect()->route('data_tiket.view')->with('message','Berhasil Edit Tiket');
       
    }

    public function TiketDelete($id){
        // dd('berhasil masuk controller user edit');
        $deleteData = Tiket::find($id);

        $deleteData->delete();

        return redirect()->route('data_tiket.view')->with('message','Berhasil Menghapus Tiket');
    }

    public function TiketNota($id){

        $lihatNota=Tiket::find($id);
        return view('backend.data_tiket.nota_view', compact('lihatNota'));
    }
   
    public function printNota(){

        $prinNota=Tiket::latest()->take(1)->get();
        return view('backend.data_tiket.nota', compact('prinNota'));
    }

}