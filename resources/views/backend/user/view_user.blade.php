@extends('admin.index_master')
@section('admin')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive table-striped">
                <div>
                    <a href="{{route('user.add')}}" class="btn btn-success mb-3">
                        <i class="fas fa-plus"></i> Tambah User
                    </a>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NRP</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                        @foreach($allDataUser as $key => $user)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->nrp}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->usertype}}</td>
                            <td>
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning" title="Ubah">
                                    <i class="fas fa-fw fa-edit"></i>
                                </a>
                                <a href="{{route('users.delete', $user->id)}}" class="btn btn-danger" id="delete">
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

@endsection