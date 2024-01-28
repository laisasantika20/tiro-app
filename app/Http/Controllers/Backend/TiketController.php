<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\golongan;
use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\Kapal;
use App\Models\User;
use Carbon\Carbon;

class TiketController extends Controller
{
    //
    public function TiketView () {
        $data['allDataTiket']=Tiket::all();
        return view ('backend.data_tiket.data_tiket', $data);
    }

    public function TiketAdd()
    {
        $kap = Kapal::all();//memanggil data yang ada di semua kolom pada tabel kapals
        $golongans = Golongan::all(); //memanggil data yang ada di semua kolom pada tabel golongan

        return view('backend.data_tiket.input_tiket', compact( 'kap', 'golongans'));
    }
    

    public function TiketStore (Request $request) {
        // dd($request);
        $validateData = $request->validate([
            'textNo_Plat' => 'required',
            'selectgolongan' => 'required',
        ]);

        // Mengambil data kapal
         $kapal = Kapal::where('nm_kapal', $request->input('jenis_kapal'))->first();

        if ($kapal->kapasitas <= 0) {
            return redirect()->back()->with('error', 'Kapasitas kapal habis.');
        }
    
        // Mengambil data harga sesuai golongan yang dipilih
        $golongan = golongan::where('nama_golongan', $request->input('selectgolongan'))->first();
        $harga = $golongan->harga;
    
        $data = new Tiket();
        $data->no_plat = $request->textNo_Plat;
        $data->kd_tiket = "TWI-" . rand(1111, 9999);
        $data->kapal_id = $request->jenis_kapal;
        $data->golongan = $request->selectgolongan;
        $data->tujuan = $request->textTujuan;
        $data->harga = $harga; 
        $data->save();

        // Kurangi kapasitas kapal
        $kapal = Kapal::where('nm_kapal', $request->input('jenis_kapal'))->first();
         if ($kapal) {
        $kapal->kapasitas = $kapal->kapasitas - 1;
        $kapal->save();
    }
          
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


             // Mengambil data harga sesuai golongan yang dipilih
            $golongan = golongan::where('nama_golongan', $request->input('selectgolongan'))->first();
            $harga = $golongan->harga;
                
           // dd($request);
           $data=Tiket::find($id);
           $data->no_plat=$request->textNo_Plat;
           $data->kapal_id=$request->jenis_kapal;
           $data->golongan=$request->selectgolongan;
           $data->tujuan=$request->textTujuan;
           $data->harga = $harga;
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