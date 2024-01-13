@extends('admin.index_master')
@section('admin')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Tiket RORO</h6>
        </div>
        <div class="card-body">
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
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Kapal : </label>
                    <div class="col-sm-12 col-md-7">
                        <select class="form-select" aria-label="Default select example" name="jenis_kapal">
                            <option value="" disabled selected="selected">PILIH KAPAL</option>
                            @foreach ($kap as $item)
                            <option value="{{$item->nm_kapal}}"
                                {{($editData->kapal_id=="$item->nm_kapal"? "selected":"")}}>{{$item->nm_kapal}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tujuan : </label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="textTujuan" value="{{$editData->tujuan}}"
                            placeholder="" readronly>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Golongan : </label>
                    <div class="col-sm-12 col-md-7">
                        <select class="form-select" aria-label="Default select example" name="selectgolongan"
                            id="selectGolongan_edit">
                            <option value="" disabled selected="selected">PILIH KAPAL</option>
                            @foreach($golongans as $golongan)
                            <option value="{{ $golongan->nama_golongan }}" data-price="{{ $golongan->harga }}"
                                {{ $editData->golongan == $golongan->nama_golongan ? 'selected' : '' }}>
                                {{ $golongan->nama_golongan }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga : </label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="harga" id="harga" readonly
                            value="{{ $editData->harga }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection