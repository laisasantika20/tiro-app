@extends('admin.index_master')
@section('admin')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input Tiket RORO</h6>
        </div>

        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NO. PLAT : </label>
            <div class="col-sm-12 col-md-7">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
        </div>

        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">TUJUAN : </label>
            <div class="col-sm-12 col-md-7">
                <select class="form-select" aria-label="Default select example">
                    <option selected>PILIH OPSI</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">GOLONGAN : </label>
            <div class="col-sm-12 col-md-7">
                <select class="form-select" aria-label="Default select example">
                    <option selected>PILIH OPSI</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">TANGGAL :</label>
            <div class="col-sm-12 col-md-7">
                <input type="date" name="tanggal" class="form-control">
            </div>
        </div>

        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">TANGGAL :</label>
            <div class="col-sm-12 col-md-7">
                <input type="timestamp" name="tanggal" class="form-control">
            </div>
        </div>

        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

@endsection