<body>

    <div class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex flex-row p-2">
                        <center><img src="https://i.imgur.com/vzlPPh3.png" width="48"> </center>
                        <div class="d-flex flex-column"> <span class="font-weight-bold">
                                <center>Tiket Roro</center>
                            </span>
                        </div>
                    </div>
                    <center>
                        <div>----------------------------------------------------------</div>
                        @csrf
                        <div class="products p-2">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr class="add">
                                        <td>No Plat</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{$lihatNota->no_plat}}</td>
                                    </tr>
                                    <tr class="content">
                                        <td>Golongan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{$lihatNota->golongan}}</td>
                                    </tr>
                                    <tr class="content">
                                        <td>Tujuan</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{$lihatNota->tujuan}}</td>
                                    </tr>
                                    <tr class="content">
                                        <td>Harga</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{$lihatNota->harga}}</td>
                                    </tr>
                                    <tr class="content">
                                        <td>Jam</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{$lihatNota->created_at}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>----------------------------------------------------------</div>
                        <div class="products p-2">
                            <table class="table table-borderless">
                                <tbody>
                                    ini QR CODE
                                </tbody>
                            </table>
                        </div>
                        <div>----------------------------------------------------------</div>
                        <div class="products p-2">
                            <table class="table table-borderless">
                                <tbody>
                                    <b>Terimakasih</b>
                                </tbody>
                            </table>
                        </div>
                        <div class="products p-2">
                            <table class="table table-borderless">
                                <tbody>
                                    Sudah membeli tiket, Hati hati di jalan
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

</body>

<script type="text/javascript">
window.print();
</script>