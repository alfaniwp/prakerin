@extends('perusahaan.template.layout')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Laporan Logbook</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Foto Kegiatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($logbooks as $item)
                            <tr>
                                <td>{{ $item->nama}}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>@if ($item->image)<img src="{{ asset('storage/' . $item->image) }}" height="90">@endif</td>
                                <td>
                                    @if ($item->cekdudi == 'Belum di Setujui') 
                                    <form action="/logbookp/{{ $item->id }}" method="POST" class="d-inline">
                                        @method('put')
                                        @csrf
                                        <input type="hidden" name="nama" value="{{ $item->nama }}">
                                        <input type="hidden" name="tanggal" value="{{ $item->tanggal }}">
                                        <input type="hidden" name="keterangan" value="{{ $item->keterangan }}">
                                        <input type="hidden" name="image" value="{{ $item->image }}">
                                        <input type="hidden" name="nama_guru" value="{{ $item->nama_guru }}">
                                        <input type="hidden" name="tempat_prakerin" value="{{ $item->tempat_prakerin }}">
                                        <input type="hidden" name="cekdudi" value="Sudah di Setujui">

                                        <button type="submit" class="btn btn-primary">Approve</i></button>
                                    </form>
                                    @elseif($item->cekdudi == 'Sudah di Setujui')
                                    <button type="submit" class="btn btn-success">Approved</button>
                                    @endif

                                    <form action="/logbookp/{{ $item->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Yakin Delete Data?')"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection