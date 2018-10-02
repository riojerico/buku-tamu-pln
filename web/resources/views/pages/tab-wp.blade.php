<div class="tab-pane" id="updates">
  <form class="" action="{{ URL('/pdf-wp')}}" method="post">
    {{ csrf_field() }}
  <!-- A -->

  <div class="col-sm-12">
    <b class="pull-left">A. Aplikasi</b>
    <br>

    <div class="col-sm-6">
      <div class="">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="a1" >Pekerjaan Umum
          </label>
        </div>
      </div>
      <div class="">
        <div class="checkbox">
          <label>

            <input type="checkbox" name="a2" >Ruang Tertutup
          </label>
        </div>
      </div>
      <div class="">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="a3" >Pengangkatan Kritikal
          </label>
        </div>
      </div>
      <div class="">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="a4" >Kerja Panas
          </label>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="a5" >Penggalian
          </label>
        </div>
      </div>
      <div class="">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="a6" >Listrik
          </label>
        </div>
      </div>
      <div class="">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="a7" >Bekerja di ketinggian
          </label>
        </div>
      </div>
      <div class="">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="a8" > Lain-Lain
          </label>
        </div>
      </div>
    </div>



    <div class="col-sm-12">
      <div class="col-sm-3">
        <input type="date" value="{{ date("Y-m-d") }}" placeholder="Tanggal" class="form-control" name="tanggal"/>
        <input type="text" value="" placeholder="Lokasi" class="form-control" name="lokasi" required/>
        <input type="text" value="" placeholder="Pemohon" class="form-control" name="pemohon" required/>
      </div>
      <div class="col-sm-3">
        <input type="text" name="no_permit" placeholder="No. Permit" class="form-control" value="" name="no_permit" required>
      </div>
    </div>
  </div>
  <!-- END A -->

  <!-- B -->
  <div class="col-sm-7">
    <b class="pull-left">B. Deskripsi Kerja</b>
    <br>

    <textarea name="deskripsi" rows="4" cols="80" class="form-control"></textarea>
  </div>
  <div class="col-sm-5">
    <b class="pull-left">Jenis Peralatan (Tandai yang Sesuai)</b>
    <br>

    <div class="col-sm-4 pull-left">
      <div class="checkbox">
        <label>
          <p>Mesin</p>
          <input type="checkbox" name="b1" >
        </label>
      </div>
    </div>
    <div class="col-sm-4 pull-left">
      <div class="checkbox">
        <label>
          <p>Listrik</p>
          <input type="checkbox" name="b2" >
        </label>
      </div>
    </div>
    <div class="col-sm-4 pull-left">
      <div class="checkbox">
        <label>
          <p>Peralatan Tangan</p>
          <input type="checkbox" name="b3" >
        </label>
      </div>
    </div>
  </div>
  <!-- end B -->

  <!-- C -->
  <div class="col-sm-12">
    <b class="pull-left">C. Bahaya Yang Mungkin Terjadi (Tandai Yang Sesuai)</b>
    <br>
    <div class="col-sm-3">
      @foreach ($c1 as $c1s)
      <div class="pull-left col-sm-12">
        <div class="checkbox">
          <label>
            <p>{{ $c1s->item }}</p>
            <input type="checkbox" name="c{{ $c1s->id }}" >
          </label>
        </div>
      </div>
      @endforeach


    </div>

    <div class="col-sm-3">
      @foreach ($c2 as $c2s)
      <div class="pull-left col-sm-12">
        <div class="checkbox">
          <label>
            <p>{{ $c2s->item }}</p>
            <input type="checkbox" name="c{{ $c2s->id }}" >
          </label>
        </div>
      </div>
      @endforeach
    </div>

    <div class="col-sm-3">
      @foreach ($c3 as $c3s)
      <div class="pull-left col-sm-12">
        <div class="checkbox">
          <label>
            <p>{{ $c3s->item }}</p>
            <input type="checkbox" name="c{{ $c3s->id }}" >
          </label>
        </div>
      </div>
      @endforeach
    </div>

    <div class="col-sm-3">
      @foreach ($c4 as $c4s)
      <div class="pull-left col-sm-12">
        <div class="checkbox">
          <label>
            <p>{{ $c4s->item }}</p>
            <input type="checkbox" name="c{{ $c4s->id }}" >
          </label>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <!-- D -->
  <div class="col-sm-12">
    <b class="pull-left">D. Tindakan Pencegahan Yang Dilakukan Sebelum dan Semasa Kerja</b>
    <br>
    <div class="col-sm-6 pull-left">
      @foreach ($d1 as $d1s)
      <div class="pull-left col-sm-12">
        <div class="checkbox pull-left">
          <label>
            <input type="checkbox" name="d{{ $d1s->id }}" >
            {{ $d1s->item }}
          </label>
        </div>
      </div>
      @endforeach

    </div>

    <div class="col-sm-6">
      @foreach ($d2 as $d2s)
      <div class="pull-left col-sm-12">
        <div class="checkbox pull-left">
          <label>
            <input type="checkbox" name="d{{ $d2s->id }}" >
            {{ $d2s->item }}
          </label>
        </div>
      </div>
      @endforeach
    </div>

  </div>

  <!-- E -->
  <div class="col-sm-12">
    <b class="pull-left">E. Alat Pelindung Diri</b>
    <br>
    <div class="col-sm-6 pull-left">

      @foreach ($e1 as $e1s)
      <div class="pull-left col-sm-12">
        <div class="checkbox pull-left">
          <label>
            <input type="checkbox" name="e{{ $e1s->id }}" >
            {{ $e1s->item }}
          </label>
        </div>
      </div>
      @endforeach


    </div>

    <div class="col-sm-6">
      @foreach ($e2 as $e2s)
      <div class="pull-left col-sm-12">
        <div class="checkbox pull-left">
          <label>
            <input type="checkbox" name="e{{ $e2s->id }}" >
            {{ $e2s->item }}
          </label>
        </div>
      </div>
      @endforeach
    </div>

  </div>

  <!-- F -->
  <div class="col-sm-12">
    <b class="pull-left">F. Pengeluaran Surat Izin</b> <br>
    <small class="pull-left">Izin diberikan untuk kerja dijalankan yang tertera diatas selama</small>
    <br>
    <div class="col-sm-6">
      <table>
        <tbody>
          <tr>
            <td>Dari</td>
            <td>: &nbsp;&nbsp;&nbsp;</td>
            <td><input type="date" name="ftanggal" value="" placeholder="Tanggal" class="form-control" /></td>
            <td><input type="time" name="fjam" value="" placeholder="Jam" class="form-control" /></td>
          </tr>
          <tr>
            <td>Sampai dengan</td>
            <td>: &nbsp;&nbsp;&nbsp;</td>
            <td><input type="date" name="ftanggal2" value="" placeholder="Tanggal" class="form-control" /></td>
            <td><input type="time" name="fjam2" value="" placeholder="Jam" class="form-control" /></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-sm-6">
      <input type="text" value="" name="fasisten" placeholder="Asisten Manajer" class="form-control" />
      <input type="text" value="" name="fpengawas" placeholder="Pengawas" class="form-control" />
    </div>
  </div>

  <!-- G -->
  <div class="col-sm-12">
    <b class="pull-left">G. Persetujuan Penanggung Jawab (Diisi oleh kontraktor/Pelaksana Pekerjaan)</b> <br>
    <small class="pull-left">Saya menyatakan bahwa Saya telah membaca & memahami K3 & pekerjaan ini akan dilaksanakan sesuai dengan segala persyaratan yang ada</small>
    <br>

    <table class="table">
      <thead>
        <tr>
          <th>&nbsp;</th>
          <th>Nama</th>
          <th>Tanggal</th>
          <th>Jam</th>
          <th>Kontraktor/Pelaksana</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><b>Orang yang berkompeten (Pelaksana)</b></td>
          <td><input type="text" name="gnama" value="" placeholder="Nama" class="form-control" /></td>
          <td><input type="date" name="gtanggal" value="" placeholder="Tanggal" class="form-control" /></td>
          <td><input type="time" name="gjam" value="" placeholder="Jam" class="form-control" /></td>
          <td><input type="text" name="gkontraktor" value="" placeholder="Kontraktor/Pelaksana" class="form-control" /></td>
        </tr>
        <tr>
          <td><b>Ganti orang yang berkompeten (Pelaksana)</b></td>
          <td><input type="text" name="gnama2" value="" placeholder="Nama" class="form-control" /></td>
          <td><input type="date" name="gtanggal2" value="" placeholder="Tanggal" class="form-control" /></td>
          <td><input type="time" name="gjam2" value="" placeholder="Jam" class="form-control" /></td>
          <td><input type="text" name="gkontraktor2" value="" placeholder="Kontraktor/Pelaksana" class="form-control"
        </tr>
      </tbody>
    </table>
  </div>
  <!-- H -->
  <div class="col-sm-12">
    <b class="pull-left">H. Pembatalan</b> <br>
    <small class="pull-left">Surat Izin Dibatalkan</small>
    <br>
    <div class="col-sm-4">
      <div class="form-group">
        <input type="text" name="hnama" value="" placeholder="Nama" class="form-control" required/>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <input type="date" name="htanggal" value="" placeholder="Tanggal" class="form-control" required/>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <input type="time" name="hjam" value="" placeholder="Jam" class="form-control" required/>
      </div>
    </div>
  </div>
  <div class="col-sm-12">
    <button type="submit" name="button" class="btn btn-success">Cetak</button>
  </div>

</form>
</div>
