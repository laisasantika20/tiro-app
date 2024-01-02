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
                    <a href="{{route('user.add')}}" class="btn btn-success mb-3">
                        <i class="fas fa-plus"></i> Tambah User
                    </a>
                    <a href="{{route('dashboard')}}" class="btn btn-primary mb-3">Kembali</a>
                </div>
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NPR</th>
                            <th>Email</th>
                            <th>Jam Rilis</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($allDataUser as $key => $user)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->npr}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{auth()->user()->created_at}}</td>
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
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection