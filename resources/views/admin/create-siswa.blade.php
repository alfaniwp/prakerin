@extends('admin.template.layout')

@section('content')
    <div class="container-fluid">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Siswa</h6>
                </div>
                <div class="card-body">
                    <form action="/siswa" method="POST" enctype="multipart/form-data">
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
                            <input type="text" name="noinduk_siswa" class="form-control @error('noinduk_siswa') is-invalid @enderror" id="noinduk_siswa"
                                placeholder="No Induk Siswa" value="{{ old('noinduk_siswa') }}">
                            @error('noinduk_siswa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" id="kelas"
                                placeholder="Kelas" value="{{ old('kelas') }}">
                            @error('kelas')
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
                            <input type="text" name="level" class="form-control @error('level') is-invalid @enderror" id="level"
                                placeholder="level" value="{{ old('level') }}">
                            @error('level')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>    
                            @enderror
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
                        <input type="hidden" name="email_sekolah" value="{{ auth()->user()->email }}">
                        <div class="form-group">
                            <input type="text" name="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah"
                                placeholder="Sekolah" value="{{ old('asal_sekolah') }}">
                            @error('asal_sekolah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <input type="hidden" name="alamat_sekolah" value="{{ auth()->user()->Alamat }}">
                        <div class="form-group">
                            <input type="text" name="tempat_prakerin" class="form-control @error('tempat_prakerin') is-invalid @enderror" id="tempat_prakerin"
                                placeholder="Tempat Prakerin" value="{{ old('tempat_prakerin') }}">
                            @error('tempat_prakerin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="nama_guru" name="nama_guru" class="form-control @error('nama_guru') is-invalid @enderror" id="nama_guru"
                                placeholder="Nama Guru" value="{{ old('nama_guru') }}">
                            @error('nama_guru')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="noinduk_guru" name="noinduk_guru" class="form-control @error('noinduk_guru') is-invalid @enderror" id="noinduk_guru"
                                placeholder="No Guru" value="{{ old('noinduk_guru') }}">
                            @error('noinduk_guru')
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
                            <input type="hidden" name="telepon_sekolah" value="{{ auth()->user()->telepon }}">
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

                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
    </div>
@endsection