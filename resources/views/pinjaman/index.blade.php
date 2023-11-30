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
                            <li class="breadcrumb-item active" aria-current="page">Data Pinjaman</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="col-md-2 mb-3">
                <a href=""
                    data-bs-toggle="modal" data-bs-target="#ModalEdit" class="btn btn-success btn-md">
                   + Tambah Data
               </a>
            </div>

            <!-- start page content -->     
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
                                                                    <th>Tanggal</th>
                                                                    <th>No. Bukti</th>
                                                                    <th>Jumlah Pinjaman</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($data as $item)
                                                                <tr>
                                                                    <td>{{ $item->user->profile->nama }}</td>
                                                                    <td>{{ $item->tanggal }}</td>
                                                                    <td>{{ $item->no_bukti }}</td>
                                                                    <td>{{ number_format($item->jumlah_pinjaman) }}</td>
                                                                    <td>
                                                                        <form onsubmit="return confirm('Yakin mau hapus data?')" class='d-inline' action="{{ 'pinjaman/'.$item->id }}" method='post'>
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                                        </form>
                                                                        @if ($item->status == 'pending')
                                                                            <a href="{{ route('pinjaman.approve',$item->id)}}" class="btn btn-success btn-sm">
                                                                               <i class="mdi mdi-check"></i>
                                                                           </a>
                                                                        </div>
                                                                        @endif
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
@include('pinjaman.edit')
@include('pinjaman.create')

@endsection