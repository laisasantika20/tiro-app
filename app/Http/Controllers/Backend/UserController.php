<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function UserView() {

        $data['allDataUser']=User::all();   // Mengambil semua data dari model User
        return view ('backend.user.view_user', $data);  // Mengembalikan tampilan (view) 'backend.user.view_user' dengan data yang diambil
        
    }

    public function UserAdd () {

        return view ('backend.user.add_user');
    }

    public function UserStore (Request $request) {
        // dd($request);
        $validateData=$request->validate([
            'email' => 'required|unique:users',
            'textNama' => 'required',
        ]);

            // dd($request);
            $data=new User();
            $data->usertype=$request->selectuser;
            $data->name=$request->textNama;
            $data->nrp=$request->textnrp;
            $data->email=$request->email;
            $data->password=bcrypt($request->password);
            $data->save();

            return redirect()->route('user.view')->with('message','Berhasil menambahkan User');
       
    }

    public function UserEdit($id){
       
        $editData= User::find($id);
        return view('backend.user.edit_user', compact('editData'));
    }

    public function UserUpdate (Request $request, $id) {
        // dd($request);
        $validateData=$request->validate([
            'email' => 'required',
            'textNama' => 'required',
        ]);

            // dd($request);
            $data=User::find($id);
            $data->usertype=$request->selectuser;
            $data->name=$request->textNama;
            $data->nrp=$request->textnrp;
            $data->email=$request->email;
            $data->password=bcrypt($request->password);
            $data->save();

            return redirect()->route('user.view')->with('message','Berhasil edit User');
       
    }

    public function UserDelete($id){
        // dd('berhasil masuk controller user edit');
        $deleteData = User::find($id);

        $deleteData->delete();

        return redirect()->route('user.view')->with('message','Berhasil Menghapus User');
    }
}