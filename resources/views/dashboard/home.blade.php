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
                                            <h4 class="fw-medium font-size-24">1,685 <i
                                                    class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
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
                                            <h4 class="fw-medium font-size-24">52,368 <i
                                                    class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
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
                                            <h5 class="font-size-16 text-uppercase text-white-50">Anggaran</h5>
                                            <h4 class="fw-medium font-size-24">152,368 <i
                                                    class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
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
                                            <h5 class="font-size-16 text-uppercase text-white-50">Denda</h5>
                                            <h4 class="fw-medium font-size-24">2,368 <i
                                                    class="mdi mdi-arrow-down text-danger ms-2"></i></h4>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Monthly Earning</h4>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div>
                                                    <div id="chart-with-area" class="ct-chart earning ct-golden-section">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="text-center">
                                                            <p class="text-muted mb-4">This month</p>
                                                            <h3>$34,252</h3>
                                                            <p class="text-muted mb-5">It will be as simple as in fact it
                                                                will be occidental.</p>
                                                            <span class="peity-donut"
                                                                data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                                                data-width="72" data-height="72">4/5</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-center">
                                                            <p class="text-muted mb-4">Last month</p>
                                                            <h3>$36,253</h3>
                                                            <p class="text-muted mb-5">It will be as simple as in fact it
                                                                will be occidental.</p>
                                                            <span class="peity-donut"
                                                                data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                                                data-width="72" data-height="72">3/5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>

                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <h4 class="card-title mb-4">Sales Analytics</h4>
                                        </div>
                                        <div class="wid-peity mb-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <p class="text-muted">Online</p>
                                                        <h5 class="mb-4">1,542</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <span class="peity-line" data-width="100%"
                                                            data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}'
                                                            data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wid-peity mb-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <p class="text-muted">Offline</p>
                                                        <h5 class="mb-4">6,451</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <span class="peity-line" data-width="100%"
                                                            data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}'
                                                            data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <p class="text-muted">Marketing</p>
                                                        <h5>84,574</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <span class="peity-line" data-width="100%"
                                                            data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}'
                                                            data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
@endsection