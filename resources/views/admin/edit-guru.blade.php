@extends('admin.template.layout')

@section('content')
    <div class="container-fluid">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Guru</h6>
                </div>
                <div class="card-body">
                    <form action="/guru/{{ $user->id }}" method="POST" enctype="multipart/form-data">
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
                            <input type="text" name="noinduk_guru" class="form-control @error('noinduk_guru') is-invalid @enderror" id="noinduk_guru"
                                placeholder="No Induk Guru" value="{{ old('noinduk_guru', $user->noinduk_guru) }}">
                            @error('noinduk_guru')
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
                                placeholder="Status" value="{{ old('level', $user->level) }}">
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
                            <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"
                                placeholder="Asal Sekolah" value="{{ old('jabatan', $user->jabatan) }}">
                            @error('jabatan')
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
                        <div class="mb-3 d-inline">
                            <label for="image" class="form-label">Foto :</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </form>
                </div>
            </div>
    </div>
@endsection