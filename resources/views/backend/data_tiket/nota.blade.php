<body>

    <div class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex flex-row p-2">
                        <center><img src="https://i.ibb.co/Wg0WPCv/tagline-new.png" width="150"> </center>
                        <div class="d-flex flex-column"> <span class="font-weight-bold">
                                <center><b>PEMBAYARAN TIKET RORO<br>
                                PELABUHAN TANJUNG WANGI <br>
                                Jl. Raya Situbondo, Ketapang, Banyuwangi</b></center>
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
                                    <div class="visible-print text-center">
                                        {!! QrCode::size(100)->generate(Request::url()); !!}
                                        <p><b>SCAN ME<b></p>
                                    </div>
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
                                    Hati - Hati di Jalan
                                </tbody>
                                <h5>Berlaku untuk sekali masuk</h5>
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