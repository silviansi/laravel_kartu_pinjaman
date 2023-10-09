<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <title>Data Pinjaman | DashLoan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/logo-sm-cb.png">
    
        <link href="/assets/libs/chartist/chartist.min.css" rel="stylesheet">
    
        <!-- Bootstrap Css -->
        <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    
    </head>

    <div class="page-content">

            <!-- start page title -->
            <div class="container">
                        <div class="row align-item-center">
                        <div class="col-md-10 mb-3">
                            <h5 class="card-title">Form Tambah Pinjaman</h5>
                        </div>
                        <div class="col-md-2 mb-3">
                            <a href="{{ url('/pinjaman') }}" class="btn btn-danger btn-md active" role="button" aria-pressed="true">
                                <i class="ion ion-md-backspace"></i> Kembali
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-body">
                            <div class="row mb-3">
                                <h4 class="card-title"><i class="dripicons-document"></i>  Data Anggota</h6>
                                <form action="{{ url('pinjaman/'.$data->noVak) }}" method="POST">
                                    <div class="row">
                                    <h6 class="col-sm-2">Nama</h6>
                                    <div class="col-sm-4">: {{ $data->nama }}</div>
                                    <h6 class="col-sm-2">Kebun</h6>
                                    <div class="col-sm-4">: {{ $data->kebun }}</div>
                                    <h6 class="col-sm-2">No. Vak</h6>
                                    <div class="col-sm-4">: {{ $data->no_vak }}</div>
                                    <h6 class="col-sm-2">Luas Baku</h6>
                                    <div class="col-sm-4">: {{ $data->luas_baku }}</div>
                                    <h6 class="col-sm-2">No. Kontrak</h6>
                                    <div class="col-sm-4">: {{ $data->no_kontrak }}</div>
                                    <h6 class="col-sm-2">Kategori</h6>
                                    <div class="col-sm-4">: {{ $data->kategori }}</div>
                                    </div>
                                </form>
                            </div>

                            <button type="button" class="btn btn-success" 
                                    data-bs-toggle="modal" data-bs-target="#ModalCreatePinjaman">
                                    <i class="ion ion-md-add-circle"></i>  Tambah </button>
                                <a href="" class="btn btn-primary btn-md active" role="button" aria-pressed="true">
                                    <i class="fas fa-print"></i> Cetak Kartu</a>
                        </div>
                    </div>
                </div>

            @include('pinjaman.create') 

            <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="dripicons-document"></i>  Daftar Pinjaman</h4>
                            
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                                    
                                @endif
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                        @foreach ($errors->all() as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                        </ul>
                                    </div>
    
                                @endif
                            <table class="table">

                                <thead>
                                    <tr class="text-center">
                                        <th rowspan="2">TANGGAL</th>
                                        <th rowspan="2">NO. BUKTI</th>
                                        <th rowspan="2">URAIAN</th>
                                        <th colspan="2">MUTASI</th>
                                        <th rowspan="2">Jlm S / D</th>
                                        <th rowspan="2">KETERANGAN <br>(Sisa Pinjaman)</th>
                                    </tr>
                                    <tr>
                                        <th>DEBET</th>
                                        <th>KREDIT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>06/03/2023</td>
                                        <td>KSB230306060</td>
                                        <td>garapan 2023-03</td>
                                        <td>71,932,320</td>
                                        <td>0</td>
                                        <td>71,932,320</td>
                                    </tr>
                                    <tr>
                                        <td>26/04/2023</td>
                                        <td>KSB230426260</td>
                                        <td>notaris 2023-04</td>
                                        <td>80,000</td>
                                        <td>0</td>
                                        <td>72,012,320</td>
                                    </tr>
                                    <tr>
                                        <th colspan="6">JUMLAH :</th>
                                    </tr>
                                </tbody>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>    
</div>


<!-- JAVASCRIPT -->
<script src="/assets/libs/jquery/jquery.min.js"></script>
<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/assets/libs/node-waves/waves.min.js"></script>


<!-- Peity chart-->
<script src="/assets/libs/peity/jquery.peity.min.js"></script>

<script src="/assets/js/pages/dashboard.init.js"></script>
<script src="/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/assets/js/pages/form-advanced.init.js"></script>
<script src="/assets/js/app.js"></script>
</body>

</html>