<div class="tab-pane active" id="home">
  <form class="" action="{{ url('/buku-tamu') }}" method="post">
    {{ csrf_field() }}
  <div class="row">
    <div class="col-sm-4">
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

          </select>

        </div>
      </div>

      <div class="col-sm-12">
        <div class="form-group">
          <input type="text" name="nopol" value="" placeholder="No. POL Kendaraan" class="form-control"/>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="col-sm-12">
        <div class="col-sm-12">
          <div class="form-group">
            <textarea name="keperluan" class="form-control" rows="3" cols="80" placeholder="Keperluan..." required></textarea>
          </div>

          <div class="checkbox pull-left">
            <label>
              <input type="checkbox" name="aturan" required> Membaca aturan KJ
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-success" name="button">Simpan</button>
  </form>
</div>
