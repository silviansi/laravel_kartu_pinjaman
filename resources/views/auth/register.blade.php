@extends('layout.app')
@section('title', 'Register | DashLoan')
@section('konten')
<div class="account-pages my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="bg-primary">
                        <div class="text-primary text-center p-4">
                            <h5 class="text-white font-size-20">Daftar Gratis</h5>
                            <p class="text-white-50">Dapatkan akun DashLoan gratis sekarang.</p>
                            <a href="register" class="logo logo-admin">
                                <img src="/assets/images/logo-sm-cb.png" height="32" alt="logo">
                            </a>
                        </div>
                    </div>
    
                    <div class="card-body p-4">
                        <div class="p-3">
                            <form class=" mt-4" action="" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="text" name="email" value="{{ Session::get('email') }}" class="form-control" id="email" placeholder="Masukkan email">
                                </div>
    
                                <div class="mb-3">
                                    <label class="form-label" for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama" value="{{ Session::get('nama') }}" class="form-control" id="nama" placeholder="Masukkan nama lengkap">
                                </div>
    
                                <div class="mb-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password">
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Daftar</button>
                                    </div>
                                </div>
    
                                <div class="mt-2 mb-0 row">
                                    <div class="col-12 mt-4">
                                        <p class="mb-0">Dengan mendaftar, Anda menyetujui Ketentuan Penggunaan DashLoan</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p>Sudah punya akun ? <a href="/auth/login" class="fw-medium text-primary"> Masuk </a> </p>
                    <p>© <script>document.write(new Date().getFullYear())</script> DashLoan. Crafted with <i class="mdi mdi-heart text-danger"></i> by IT Support Intern 2023</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection