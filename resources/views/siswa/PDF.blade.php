<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
    padding-top: 12px;
    padding-bottom: 12px;
}

td {
    padding-top: 3px;
    padding-bottom: 3px;
}
h2, h4, h5 {
  line-height: 0px;
}

</style>
</head>
<body>
  <center class="mb-0">
    <h2>{{ auth()->user()->asal_sekolah }}</h2>
    <h4>{{ auth()->user()->alamat_sekolah}}</h4>
    <h5> Telp :{{ auth()->user()->telepon_sekolah}}  {{ auth()->user()->email_sekolah }}</h5>
  </center>
  <hr />
<div class="mb-0" style="line-height: 1px">
  <p>Nis : {{ auth()->user()->noinduk_siswa}}</p>
  <p>Nama Siswa : {{ auth()->user()->name}}</p>
  <p>Kelas : {{ auth()->user()->kelas}}</p>
</div>
<br>
<table>
  <tr>
    <th>Tanggal</th>
        <th>Keterangan</th>
        <th>Tanda Tangan</th>
  </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->tanggal }}</td>
        <td>{{ $item->keterangan }}</td>
        <td></td>
    </tr>
    @endforeach
</table>
<br>
<br>
<div style="width:200px;float:right">
  Banyuwangi, 22 Juli 2022
  <br/>Guru Pembimbing
  <br>
  <br>
  <p>{{auth()->user()->nama_guru}}<br/>NIP. {{ auth()->user()->noinduk_guru}}</p>
</div>

</body>
</html>