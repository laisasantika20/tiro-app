<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Tiket RORO</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="text-center">{{ $greeting }}</h1>
    <div class="card-body">
        <div class="table-responsive table-striped">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Plat</th>
                        <th>Golongan Truck</th>
                        <th>Tujuan</th>
                        <th>Harga</th>
                        <th>Tanggal Jam</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allDataTiket as $key => $tiket)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$tiket->no_plat}}</td>
                        <td>{{$tiket->golongan}}</td>
                        <td>{{$tiket->tujuan}}</td>
                        <td>{{$tiket->harga}}</td>
                        <td>{{$tiket->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
