@extends('layout/depan')
@section('title', 'Pinjaman | Website')
@section('konten')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" style="padding-top: 50px">
        <div class="row">
            <div class="col-lg-12 flex-column justify-content-center">
                    <div class="card">
                        <div class="card-body">

                                <h4 class="card-title">Isi Data Pinjaman</h4>
                                <p class="card-title-desc text-center">Harap mengisi form dengan keterangan yang jelas dan benar</p>
    
                                <form action="{{ url('ajuan_pinjaman') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal</label>
                                            <input placeholder="Select your date" type="text" name="tanggal" id="tanggal" value="" class="form-control"></i>
                                        </div>
    
                                    <div class="mb-3">
                                        <label class="form-label">No. Bukti</label>
                                        <input type="text" class="form-control" name="no_bukti" id="no_bukti">
                                    </div>
    
                                    <div class="mb-3">
                                        <label class="form-label">Jumlah Pinjaman</label>
                                        <input type="text" class="form-control" name="jumlah_pinjaman" id="jumlah_pinjaman">
                                    </div>
    
                                    <div class="mb-3">
                                        <label class="form-label">Uraian</label>
                                        <textarea id="uraian" class="form-control" name="uraian" ></textarea>
                                    </div>
                                    
                                    <div class="text-end">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>

                        </div>
                    </div>
                </div> <!-- end col -->

  </section><!-- End Hero -->

@endsection