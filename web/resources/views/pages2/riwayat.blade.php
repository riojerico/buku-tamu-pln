@extends('layouts.master2')
@section('title')
  <div class="title">
      <h2>Buku Tamu & Working Permit</h2>
  </div>
@endsection

@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('menu')
  <nav class="navbar navbar-info">
@endsection

@section('menu-admin')
  @if (Auth::user())
     <a href="{{ url('/administrator') }}" type="button" class="navbar-brand " name="button"> >> Halaman Administrator</a>
  @endif
@endsection

@section('modal-history')
  @foreach ($history2 as $h)
  <!-- Sart Modal -->
  <div class="modal fade" id="myModal{{ $h->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			<div class="modal-header">
  				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
  					<i class="material-icons">clear</i>
  				</button>
  				<h4 class="modal-title">Tamu Selesai</h4>
  				<small>Pilih petugas dan klik tombol keluar.</small>
  			</div>
  			<div class="modal-body">
  				<form class="" action="{{ URL('/keluar') }}" method="post">
  					{{ csrf_field() }}
  					<input type="hidden" name="nama" value="{{ $h->nama }}">
  					<input type="hidden" name="id" value="{{ $h->id }}">
  						<select class="form-control" name="petugas" required>
  							<option value="">- Petugas -</option>
  							@foreach ($petugas as $petugases)
  								<option value="{{ $petugases->id }}">{{ $petugases->nama }}</option>
  							@endforeach
  						</select>
  						<button type="submit" rel="tooltip" class="btn btn-danger btn-sm">
  							Keluar Sekarang
  						</button>

  				</form>
  			</div>
  			<div class="modal-footer">
  				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
  			</div>
  		</div>
  	</div>
  </div>
  <!--  End Modal -->

  @endforeach
@endsection
@section('content')
  <div class="tab-pane" id="history">
    @include('layouts.notif')
    <div class="col-sm-12 scrollmenu">
      <table class="table " id="example">
      <thead>
          <tr>
              <th class="text-center">#</th>
              <th>Tanggal</th>
              <th>Nama</th>
              <th>Instansi</th>
              <th>Masuk</th>
              <th>Keluar</th>
              <th>Petugas</th>
              <th>Pegawai</th>
              <th class="text-right">Actions</th>
          </tr>
      </thead>
      <tbody>

        @foreach ($history as $index => $historys)
          <tr>
              <td class="text-center">{{ $index+1 }}</td>
              <td class="text-left">{{ $historys->tanggal }}</td>
              <td class="text-left">{{ $historys->nama }}</td>
              <td class="text-left">{{ $historys->perusahaan }}</td>
              <td >{{ $historys->masuk }}</td>
              <td >{{ $historys->keluar }}</td>
              <td>{{ $historys->petugas }}</td>
              <td>{{ $historys->pegawai }}</td>

              <td class="text-right">
                @if ($historys->keluar <=> NULL)

                  @else
                      <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal{{ $historys->id }}">
                        selesai
                      </button>
                @endif

              </td>
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
    $('#example').DataTable();
  } );
  </script>
@endsection
