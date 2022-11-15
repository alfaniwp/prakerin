@extends('siswa.template.layout')

@section('content')
    <div class="container-fluid">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Logbook</h6>
                </div>
                <div class="card-body">
                    <form action="/laporanlogbook/{{ $logbook->id }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal', $logbook->tanggal) }}">
                            @error('tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan :</label>
                            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ old('keterangan', $logbook->keterangan) }}">
                            @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Foto Kegiatan :</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Logbook</button>
                    </form>
                </div>
            </div>
    </div>
@endsection