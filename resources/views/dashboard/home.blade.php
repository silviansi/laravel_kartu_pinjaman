@extends('layout/aplikasi')
@section('title', 'Dashboard | DashLoan')
@section('konten')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="page-title">Dashboard</h6>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Selamat datang di Dashbord DashLoan</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->
                        
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-start mini-stat-img me-4">
                                    <img src="assets/images/services-icon/001.png" alt="mitra-petani">
                                </div>
                                <h5 class="font-size-16 text-uppercase text-white-50">Mitra Petani</h5>
                                <h4 class="fw-medium font-size-24">{{ $user_count }} </h4>
                            </div>
                            <div class="pt-2">
                                <div class="float-end">
                                    <a href="anggota" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-start mini-stat-img me-4">
                                    <img src="assets/images/services-icon/002.png" alt="pinjaman">
                                </div>
                                <h5 class="font-size-16 text-uppercase text-white-50">Transaksi Pinjaman</h5>
                                <h4 class="fw-medium font-size-24">{{ $pinjaman_count }} </h4>
                            </div>
                            <div class="pt-2">
                                <div class="float-end">
                                    <a href="pinjaman" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-start mini-stat-img me-4">
                                    <img src="assets/images/services-icon/003.png" alt="laporan-pabrikasi">
                                </div>
                                <h5 class="font-size-16 text-uppercase text-white-50">Laporan Harian</h5>
                                <h4 class="fw-medium font-size-24">{{ $pabrikasi_count }} </h4>
                            </div>
                            <div class="pt-2">
                                <div class="float-end">
                                    <a href="pabrikasi" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary text-white">
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="float-start mini-stat-img me-4">
                                    <img src="assets/images/services-icon/004.png" height="50" alt="tutupan">
                                </div>
                                <h5 class="font-size-16 text-uppercase text-white-50">Data Tutupan</h5>
                                <h4 class="fw-medium font-size-24">{{ $tutupan }}</h4>
                            </div>
                            <div class="pt-2">
                                <div class="float-end">
                                    <a href="tutupan" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
    
            <!-- start page content -->     
            <div class="row pt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="page-title-box">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h6 class="page-title">Jumlah Pinjaman 7 Hari Terakhir</h6>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 75%; margin: auto;">
                                <canvas id="pinjamanChart"></canvas>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const labels = {!! json_encode($dates->keys()) !!};
        const data = {
            labels: labels,
            datasets: [{
                label: 'Jumlah Pinjaman',
                data: {!! json_encode($dates->values()) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                fill: false,
                tension: 0.1
            }]
        };

        var ctx = document.getElementById('pinjamanChart').getContext('2d');
        var pinjamanChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endpush