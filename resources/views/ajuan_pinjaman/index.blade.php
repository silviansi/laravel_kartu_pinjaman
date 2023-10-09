@extends('layout/depan')
@section('title', 'Detail Pinjaman | Website')
@section('konten')
    
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container" style="padding-top: 50px">
        <div class="row">
            <div class="col-lg-12 flex-column justify-content-center">
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

                            <h4 class="card-title">Daftar Pinjaman Anda</h4>

                            <div class="col-md-2 mb-3">
                                <a href="{{ url('ajuan_pinjaman/create') }}" class="btn btn-success btn-md active" role="button" aria-pressed="true">
                                    + Tambah Pinjaman
                                </a>
                            </div>
                            <table class="table">

                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>No. Bukti</th>
                                            <th>Jumlah Pinjaman</th>
                                            <th>Uraian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->tanggal }}</td>
                                                <td>{{ $item->no_bukti }}</td>
                                                <td>{{ $item->jumlah_pinjaman }}</td>
                                                <td>{{ $item->uraian }}</td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
          
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

    
@endsection