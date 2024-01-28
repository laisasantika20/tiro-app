@extends('admin.index_master')
@section('admin')
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b>Beranda</b></h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Data Tiket</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countTiket }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total Pendapatan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalPendapatan  }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">User
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $countUser }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-md-4 col-lg-7">
                <div class="card shadow mb-4" style="height:490px;">
                    <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Grafik Penjualan Tiket Setahun</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area mt-4">
                            <canvas id="monthlyTicketChart" width="400" height="200"></canvas>
                            <p class="text-center mt-3">Total Tiket Selama Setahun</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-5">

                <!-- Approach -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Total Pertahun</h6>
                    </div>
                    <div class="card-body">
                    <p>  @php
                            // Replace the following lines with your actual logic to fetch ticket count
                            // Example: Fetching ticket count from the database
                            $ticketCount = DB::table('tikets')->whereYear('created_at', date('Y'))->count();
                            @endphp

                        <div class="text-center">
                            <h2 class="text-gray-800">{{ $ticketCount }}</h2>
                            <p>Total Tiket Tahun Ini</p>
                        </div>
                        </p>
                        <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active text-center" aria-current="true">
                                Data Tiket Terbaru
                            </a>
                            @foreach($latestTickets as $ticket)
                            <a href="#" class="list-group-item list-group-item-action">
                                {{ $ticket->no_plat }} | {{ $ticket->created_at }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
</div>
<script>
var ctxMonthly = document.getElementById('monthlyTicketChart').getContext('2d');
var monthlyTicketChart = new Chart(ctxMonthly, {
    type: 'bar',
    data: {
        labels: [
            'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
        ],
        datasets: [{
            label: 'Monthly Tickets',
                data: {!! json_encode(array_values($monthlyTicketCounts)) !!},
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>


@endsection