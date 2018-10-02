@extends('layouts.master')

@section('judul')
  <h3 style="font-color:#000;"><b>Buku Tamu & Working Permit</b></h3>
@endsection
@section('content')
  <div class="col-md-12">
    <!-- Tabs on Plain Card -->
    <div class="card card-nav-tabs card-plain">
      <div class="header header-info">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="active"><a href="#home" data-toggle="tab">Buku Tamu</a></li>
              <li><a href="#updates" data-toggle="tab">Working Permit</a></li>
              <li><a href="#history" data-toggle="tab">Riwayat Buku Tamu</a></li>
              @if (Auth::user())
                <a href="{{ url('/administrator') }}" type="button" class="btn btn-danger btn-sm" name="button"> Halaman Administrator</a>
              @endif
            </ul>
          </div>
        </div>
      </div>
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
      <div class="content">
        <div class="tab-content text-center">
          @include('pages.tab-buku-tamu')
          @include('pages.tab-wp')
          @include('pages.tab-history')
        </div>
      </div>
    </div>
    <!-- End Tabs on plain Card -->
  </div>
@endsection
