<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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

    public function TiketAdd () {

        // $data['allDataUser']=User::all();
        $kap = Kapal::all();
        $data['allDataTiket']=Tiket::all();
        return view ('backend.data_tiket.input_tiket', compact('data', 'kap'));
    }

    public function TiketStore (Request $request) {
        // dd($request);
        $validateData=$request->validate([
            'textNo_Plat' => 'required',
            'selectgolongan' => 'required',
        ]);

            // dd($request);
            $data=new Tiket();
            $data->no_plat=$request->textNo_Plat;
            $data->kd_tiket=$request->textKd_Tiket;
            $data->kapal_id=$request->jenis_kapal;
            $data->golongan=$request->selectgolongan;
            $data->tujuan=$request->textTujuan;
            $data->harga=$request->textHarga;
            $data->save();
          
            return redirect()->route('nota.print')->with('message','Berhasil Tambah Tiket');
    }

    public function TiketEdit ($id){
            
        $kap = Kapal::all();
        $editData=Tiket::find($id);
        return view('backend.data_tiket.edit_tiket', compact('editData', 'kap'));
    }

    public function TiketUpdate (Request $request, $id) {
        // dd($request);
        $validateData=$request->validate([
            'textNo_Plat' => 'required',
            'selectgolongan' => 'required',
        ]);

           // dd($request);
           $data=Tiket::find($id);
           $data->no_plat=$request->textNo_Plat;
           $data->kapal_id=$request->jenis_kapal;
           $data->golongan=$request->selectgolongan;
           $data->tujuan=$request->textTujuan;
           $data->harga=$request->textHarga;
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