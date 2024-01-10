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
                        <option value="Gol II - Sepeda,Sepeda Motor (Roda 2 dan Roda 3)">Gol II - Sepeda,Sepeda Motor (Roda 2 dan Roda 3)</option>
                        <option value="Gol III - Sedan, Minibus, Pick Up">Gol III - Sedan, Minibus, Pick Up</option>
                        <option value="Gol IV - Truck / Bus Sedang dan Kendaraan Roda 4 Lainnya">Gol IV - Truck / Bus Sedang dan Kendaraan Roda 4 Lainnya</option>
                        <option value="Gol V - Truck / Bus Besar dan Kendaraan Roda 6 Lainnya">Gol V - Truck / Bus Besar dan Kendaraan Roda 6 Lainnya</option>
                        <option value="Gol VI - Truck Tronton dan Kendaraan Roda >= 10 Lainnya">Gol VI - Truck Tronton dan Kendaraan Roda >= 10 Lainnya</option>
                        <option value="Gol VII - Alat Berat dan Sejenisnya">Gol VII - Alat Berat dan Sejenisnya</option>
                        <option value="Gol VIII - Alat Berat Roda Besi">Gol VIII - Alat Berat Roda Besi</option>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            
        </form>
        </div>
    </div>
</div>

@endsection