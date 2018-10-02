<div class="tab-pane" id="history">

  <div class="col-sm-12">
    <table class="table ">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Instansi</th>
            <th>Masuk</th>
            <th>Keluar</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>

      @foreach ($history as $index => $historys)
        <tr>
            <td class="text-center">{{ $index+1 }}</td>
            <td class="text-left">{{ $historys->created_at }}</td>
            <td class="text-left">{{ $historys->nama }}</td>
            <td class="text-left">{{ $historys->instansi }}</td>
            <td class="text-left">{{ $historys->masuk }}</td>
            <td class="text-left">{{ $historys->keluar }}</td>
            <td class="text-right">
              @if ($historys->keluar <=> NULL)

                @else


                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                      Launch demo modal
                    </button>



              @endif

            </td>
        </tr>
      @endforeach



    </tbody>
</table>
  </div>

</div>

<!-- Sart Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
        <form class="" action="{{ URL('/keluar') }}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="nama" value="{{ $historys->nama }}">
          <input type="hidden" name="id" value="{{ $historys->id }}">
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
				<button type="button" class="btn btn-default btn-simple">Nice Button</button>
				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--  End Modal -->
