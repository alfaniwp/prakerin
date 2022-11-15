<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-5">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="/register" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                        placeholder="Nama" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Alamat" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat"
                                        placeholder="Alamat" value="{{ old('Alamat') }}">
                                    @error('Alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="level" id="level">
                                        <option selected>Registrasi as</option>
                                        <option value="admin">Sekolah</option>
                                        <option value="instansi">Instansi</option>
                                      </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder="Email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="pimpinan_dudi" class="form-control @error('pimpinan_dudi') is-invalid @enderror" id="pimpinan_dudi"
                                        placeholder="Nama Pimpinan DUDI" value="{{ old('pimpinan_dudi') }}">
                                    @error('pimpinan_dudi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="pembimbing_dudi" class="form-control @error('pembimbing_dudi') is-invalid @enderror" id="pembimbing_dudi"
                                        placeholder="Nama Pembimbing DUDI" value="{{ old('pembimbing_dudi') }}">
                                    @error('pembimbing_dudi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="bidang_usaha" class="form-control @error('bidang_usaha') is-invalid @enderror" id="bidang_usaha"
                                        placeholder="Bidang Usaha" value="{{ old('bidang_usaha') }}">
                                    @error('bidang_usaha')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>   
                                <div class="form-group">
                                    <input type="telepon" name="telepon" class="form-control @error('telepon') is-invalid @enderror" id="telepon"
                                        placeholder="No Telepon" value="{{ old('telepon') }}">
                                    @error('telepon')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password"
                                        placeholder="Password" value="{{ old('password') }}">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>
                                <div class="mb-3 d-inline">
                                    <label for="image" class="form-label">Foto :</label>
                                    <input type="file" name="image" id="image">
                                </div>
                                <button class="btn btn-primary btn-user btn-block">Register Account</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>