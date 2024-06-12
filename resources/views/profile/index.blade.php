@extends('layout/base')
@section('title', 'Profile | Website')
@section('konten')
<div class="main-content">

    <div class="page-content">
        <div class="container">
        <div class="row pt-4 mb-5 d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card" style="margin-top:120px">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Profil Anda</h4>
                        <img src="/assets/images/avatar-img.png" alt="Avatar" class="avatar">
                        <div class="body-profile">
                          <div class="container">
                            <div class="row">
                              <div class="col-5">Nama Lengkap</div>
                              <div class="col-2">:</div>
                              <div class="col-5">{{ $user->nama }}</div>
                            </div>
                          </div>
                          <div class="container">
                            <div class="row">
                              <div class="col-5">Email</div>
                              <div class="col-2">:</div>
                              <div class="col-5">{{ $user->email }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="edit d-flex justify-content-end my-4 mx-4">
                          <a href="/profile/{{ $user->id }}/edit" class="btn btn-primary px-5">Edit Profile</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div> 
@endsection