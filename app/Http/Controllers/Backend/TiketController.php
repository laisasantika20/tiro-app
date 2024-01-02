<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tiket;

class TiketController extends Controller
{
    //
    public function TiketView () {
        $data['allDataTiket']=Tiket::all();
        return view ('backend.data_tiket.data_tiket', $data);
    }

    public function TiketAdd () {

        // $data['allDataUser']=User::all();
        $data['allDataTiket']=Tiket::all();
        return view ('backend.data_tiket.input_tiket', $data);
    }

    public function TiketStore (Request $request) {
        // dd($request);
        $validateData=$request->validate([
            'textNo_Plat' => 'required',
            'selectjenis' => 'required',
        ]);

            // dd($request);
            $data=new Tiket();
            $data->no_plat=$request->textNo_Plat;
            $data->jenis_truck=$request->selectjenis;
            $data->save();

            return redirect()->route('data_tiket.view')->with('message','Berhasil');
       
    }

    public function TiketEdit ($id){
            
        $editData=Tiket::find($id);
        return view('backend.data_tiket.edit_tiket', compact('editData'));
    }

    public function TiketUpdate (Request $request, $id) {
        // dd($request);
        $validateData=$request->validate([
            'textNo_Plat' => 'required',
            'selectjenis' => 'required',
        ]);

           // dd($request);
           $data=Tiket::find($id);
           $data->no_plat=$request->textNo_Plat;
           $data->jenis_truck=$request->selectjenis;
           $data->save();

           return redirect()->route('data_tiket.view')->with('message','Berhasil Edit Tiket');
       
    }

    public function TiketDelete($id){
        // dd('berhasil masuk controller user edit');
        $deleteData = Tiket::find($id);

        $deleteData->delete();

        return redirect()->route('data_tiket.view')->with('message','Berhasil Menghapus Tiket');
    }

    public function TiketNota(){

        return view('backend.data_tiket.nota');
    }
}