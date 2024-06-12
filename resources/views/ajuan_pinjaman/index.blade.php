@extends('layout/base')
@section('title', 'Detail Pinjaman | Website')
@section('konten')
    
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" style="padding-top: 50px">
        <div class="row">
            <div class="col-lg-12 flex-column justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Pinjaman Anda</h4>
                        <table style="width:100%; text-align:center">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>No. Bukti</th>
                                    <th>No. Kontrak</th>
                                    <th>Jumlah Pinjaman</th>
                                    <th>Uraian</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->no_bukti }}</td>
                                    <td>{{ $item->profile->no_kontrak }}</td>
                                    <td>{{ number_format($item->jumlah_pinjaman,0,'','.') }}</td>
                                    <td>{{ $item->uraian }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection