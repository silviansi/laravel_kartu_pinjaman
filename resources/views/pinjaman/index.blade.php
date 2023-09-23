@extends('layout/aplikasi')
@section('title', 'Pinjaman | DashLoan')
@section('konten')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="page-title">Data Anggota Pinjaman</h6>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">DashLoan</a></li>
                            <li class="breadcrumb-item"><a href="#">Data Anggota</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Anggota Pinjaman</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- start page content -->      
                                    <div class="row pt-3">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <th>Kebun</th>
                                                                    <th>No. Vak</th>
                                                                    <th>Luas Baku</th>
                                                                    <th>No. Kontrak</th>
                                                                    <th>Kategori</th>
                                                                    <th>Periode</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($data as $item)
                                                                <tr>
                                                                    <td>{{ $item->nama }}</td>
                                                                    <td>{{ $item->kebun }}</td>
                                                                    <td>{{ $item->noVak }}</td>
                                                                    <td>{{ $item->luasBaku }}</td>
                                                                    <td>{{ $item->noKontrak }}</td>
                                                                    <td>{{ $item->kategori }}</td>
                                                                    <td>{{ $item->periode }}</td>
                                                                    <td>
                                                                        <a href="{{ url('pinjaman/'.$item->noVak) }}" class="btn btn-primary btn-md active" role="button" aria-disabled="true">
                                                                            <i class="ion ion-md-arrow-round-forward"></i>
                                                                        </a>
                                                                    </td>
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

@endsection