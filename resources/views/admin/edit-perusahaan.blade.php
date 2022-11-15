@extends('admin.template.layout')

@section('content')
    <div class="container-fluid">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Perusahaan</h6>
                </div>
                <div class="card-body">
                    <form action="/perusahaan/{{ $user->id }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                placeholder="Nama" value="{{ old('name', $user->name) }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror" id="kelas"
                                placeholder="Kelas" value="{{ old('kelas', $user->kelas) }}">
                            @error('kelas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="Alamat" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat"
                                placeholder="Alamat" value="{{ old('Alamat', $user->Alamat) }}">
                            @error('Alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="level" class="form-control @error('level') is-invalid @enderror" id="level"
                                placeholder="level" value="{{ old('level', $user->level) }}">
                            @error('level')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="Email" value="{{ old('email', $user->email) }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah"
                                placeholder="Sekolah" value="{{ old('asal_sekolah', $user->asal_sekolah) }}">
                            @error('asal_sekolah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="tempat_prakerin" class="form-control @error('tempat_prakerin') is-invalid @enderror" id="tempat_prakerin"
                                placeholder="Tempat Prakerin" value="{{ old('tempat_prakerin', $user->tempat_prakerin) }}">
                            @error('tempat_prakerin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="nama_guru" name="nama_guru" class="form-control @error('nama_guru') is-invalid @enderror" id="nama_guru"
                                placeholder="Nama Guru" value="{{ old('nama_guru', $user->nama_guru) }}">
                            @error('nama_guru')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="telepon" name="telepon" class="form-control @error('telepon') is-invalid @enderror" id="telepon"
                                placeholder="No Telepon" value="{{ old('telepon', $user->telepon) }}">
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
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </form>
                </div>
            </div>
    </div>
@endsection