@extends('admin.index_master')
@section('admin')

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
        <form method="POST" action="{{route('data_tikets.update', $editData->id )}}">
            @csrf
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NO. PLAT : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="textNo_Plat" value="{{$editData->no_plat}}"
                        placeholder="">
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">JENIS TRUCK : </label>
                <div class="col-sm-12 col-md-7">
                    <select class="form-select" aria-label="Default select example" name="selectjenis">
                        <option selected>PILIH OPSI</option>
                        <option value="bbm" {{($editData->jenis_truck=="bbm"? "selected":"")}}>Bbm</option>
                        <option value="pupuk" {{($editData->jenis_truck=="pupuk"? "selected":"")}}>Pupuk</option>
                        <option value="ikan" {{($editData->jenis_truck=="ikan"? "selected":"")}}>Ikan</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@endsection