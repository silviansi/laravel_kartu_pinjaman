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
                        <h4 class="card-title">Profil Anda</h4>
                        <img src="/assets/images/avatar-img.png" alt="Avatar" class="avatar">
                        <div class="body-profile">
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
                            <div class="col-auto mx-4">
                                <div class="container">
                                    <div class="row">
                                      <div class="col">
                                        Nama Lengkap
                                      </div>
                                      <div class="col">
                                        :
                                      </div>
                                      <div class="col">
                                        {{ $profile->nama }}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col">
                                        Kebun
                                      </div>
                                      <div class="col">
                                        :
                                      </div>
                                      <div class="col">
                                        {{ $profile->kebun }}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col">
                                        Luas Kebun
                                      </div>
                                      <div class="col">
                                        :
                                      </div>
                                      <div class="col">
                                        {{ $profile->luas_kebun }}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col">
                                        No. Vak
                                      </div>
                                      <div class="col">
                                        :
                                      </div>
                                      <div class="col">
                                        {{ $profile->no_vak }}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col">
                                        No. Kontrak
                                      </div>
                                      <div class="col">
                                        :
                                      </div>
                                      <div class="col">
                                        {{ $profile->no_kontrak }}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col">
                                        Kategori
                                      </div>
                                      <div class="col">
                                        :
                                      </div>
                                      <div class="col">
                                        {{ $profile->kategori }}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col">
                                        Kecamatan
                                      </div>
                                      <div class="col">
                                        :
                                      </div>
                                      <div class="col">
                                        {{ $profile->kecamatan }}
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="col">
                                        Kota
                                      </div>
                                      <div class="col">
                                        :
                                      </div>
                                      <div class="col">
                                        {{ $profile->kota }}
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