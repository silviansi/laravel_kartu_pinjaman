@extends('layout.aplikasi')
@section('title', 'Data Mitra Petani | DashLoan')
@section('konten')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="page-title">Data Mitra</h6>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">DashLoan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Mitra</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="col-md-3 mb-3">
                <a href=""
                    data-bs-toggle="modal" data-bs-target="#ModalEdit" class="btn btn-success btn-md">+ Tambah Informasi Mitra
                </a>
            </div>

            <div class="container">
                <div class="row pt-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Kebun</th>
                                            <th>No. Kontrak</th>
                                            <th>Kecamatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($profile as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->user->nama }}</td>
                                            <td>{{ $item->kebun }}</td>
                                            <td>{{ $item->no_kontrak }}</td>
                                            <td>{{ $item->kecamatan }}</td>
                                            <td>
                                                <a href="{{ url('anggota/'.$item->id) }}"
                                                    data-bs-toggle="modal" data-bs-target="#ModalEdit-{{ $item->id }}" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <button class="btn btn-danger btn-sm delete-btn" data-id="{{ $item->id }}"><i class="fas fa-trash-alt"></i></button>
                                                <form id="delete-form-{{ $item->id }}" action="{{ route('anggota.destroy', $item->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <a href="{{ url('anggota', $item->user->id) }}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">
                                                    <i class="fas fa-print"></i>
                                                </a>
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
</div>
@include('anggota.update')
@include('anggota.create')
@endsection

@push('script')
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            "language" : {
                "url" : "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Indonesian.json"
            }
        });

        $('.delete-btn').on('click', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            Swal.fire({
                title: 'Yakin mau hapus data?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete-form-' + id).submit();
                }
            });
        });
    });
</script>

@if (session('success'))
<script>
    Swal.fire({
        title: "Sukses!",
        text: "{{ session('success') }}",
        icon: "success"
    })
</script>
@endif
@if (session('error'))
<script>
    Swal.fire({
        title: "Error!",
        text: "{{ session('error') }}",
        icon: "error",
    })
</script>
@endif
@endpush