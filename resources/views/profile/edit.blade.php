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
                                        <input type="text" name="nama" class="form-control" value="{{ old('name', $profile->nama) }}">
                                    </div>
                        
                                    @error('name')
                                        <div class="alert-danger"> {{ $message }}</div>
                                    @enderror
                        
                                    <div class="form-group mx-4 my-2">
                                        <label for="npm" class="text-md font-weight-bold">Kebun</label>
                                        <input type="text" name="kebun" class="form-control" value="{{ old('kebun', $profile->kebun) }}">
                                    </div>
                        
                                    @error('kebun')
                                        <div class="alert-danger"> {{ $message }}</div>
                                    @enderror
                        
                                    <div class="form-group mx-4 my-2">
                                        <label for="nama" class="text-md font-weight-bold">Luas Kebun</label>
                                        <input type="text" name="luas_kebun" class="form-control" value="{{ old('luas_kebun', $profile->luas_kebun) }}">
                                    </div>
                        
                                    @error('luas_kebun')
                                        <div class="alert-danger mx-2"> {{ $message }}</div>
                                    @enderror
                        
                                    <div class="form-group mx-4 my-2">
                                        <label for="nama" class="text-md font-weight-bold">No. Vak</label>
                                        <input type="text" name="no_vak" class="form-control" value="{{ old('no_vak', $profile->no_vak) }}">
                                    </div>
                        
                                    @error('no_vak')
                                        <div class="alert-danger"> {{ $message }}</div>
                                    @enderror
                        
                                    <div class="form-group mx-4 my-2">
                                        <label for="nama" class="text-md font-weight-bold">No. Kontrak</label>
                                        <input type="text" name="no_kontrak" class="form-control" value="{{ old('no_kontrak', $profile->no_kontrak) }}">
                                    </div>
                        
                                    @error('no_kontrak')
                                        <div class="alert-danger"> {{ $message }}</div>
                                    @enderror
                        
                                    <div class="form-group mx-4 my-2">
                                        <label for="nama" class="text-md font-weight-bold">Kategori</label>
                                        <input type="text" name="kategori" class="form-control" value="{{ old('kategori', $profile->kategori) }}">
                                    </div>
                        
                                    @error('kategori')
                                        <div class="alert-danger"> {{ $message }}</div>
                                    @enderror

                                    <div class="form-group mx-4 my-2">
                                        <label for="nama" class="text-md font-weight-bold">Kecamatan</label>
                                        <input type="text" name="kecamatan" class="form-control" value="{{ old('kecamatan', $profile->kecamatan) }}">
                                    </div>
                        
                                    @error('kecamatan')
                                        <div class="alert-danger"> {{ $message }}</div>
                                    @enderror

                                    <div class="form-group mx-4 my-2">
                                        <label for="nama" class="text-md font-weight-bold">Kota</label>
                                        <input type="text" name="kota" class="form-control" value="{{ old('kota', $profile->kota) }}">
                                    </div>
                        
                                    @error('kota')
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