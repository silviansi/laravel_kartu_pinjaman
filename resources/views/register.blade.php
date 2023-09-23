<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <title>Register | DashLoan - Admin & Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/logo-sm-cb.png">
    
    
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    
    </head>

    <body>
        <div class="account-pages my-5">
            <div class="container">
                @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
                
            @endif
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card overflow-hidden">
                            <div class="bg-primary">
                                <div class="text-primary text-center p-4">
                                    <h5 class="text-white font-size-20">Free Register</h5>
                                    <p class="text-white-50">Get your free DashLoan account now.</p>
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="assets/images/logo-sm-cb.png" height="32" alt="logo">
                                    </a>
                                </div>
                            </div>
    
                            <div class="card-body p-4">
                                <div class="p-3">
                                    <form class=" mt-4" action="" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="nama">Nama</label>
                                            <input type="text" name="name" value="{{ Session::get('name') }}" class="form-control" id="name" placeholder="Enter name">
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="text" name="email" value="{{ Session::get('email') }}" class="form-control" id="email" placeholder="Enter email">
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-12 text-end">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                                            </div>
                                        </div>
    
                                        <div class="mt-2 mb-0 row">
                                            <div class="col-12 mt-4">
                                                <p class="mb-0">By registering you agree to the DashLoan <a href="#" class="text-primary">Terms of Use</a></p>
                                            </div>
                                        </div>
    
                                    </form>
    
                                </div>
                            </div>
    
                        </div>
    
                        <div class="mt-5 text-center">
                            <p>Already have an account ? <a href="/login" class="fw-medium text-primary"> Login </a> </p>
                            <p>© <script>document.write(new Date().getFullYear())</script> DashLoan. Crafted with <i class="mdi mdi-heart text-danger"></i> by 20051204070</p>
                        </div>
    
    
                    </div>
                </div>
            </div>
        </div>

                <!-- JAVASCRIPT -->
                <script src="assets/libs/jquery/jquery.min.js"></script>
                <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="assets/libs/metismenu/metisMenu.min.js"></script>
                <script src="assets/libs/simplebar/simplebar.min.js"></script>
                <script src="assets/libs/node-waves/waves.min.js"></script>


        <script src="assets/js/app.js"></script>

    </body>
</html>
