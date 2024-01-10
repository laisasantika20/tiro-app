<body>

    <div class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex flex-row p-2">
                        <center>
                            <img src="https://i.ibb.co/Wg0WPCv/tagline-new.png" width="150"></center>
                            <br>
                                <div class="d-flex flex-column">
                                    <span class="font-weight-bold">
                                        <center>
                                            <b>PEMBAYARAN TIKET RORO<br>
                                                    PELABUHAN TANJUNG WANGI
                                                    <br>
                                                        Jl. Raya Situbondo, Ketapang, Banyuwangi</b>
                                                </center>
                                            </span>
                                        </div>
                                    </div>
                                    @foreach($prinNota as $ticket)
                                    <center>
                                 
                                        <div>----------------------------------------------------------</div>
                                        <div class="products p-2">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr class="add">
                                                        <td>Kode Struk</td>
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
                                                        <td>{{$ticket->kd_tiket}}</td>
                                                    </tr>
                                                    <tr class="add">
                                                        <td>Kapal</td>
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
                                                        <td>{{$ticket->kapal_id}}</td>
                                                    </tr>
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
                                                        <td>{{$ticket->no_plat}}</td>
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
                                                        <td>{{$ticket->golongan}}</td>
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
                                                        <td>{{$ticket->tujuan}}</td>
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
                                                        <td>{{$ticket->harga}}</td>
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
                                                        <td>{{$ticket->created_at}}</td>
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
                                                    </div>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>----------------------------------------------------------</div>
                                        <div class="products p-2">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <b>Terima Kasih</b>
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
                                        @endforeach
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                </body>

                <script type="text/javascript">
                    window.print();
                </script>