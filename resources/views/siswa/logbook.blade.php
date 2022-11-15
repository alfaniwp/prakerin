@extends('siswa.template.layout')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Logbook</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="/logbook" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="nama" value="{{ Auth::user()->name }}">
                    <input type="hidden" name="nama_guru" value="{{ Auth::user()->nama_guru }}">
                    <input type="hidden" name="tempat_prakerin" value="{{ Auth::user()->tempat_prakerin }}">
                    <input type="hidden" id="postId" name="cekguru" value="Belum di Setujui">
                    <input type="hidden" id="postId" name="cekdudi" value="Belum di Setujui">
                    
                    <div class="mb-3 d-inline">
                        <label for="tanggal" class="col-form-label">Tanggal : </label>
                        <input type="date" class="col-form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                        @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 d-inline">
                        <label for="image" class="form-label">Foto Kegiatan :</label>
                        <input type="file" name="image" id="image">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="col-form-label">Keterangan :</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ old('keterangan') }}">
                        @error('keterangan')
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

