@extends('layout/aplikasi')
@section('title', 'Laporan Pabrikasi | DashLoan')
@section('konten')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="page-title">Data Laporan Harian</h6>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">DashLoan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Laporan Harian</li>
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

            <div class="row pt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if (Session::has('message'))
                                <div class="alert alert-danger">
                                    {{ Session::get('message') }}
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
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tebu Giling</th>
                                        <th>Rendemen Petani</th>
                                        <th>Gula Petani</th>
                                        <th>Tetes Petani</th>
                                        <th>Gula Masuk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user->nama }}</td>
                                        <td>{{ $item->tebu_giling }}</td>
                                        <td>{{ $item->rendemen_petani }}</td>
                                        <td>{{ $item->gula_petani }}</td>
                                        <td>{{ $item->tetes_petani }}</td>
                                        <td>{{ $item->gula_masuk }}</td>

                                        <td>
                                            <a href="{{ url('pabrikasi/'.$item->id) }}"
                                                data-bs-toggle="modal" data-bs-target="#ModalEditPabrikasi-{{ $item->id }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form onsubmit="return confirm('Yakin mau hapus data?')" class='d-inline' action="{{ 'pabrikasi/'.$item->id }}" method='post'>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>     
@include('pabrikasi.create')
@include('pabrikasi.edit')
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "language" : {
                    "url" : "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Indonesian.json"
                }
            });
        });
    </script>
@endpush