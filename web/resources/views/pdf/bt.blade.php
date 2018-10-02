<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    table {
      border-collapse: collapse;
    }
    </style>
  </head>
  <body>
    <table border="1" >
      <thead>
        <tr>
          <th rowspan="2" width="4%">No</th>
          <th rowspan="2" width="10%">Nama</th>
          <th rowspan="2" width="10%">Pegawai</th>
          <th rowspan="2" width="20%">Alamat / Instansi</th>
          <th rowspan="2" width="8%">Tanggal</th>
          <th colspan="2" width="18%">Waktu</th>
          <th rowspan="2" width="15%">Keperluan</th>
          <th rowspan="2" width="10%">No. POL Kendaraan</th>
          <th rowspan="2" width="5%">Membaca Aturan KJ</th>
          <th colspan="2" width="10%">Tandatangan</th>

        </tr>
        <tr>
          <th>Masuk</th>
          <th>Keluar</th>
          <th>Tamu</th>
          <th>Satpam</th>
        </tr>
      </thead>

      <tbody>
          @foreach ($data as $index => $datas)
        <tr>
          <td align='center'>{{ $index+1 }}</td>
          <td>{{ $datas->nama }}</td>
          <td>{{ $datas->pegawai }}</td>          
          <td>{{ $datas->instansi }}</td>
          <td align='center'>{{ $datas->tanggal }}</td>
          <td align='center'>{{ $datas->masuk }}</td>
          <td align='center'>{{ $datas->keluar }}</td>
          <td>{{ $datas->keperluan }}</td>
          <td align='center'>{{ $datas->nopol }}</td>
          <td align='center'>
            @if ($datas->kj=='on')
              sudah
              @else
                -
            @endif
            </td>
          <td></td>
          <td></td>
        </tr>
          @endforeach
      </tbody>

    </table>
  </body>
</html>
