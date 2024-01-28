@extends('admin.index_master')
@section('admin')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Cetak Laporan Tiket</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('generate.report') }}">

                @csrf
                <!-- Tambahkan ini untuk CSRF protection -->

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mulai Tanggal : </label>
                    <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="start_date" placeholder="">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Selesai Tanggal : </label>
                    <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="end_date" placeholder="">
                    </div>
                </div>


                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Download</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection