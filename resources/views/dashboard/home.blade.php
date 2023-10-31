@extends('layout/aplikasi')
@section('title', 'Dashboard | DashLoan')
@section('konten')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Dashboard</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">Welcome to DashLoan Dashboard</li>
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
                                                <img src="assets/images/services-icon/001.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Anggota</h5>
                                            <h4 class="fw-medium font-size-24">{{ $user_count }} </h4>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="anggota" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="assets/images/services-icon/002.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Pinjaman</h5>
                                            <h4 class="fw-medium font-size-24">{{ $pinjaman_count }} </h4>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="pinjaman" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="assets/images/services-icon/003.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Pabrikasi</h5>
                                            <h4 class="fw-medium font-size-24">{{ $pabrikasi_count }} </h4>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="pabrikasi" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="assets/images/services-icon/004.png" height="50" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Tutupan</h5>
                                            <h4 class="fw-medium font-size-24">{{ $tutupan }}</h4>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="tutupan" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1">Since last month</p>
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

                                        <!-- start page title -->
                                        <div class="page-title-box">
                                            <div class="row align-items-center">
                                                <div class="col-md-8">
                                                    <h6 class="page-title">Data Pinjaman</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end page title -->

                                        <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead style="background-color: #626ed4; color: white; text-align:center">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama</th>
                                                        <th>Tanggal</th>
                                                        <th>No. Bukti</th>
                                                        <th>Jumlah Pinjaman</th>
                                                        <th>Uraian</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                    <tr>
                                                        <td style="text-align: center">{{ $loop->iteration }}
                                                        <td>{{ $item->user->profile->nama }}</td>
                                                        <td>{{ $item->tanggal }}</td>
                                                        <td>{{ $item->no_bukti }}</td>
                                                        <td>{{ number_format($item->jumlah_pinjaman) }}</td>
                                                        <td width="180px">{{ $item->uraian }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
    
                                    </div>
                                </div>
                            </div> <!-- end col -->
                    </div>
<!-- End Page-content -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
@endsection