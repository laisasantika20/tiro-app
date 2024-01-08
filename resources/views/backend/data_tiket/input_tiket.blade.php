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
        <div class="card-body">
        <form method="post" action="{{route('tikets.store')}}">
            @csrf
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NO. PLAT : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="textNo_Plat" placeholder="">
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Golongan : </label>
                <div class="col-sm-12 col-md-7">
                    <select class="form-select" aria-label="Default select example" name="selectgolongan">
                        <option selected>PILIH OPSI</option>
                        <option value="golongan I">Golongan I</option>
                        <option value="golongan II">Golongan II</option>
                        <option value="golongan III">Golongan III</option>
                    </select>
                </div>
            </div>


            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tujuan : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" value="lembar" name="textTujuan" placeholder="">
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" value="4000000" name="textHarga" placeholder="">
                </div>
            </div>

            {{-- <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div> --}}

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{route('user.view')}}" class="btn btn-primary">Batal</a>
                </div>
            </div>
            
        </form>
        </div>
    </div>
</div>

@endsection