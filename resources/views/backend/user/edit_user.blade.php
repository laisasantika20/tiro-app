@extends('admin.index_master')
@section('admin')

<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
        </div>
<div class="card-body">
        <form method="POST" action="{{route('users.update', $editData->id )}}">
            @csrf

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$editData->name}}"
                        name="textNama" placeholder="">
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NRP : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$editData->nrp}}"
                        name="textnrp" placeholder="">
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Role : </label>
                <div class="col-sm-12 col-md-7">
                    <select class="form-select" name="selectuser" aria-label="Default select example"
                        placeholder="pilih role">
                        <option value="" disabled selected="selected">Pilih Role User</option>
                        <option value="admin" {{($editData->usertype=="admin"? "selected":"")}}>ADMIN</option>
                        <option value="kasir" {{($editData->usertype=="kasir"? "selected":"")}}>KASIR</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="email" class="form-control" value="{{$editData->email}}" name="email"
                        id="exampleFormControlInput1">
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{route('user.view')}}" class="btn btn-primary">Batal</a>
                </div>
            </div>

        </form>
    </div>
    </div>
</div @endsection