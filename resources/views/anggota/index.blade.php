@extends('layout.aplikasi')
@section('title', 'Data Anggota | DashLoan')
@section('konten')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="page-title">Data Anggota</h6>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">DashLoan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Anggota</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalCreate">
                    + Tambah Data
                </button>
            </div>

            <div class="container">
                <div class="row pt-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
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
                                                    <a href="{{ url('anggota/'.$item->noVak) }}"
                                                         data-bs-toggle="modal" data-bs-target="#ModalEdit-{{ $item->noVak }}" class="btn btn-warning btn-sm">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <form onsubmit="return confirm('Yakin mau hapus data?')" class='d-inline' action="{{ 'anggota/'.$item->noVak }}" method='post'>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
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
                @include('anggota.create')
                @include('anggota.update')
@endsection