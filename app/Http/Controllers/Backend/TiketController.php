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
    public function TiketView (Request $request) {
        $data['allDataTiket']=Tiket::all();
        $kapalList = Kapal::all(); // Mendapatkan daftar kapal untuk dropdown filter
        
      // Filter berdasarkan kapal jika ada parameter kapal dalam request
      if ($request->has('kapal')) {
        $kapalId = $request->input('kapal');
        $data['allDataTiket'] = $data['allDataTiket']->filter(function ($tiket) use ($kapalId) {
            return $tiket->kapal_id == $kapalId;
        });
    }

    return view('backend.data_tiket.data_tiket', compact('data', 'kapalList'));
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

      // Kirim pesan ke Telegram
      $pesan = $this->generateMessage($request->selectgolongan);

        // Mengirim pesan ke grup-grup dimana bot tersebut berada
        $this->forwardMessageToBotGroups($pesan);

        // Meneruskan pesan ke chat pribadi pengguna
        $chatId = '753177290'; // Ganti dengan ID chat pribadi pengguna
        $this->forwardMessageToPrivateChat($pesan, $chatId);

        // Redirect dan tampilkan pesan sukses
        return redirect()->route('nota.print')->with('message', 'Berhasil Tambah Tiket');
    }


    // Method untuk meneruskan pesan ke grup-grup dimana bot berada
    private function forwardMessageToBotGroups($pesan)
    {
        // Mendapatkan daftar grup-grup dimana bot berada
        $token = "6555585112:AAGd2yO_2vTdXfxIs4UdHsSXFzAmJfvBorw";
        // Daftar ID grup Telegram tempat bot Anda berada
        $groupIds = ['-1002009979278'];

        foreach ($groupIds as $groupId) {
            $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $groupId . "&text=" . urlencode($pesan);
 
            $client = new \GuzzleHttp\Client();
            $response = $client->get($url);
 
         // Tambahkan penanganan kesalahan atau pemeriksaan status respon jika diperlukan
        }
    }

    // Method untuk meneruskan pesan ke chat pribadi pengguna
    private function forwardMessageToPrivateChat($pesan, $chatId)
    {
        $token = "6555585112:AAGd2yO_2vTdXfxIs4UdHsSXFzAmJfvBorw";
        $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatId . "&text=" . urlencode($pesan);

        $client = new \GuzzleHttp\Client();
        $response = $client->get($url);

        // Tambahkan penanganan kesalahan atau pemeriksaan status respon jika diperlukan
    }

    // Method untuk menghasilkan pesan berdasarkan golongan kapal
private function generateMessage($golongan)
{
    switch ($golongan) {
        case 'Golongan I':
            return "ANDA MENCETAK TIKET KAPAL DENGAN GOLONGAN 1";
        case 'Golongan II':
            return "ANDA MENCETAK TIKET KAPAL DENGAN GOLONGAN 2";
        default:
            return "TIKET LAH EH CETAK";
    }
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