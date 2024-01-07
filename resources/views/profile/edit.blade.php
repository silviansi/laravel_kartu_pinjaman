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
                            <form action="/profile/{{$profile->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                        
                                    <div class="form-group mx-4 my-2">
                                        <label for="nama" class="text-md font-weight-bold mt-2">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" value="{{ old('nama', $profile->user->nama) }}">
                                    </div>
                        
                                    @error('name')
                                        <div class="alert-danger"> {{ $message }}</div>
                                    @enderror
                        
                                    <div class="form-group mx-4 my-2">
                                        <label for="username" class="text-md font-weight-bold">Username</label>
                                        <input type="text" name="username" class="form-control" value="{{ old('username', $profile->user->username) }}">
                                    </div>
                        
                                    @error('username')
                                        <div class="alert-danger"> {{ $message }}</div>
                                    @enderror
                        
                                    <div class="button-save d-flex justify-content-end">
                                        <a href="/profile" class="btn btn-danger mt-4 py-1 px-4">Batal</a>
                                        <button type="submit"class="btn btn-primary mt-4 mx-2 px-5 py-1">Simpan</button>
                            </form>
                    </div>
                </div>
            </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
@endsection