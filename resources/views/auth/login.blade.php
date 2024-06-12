@extends('layout.app')
@section('title', 'Login | DashLoan')
@section('konten')
    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-primary">
                            <div class="text-primary text-center p-4 pt-4">
                                <h5 class="text-white font-size-20">Welcome Back !</h5>
                                <p class="text-white-50">Sign in to continue to DashLoan.</p>
                                <a href="" class="logo logo-admin">
                                    <img src="/assets/images/logo-sm-cb.png" height="32" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <div class="p-3">
                                <form class="mt-4" action="" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="text" name="email" value="{{ Session::get('email') }}" class="form-control" id="email" placeholder="Enter email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-sm-12 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <p>Don't have an account ? <a href="/auth/register" class="fw-medium text-primary"> Signup now </a> </p>
                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> DashLoan. Crafted with <i class="mdi mdi-heart text-danger"></i> by IT Support Intern 2023</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    @if (session('success'))
    <script>
        Swal.fire({
            position: "top-end",
            title: "Sukses!",
            text: "{{ session('success') }}",
            icon: "success",
            showConfirmButton: false,
            timer: 2500,
            width: '300px'
        })
    </script>
    @endif
    @if (session('error'))
    <script>
        Swal.fire({
            title: "Error!",
            text: "{{ session('error') }}",
            icon: "error",
            showConfirmButton: false,
            timer: 2500,
            width: '300px'
        })
    </script>
    @endif
@endpush