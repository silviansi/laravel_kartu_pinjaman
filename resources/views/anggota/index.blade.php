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
                                                <th>Nama Lengkap</th>
                                                <th>Kebun</th>
                                                <th>No. Vak</th>
                                                <th>No. Kontrak</th>
                                                <th>Kategori</th>
                                                <th>Kecamatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->kebun }}</td>
                                                <td>{{ $item->no_vak }}</td>
                                                <td>{{ $item->no_kontrak }}</td>
                                                <td>{{ $item->kategori }}</td>
                                                <td>{{ $item->kecamatan }}</td>
                                                <td>
                                                    <a href="{{ url('anggota/'.$item->id) }}"
                                                        data-bs-toggle="modal" data-bs-target="#ModalEdit-{{ $item->id }}" class="btn btn-warning btn-sm">
                                                       <i class="fas fa-pencil-alt"></i>
                                                   </a>
                                                    <form onsubmit="return confirm('Yakin mau hapus data?')" class='d-inline' action="{{ 'anggota/'.$item->id }}" method='post'>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                    <a href="{{ url('anggota/'.$item->user_id) }}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">
                                                        <i class="fas fa-print"></i>
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
                @include('anggota.update')
@endsection