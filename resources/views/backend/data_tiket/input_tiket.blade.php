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
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kapasitas Kapal : </label>
                    <div class="col-sm-12 col-md-7">
                        @foreach ($kap as $kapal)
                        @if($kapal->kapasitas > 0)
                        <p> {{$kapal->nm_kapal}} : {{ $kapal->kapasitas }} Penumpang</p>
                        @else
                        <p> {{$kapal->nm_kapal}} : Habis</p>
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NO. Plat : </label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="textNo_Plat" placeholder="">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Kapal : </label>
                    <div class="col-sm-12 col-md-7">
                        <select class="form-select" aria-label="Default select example" name="jenis_kapal">
                            <option value="" disabled selected="selected">PILIH KAPAL</option>
                            @foreach ($kap as $item)
                            <option value="{{$item->nm_kapal}}">{{$item->nm_kapal}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tujuan : </label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" value="lembar" name="textTujuan" placeholder=""
                            readonly>
                    </div>
                </div>


                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Golongan : </label>
                    <div class="col-sm-12 col-md-7">
                        <select class="form-select" aria-label="Default select example" name="selectgolongan"
                            id="selectGolongan">
                            <option value="" disabled selected="selected">PILIH OPSI</option>
                            @foreach($golongans as $golongan)
                            <option value="{{ $golongan->nama_golongan }}" data-price="{{ $golongan->harga }}">
                                {{ $golongan->nama_golongan }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga : </label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="harga" id="harga" readonly>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-success">kirim</button>
                        <a href="{{route('data_tiket.view')}}" class="btn btn-primary">Batal</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection