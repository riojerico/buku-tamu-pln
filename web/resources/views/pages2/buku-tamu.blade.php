@extends('layouts.master2')

@section('title')
  <div class="title">
      <h2>Buku Tamu & Working Permit</h2>
  </div>
@endsection

@section('menu')
  <nav class="navbar navbar-info">
@endsection

@section('menu-admin')
  @if (Auth::user())
     <a href="{{ url('/administrator') }}" type="button" class="navbar-brand " name="button"> >> Halaman Administrator</a>
  @endif
@endsection

@section('content')
  <div class="tab-pane active" id="home">
    @include('layouts.notif')
    <form class="" action="{{ url('/buku-tamu') }}" method="post">
      {{ csrf_field() }}
    <div class="row">
      <div class="col-sm-6">
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="nama" value="" placeholder="Nama" class="form-control" required/>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <select class="form-control" name="alamat" required>
              <option value="">- Instansi -</option>
              @foreach ($vendor as $vendors)
                <option value="{{ $vendors->id }}">{{ $vendors->perusahaan }}</option>
              @endforeach
              <option value=""></option>
            </select>

          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="nopol" value="" placeholder="No. POL Kendaraan" class="form-control"/>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="col-sm-12">
          <div class="form-group">
            <textarea name="keperluan" class="form-control" rows="3" cols="80" placeholder="Keperluan..." required></textarea>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <select class="form-control" name="pegawai" placeholder="Orang yang dituju">
              <option value="">- Pilih Pegawai -</option>
              @foreach ($pegawai as $pegawais)
                <option value="{{ $pegawais->id }}">{{ $pegawais->nama }}</option>
              @endforeach
            </select>
          </div>
        </div>

          <div class="col-sm-12">
            <div class="checkbox pull-left">
              <label>
                <input type="checkbox" name="aturan" required> Membaca aturan KJ
              </label>
            </div>
          </div>
     </div>
    <br>
    <div class="col-sm-12" align="center">
      <button type="submit" class="btn btn-success" name="button">Simpan</button>
    </div>

    </form>
  </div>

@endsection
