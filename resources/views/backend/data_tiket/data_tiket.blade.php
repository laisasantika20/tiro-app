@extends('admin.index_master')
@section('admin')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Tiket RORO</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive table-striped">
                <div>
                    <a href="{{route('data_tiket.add')}}" class="btn btn-success mb-3">
                        <i class="fas fa-plus"></i> Tambah Tiket
                    </a>

                    <a href="{{ route('generate.report') }}" class="btn btn-primary mb-3"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No PLat</th>
                            <th>Golongan Truck</th>
                            <th>Tujuan</th>
                            <th>Harga</th>
                            <th>Tanggal Jam</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>No PLat</th>
                            <th>Golongan Truck</th>
                            <th>Tujuan</th>
                            <th>Harga</th>
                            <th>Tanggal Jam</th>
                            <th>AKSI</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($allDataTiket as $key => $tiket)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$tiket->no_plat}}</td>
                            <td>{{$tiket->golongan}}</td>
                            <td>{{$tiket->tujuan}}</td>
                            <td>{{$tiket->harga}}</td>
                            <td>{{ \Carbon\Carbon::parse($tiket->created_at)->format('d M Y H:i:s') }}</td>
                            <td>
                                <a href="{{route('data_tiket.nota', $tiket->id)}}" class="btn btn-primary" title="Ubah">
                                    <i class="fas fa-fw fa-eye"></i>
                                </a>
                                <a href="{{route('data_tiket.edit', $tiket->id)}}" class="btn btn-warning" title="Ubah">
                                    <i class="fas fa-fw fa-edit"></i>
                                </a>
                                <a href="{{route('data_tikets.delete', $tiket->id)}}" class="btn btn-danger"
                                    id="delete">
                                    <i class="fas fa-fw fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection