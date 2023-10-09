@extends('layout/depan')
@section('title', 'Daftar Pinjaman | Website')
@section('konten')
     <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" style="padding-top: 50px">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column justify-content-center">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title mb-5">Daftar Pinjaman Anda</h4>

                            

                            {{-- <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Kebun</th>
                                        <th>Luas Baku</th>
                                        <th>No. Vak</th>
                                        <th>No. Kontrak</th>
                                        <th>Kategori</th>
                                        <th>Kecamatan</th>
                                        <th>Kota</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->kebun }}</td>
                                        <td>{{ $item->no_vak }}</td>
                                        <td>{{ $item->luas_baku }}</td>
                                        <td>{{ $item->no_kontrak }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>{{ $item->kecamatan }}</td>
                                        <td>{{ $item->kota }}</td>
                                        <td>
                                            <a href="{{ url('pinjaman_user/'.$item->id) }}" class="btn btn-primary btn-md active" role="button" aria-disabled="true">
                                                <i class="ion ion-md-arrow-round-forward"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}
                            
                            {{-- <table class="table">

                                <thead>
                                    <tr class="text-center">
                                        <th rowspan="2">TANGGAL</th>
                                        <th rowspan="2">NO. BUKTI</th>
                                        <th rowspan="2">URAIAN</th>
                                        <th colspan="2">MUTASI</th>
                                        <th rowspan="2">Jlm S / D</th>
                                        <th rowspan="2">KETERANGAN <br>(Sisa Pinjaman)</th>
                                    </tr>
                                    <tr>
                                        <th>DEBET</th>
                                        <th>KREDIT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>06/03/2023</td>
                                        <td>KSB230306060</td>
                                        <td>garapan 2023-03</td>
                                        <td>71,932,320</td>
                                        <td>0</td>
                                        <td>71,932,320</td>
                                    </tr>
                                    <tr>
                                        <td>26/04/2023</td>
                                        <td>KSB230426260</td>
                                        <td>notaris 2023-04</td>
                                        <td>80,000</td>
                                        <td>0</td>
                                        <td>72,012,320</td>
                                    </tr>
                                    <tr>
                                        <th colspan="6">JUMLAH :</th>
                                    </tr>
                                </tbody>
                            </table> --}}
                    

                    </div>
                </div>
            </div>
        </div>
      </div>

  </section><!-- End Hero -->
@endsection