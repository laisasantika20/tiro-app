@extends('admin.index_master')
@section('admin')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
        </div>
        <div class="card-body">
        <form method="post" action="{{route('users.store')}}">
            @csrf
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NAMA : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="textNama"
                        placeholder="">
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NPR : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="textnrp" placeholder="">
                </div>
            </div>

            <!-- <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NPR : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="{{ date('Y-m-d H:i:s') }}" class="form-control" id="exampleFormControlInput1" name="textnpr" placeholder="">
                </div>
            </div> -->

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ROLE : </label>
                <div class="col-sm-12 col-md-7">
                    <select class="form-select" name="selectuser" aria-label="Default select example">
                        <option selected>PILIH ROLE</option>
                        <option value="admin">ADMIN</option>
                        <option value="kasir">KASIR</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">EMAIL : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="">
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">PASSWORD : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                    <button type="submit" class="btn btn-success">Kirim</button>
                        <a href="{{route('user.view')}}" class="btn btn-primary">Batal</a>

                </div>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection