@extends('siswa.template.layout')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Laporan Logbook</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    
                        <a href="/exportpdf" class="btn btn-success mb-3">Export PDF</a>
                    
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Foto Kegiatan</th>
                                <th>Approve Guru</th>
                                <th>Approve DU/DI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($logbooks as $item)
                            <tr>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>@if ($item->image)<img src="{{ asset('storage/' . $item->image) }}" height="100">@endif</td>
                                <td>{{ $item->cekguru }}</td>
                                <td>{{ $item->cekdudi }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection