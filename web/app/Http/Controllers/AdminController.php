<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $data = DB::connection('mysql')->select('SELECT
        a.id,
        a.nama,
        a.keperluan,
        a.kj,
        a.masuk,
        a.keluar,
        a.tanggal,a.nopol,b.perusahaan as instansi,c.nama AS petugas,
        d.nama as pegawai
         FROM buku_tamu a JOIN `master_vendor` b
        ON a.instansi=b.id left JOIN `master_security` c
        ON a.petugas=c.id left join `master_pegawai` d
        on a.pegawai=d.id
        ORDER BY a.id DESC');
      // dd($data);
      return view('pages2.admin', compact('data'));
    }

    public function cetak_bt(Request $request)
    {
      $awal = date("Y-m-d", strtotime($request->tgl_awal));
      $akhir = date("Y-m-d", strtotime($request->tgl_akhir));

      $data = DB::connection('mysql')->select('SELECT
        a.id,
        a.nama,
        a.keperluan,
        a.kj,
        a.masuk,
        a.keluar,
        a.tanggal,a.nopol,b.perusahaan as instansi,c.nama AS petugas,
        d.nama as pegawai
         FROM buku_tamu a JOIN `master_vendor` b
        ON a.instansi=b.id left JOIN `master_security` c
        ON a.petugas=c.id left join `master_pegawai` d
        on a.pegawai=d.id
        WHERE DATE(tanggal) BETWEEN ? AND ? ORDER BY id DESC',[$awal,$akhir]);
      // dd($data);
      $pdf = PDF::loadView('pdf.bt', compact('data'));
      return $pdf->download('laporan_buku_tamu-'.$awal.'/'.$akhir.'.pdf');
    }
}
