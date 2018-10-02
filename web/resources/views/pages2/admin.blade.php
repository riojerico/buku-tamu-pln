@extends('layouts.master2')
@section('title')
  <div class="title">
      <h2>Halaman Administrator</h2>
  </div>
@endsection

@section('menu')
  <nav class="navbar navbar-danger">
@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('content')
  <div class="">
    <div class="col-sm-12">
      <form class="" action="{{ url('/pdf-bt') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group label-static col-sm-3">
          <label class="control-label">Tanggal Awal</label>
          <input type="text" class="datepicker form-control" name="tgl_awal" value="{{date("m/d/Y")}}" />
        </div>
        <div class="form-group label-static col-sm-3">
          <label class="control-label">Tanggal Akhir</label>
          <input type="text" class="datepicker form-control" name="tgl_akhir" value="{{date("m/d/Y")}}" />
        </div>

        <div class="col-sm-6">
          <button type="submit" name="button" class="btn btn-danger">Cetak Laporan PDF</button>
        </div>
      </form>
    </div>

    <br>
    <br>
    <br>
<hr>

<h3>Riwayat Buku Tamu</h3>
<div class="scrollmenu">

    <table class="table" id="table" border="1">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Instansi</th>
          <th>Keperluan</th>
          <th>NOPOL</th>
          <th>Petugas</th>
          <th>Pegawai</th>
          <th>Masuk</th>
          <th>Keluar</th>
          <th>Tanggal</th>
        </tr>
      </thead>

      <tbody>


        @foreach ($data as $index => $datas)
        <tr>
          <td>{{ $index+1 }}</td>
          <td>{{ $datas->nama }}</td>
          <td>{{ $datas->instansi }}</td>
          <td>{{ $datas->keperluan }}</td>
          <td>{{ $datas->nopol }}</td>
          <td>{{ $datas->petugas }}</td>
          <td>{{ $datas->pegawai }}</td>
          <td>{{ $datas->masuk }}</td>
          <td>{{ $datas->keluar }}</td>
          <td>{{ $datas->tanggal }}</td>
        </tr>
        @endforeach

      </tbody>
    </table>

  </div>

  </div>

@endsection

@section('script')

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable();
  } );
  </script>
@endsection
