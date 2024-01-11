@extends('admin.index_master')
@section('admin')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Golongan</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('golongan.update', $golongan->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Golongan : </label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama_golongan" value="{{ $golongan->nama_golongan }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi : </label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="deskripsi" value="{{ $golongan->deskripsi }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga : </label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="harga" value="{{ $golongan->harga }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-success">Ubah</button>
                        <a href="#" class="btn btn-primary">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection