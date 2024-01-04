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
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Golongan Truck : </label>
                <div class="col-sm-12 col-md-7">
                    <select class="form-select" aria-label="Default select example" name="selectgolongan">
                        <option selected>PILIH OPSI</option>
                        <option value="golongan I" {{($editData->jenis_truck=="golongan I"? "selected":"")}}>Golongan I
                        </option>
                        <option value="golongab II" {{($editData->jenis_truck=="golongan II"? "selected":"")}}>Golongan
                            II</option>
                        <option value="golongan III" {{($editData->jenis_truck=="golongan III"? "selected":"")}}>
                            Golongan III</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tujuan : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="textTujuan" value="{{$editData->tujuan}}"
                        placeholder="">
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga : </label>
                <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="textHarga" value="{{$editData->harga}}"
                        placeholder="">
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