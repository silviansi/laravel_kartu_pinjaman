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
                                <a href="{{ url('ajuan_pinjaman/create') }}" class="btn btn-success btn-sm" tabindex="-1" role="button" aria-disabled="true">+ Tambah</a>
                            </div>
                              
                            <table style="width:100%; text-align:center">
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
                                                <td>{{ number_format($item->jumlah_pinjaman,0,'','.') }}</td>
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