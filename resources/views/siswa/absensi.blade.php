@extends('siswa.template.layout')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Absensi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="/absensi" method="POST">
                    @csrf
                    <input type="hidden" name="nama" value="{{ Auth::user()->name }}">
                    <input type="hidden" name="nama_guru" value="{{ Auth::user()->nama_guru }}">
                    <input type="hidden" name="tempat_prakerin" value="{{ Auth::user()->tempat_prakerin }}">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                        @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-check mb-3">
                        <input type="radio" class="form-check-input @error('daftar_hadir') is-invalid @enderror" name="daftar_hadir" id="daftar_hadir" value="hadir" {{ old('daftar_hadir') == 'Hadir' ? 'checked' : '' }} >
                        <label for="daftar_hadir" class="form-check-label">Hadir</label>
                    </div>
                    <div class="form-check mb-3">
                        <input type="radio" class="form-check-input @error('daftar_hadir') is-invalid @enderror" name="daftar_hadir" id="daftar_hadir" value="ijin" {{ old('daftar_hadir') == 'Ijin' ? 'checked' : '' }} >
                        <label for="daftar_hadir" class="form-check-label">Ijin</label>
                        @error('daftar_hadir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

