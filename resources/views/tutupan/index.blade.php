@extends('layout/aplikasi')
@section('title', 'Data Tutupan | DashLoan')
@section('konten')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="page-title">Data Tutupan</h6>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">DashLoan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Tutupan</li>
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
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>No. Bukti</th>
                                        <th>Jumlah Tutupan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}
                                        <td>{{ $item->user->nama }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->no_bukti }}</td>
                                        <td>{{ number_format($item->jumlah_tutupan) }}</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm delete-btn" data-id="{{ $item->id }}"><i class="fas fa-trash-alt"></i></button>
                                                <form id="delete-form-{{ $item->id }}" action="{{ route('tutupan.destroy', $item->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
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

@include('tutupan.create')
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