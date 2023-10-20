@extends('layout/depan')
@section('title', 'Profile | Website')
@section('konten')
<div class="main-content">

    <div class="page-content">
        <div class="container">
        <div class="row pt-4 mb-5">
            <div class="col-lg-12">
                <div class="card" style="margin-top:120px">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Profil Anda</h4>
                        <img src="/assets/images/avatar-img.png" alt="Avatar" class="avatar">
                        <div class="body-profile">
                          <div class="container">
                                    <div class="row">
                                      <div class="col-5">
                                        Nama Lengkap
                                      </div>
                                      <div class="col-2">
                                        :
                                      </div>
                                      <div class="col-5">
                                        {{ $profile->nama }}
                                      </div>
                                    </div>
                          </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-5">
                                        Kebun
                                      </div>
                                      <div class="col-2">
                                        :
                                      </div>
                                      <div class="col-5">
                                        {{ $profile->kebun }}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-5">
                                        Luas Kebun
                                      </div>
                                      <div class="col-2">
                                        :
                                      </div>
                                      <div class="col-5">
                                        {{ $profile->luas_kebun }}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-5">
                                        Kecamatan
                                      </div>
                                      <div class="col-2">
                                        :
                                      </div>
                                      <div class="col-5">
                                        {{ $profile->kecamatan }}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-5">
                                        Kota
                                      </div>
                                      <div class="col-2">
                                        :
                                      </div>
                                      <div class="col-5">
                                        {{ $profile->kota }}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-5">
                                        No. Vak
                                      </div>
                                      <div class="col-2">
                                        :
                                      </div>
                                      <div class="col-5">
                                        {{ $profile->no_vak }}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-5">
                                        No. Kontrak
                                      </div>
                                      <div class="col-2">
                                        :
                                      </div>
                                      <div class="col-5">
                                        {{ $profile->no_kontrak }}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-5">
                                        Kategori
                                      </div>
                                      <div class="col-2">
                                        :
                                      </div>
                                      <div class="col-5">
                                        {{ $profile->kategori }}
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="edit d-flex justify-content-end my-4 mx-4">
                            <a href="/profile/{{ $profile->id }}/edit" class="btn btn-primary px-5">Edit Profile</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
@endsection