@extends('admin.index_master')
@section('admin')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input Kapal</h6>
        </div>
        <div class="card-body">
        <form method="post" action="{{ route('kapal.store')}}">
            @csrf
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kapal : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="nm_kapal" placeholder="">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kapasitas : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="kapasitas" placeholder="">
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('kapal.index') }}" class="btn btn-primary">Batal</a>
                </div>
            </div>
            
        </form>
        </div>
    </div>
</div>
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kapal</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive table-striped">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Kapal</th>
                            <th>Kapasitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                        @foreach ($kapals as $kapal)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kapal->nm_kapal }}</td>
                            <td>{{ $kapal->kapasitas }}</td>
                            <td>
                                <a href="{{ route('kapal.edit', $kapal->id) }}" class="btn btn-warning" title="Ubah">
                                    <i class="fas fa-fw fa-edit"></i>
                                </a>
                                <form action="{{ route('kapal.destroy', $kapal->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" id="delete">
                                        <i class="fas fa-fw fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection