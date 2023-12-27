@extends('admin.index_master')
@section('admin')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h6 class="m-0 font-weight-bold text-primary">Data Tiket RORO</h6>
        </div>

        <div class="table-responsive table-striped">
            <div>
                <a href="#" class="btn btn-success mb-3">
                    <i class="fas fa-plus"></i> Tambah User
                </a>
                <a href="#" class="btn btn-primary mb-3">Kembali</a>
            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                            <a href="#" class="btn btn-warning" title="Ubah">
                                <i class="fas fa-fw fa-edit"></i>
                            </a>
                            <br>
                            <br>
                            <a href="#" class="btn btn-danger" id="delete">
                                <i class="fas fa-fw fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection