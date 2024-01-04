@extends('admin.index_master')
@section('admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul 
        ul li {
            display: block;
        }
        hr {
            border-style:dashed;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="header" style="margin-bottom: 30px;">
            <h3>Tiket Roro</h3>
            <p>Alamat Toko</p>
        </div>
        <hr>
        <div class="flex-container-1">
            <div class="left">
                <ul>
                    <li>id antrian</li>
                    <li>Jenis Truk</li>
                    <li>Tanggal</li>
                </ul>
            </div>
            <div class="right">
                <ul>
                    <li> {{ $id->id }} </li>
                    <li> {{ $id->jenis_truck }} </li>
                    <li> {{date('Y-m-d : H:i:s', strtotime($id->created_at))}} </li>
                </ul>
            </div>
            </div>
            </div>
            <div class="flex-container" style="margin-bottom: 10px; text-align:right;">
                 <div>nama produk</div>
                 <div>harga</div>
            </div>
            <div class="flex-container" style="text-align: right;">
            <div>Tiket Roro</div>
            <div>8000</div>
            <hr>
            <div class="header" style="margin-top: 50px;">
            <h3>Terimakasih</h3>
            </div>
</body>
</html>


@endsection