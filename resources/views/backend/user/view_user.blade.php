@extends('admin.index_master')
@section('admin')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive table-striped">
                <div>
                    <h6 class="m-0 font-weight-bold text-primary">Data Tiket RORO</h6>
                </div>
                <br>
                <div>
                    <a href="#" class="btn btn-success mb-3">
                        <i class="fas fa-plus"></i> Tambah User
                    </a>
                    <a href="#" class="btn btn-primary mb-3">Kembali</a>
                </div>
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No. WA</th>
                            <th>Role</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection