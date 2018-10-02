<?php

namespace App\Http\Controllers;
use App\Buku_tamu;
use Illuminate\Http\Request;
use PDF;
use DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $vendor = DB::connection('mysql')->select('SELECT * FROM master_vendor ORDER BY perusahaan');
      $pegawai= DB::connection('mysql')->select('SELECT * FROM master_pegawai ORDER BY nama');

      return view('pages2.buku-tamu', compact('vendor','pegawai'));
    }


    public function get_wp()
    {
      $c1 = DB::connection('mysql')->select('SELECT * FROM wp_bahaya LIMIT 0,11');
      $c2 = DB::connection('mysql')->select('SELECT * FROM wp_bahaya LIMIT 11,11');
      $c3 = DB::connection('mysql')->select('SELECT * FROM wp_bahaya LIMIT 22,11');
      $c4 = DB::connection('mysql')->select('SELECT * FROM wp_bahaya LIMIT 33,8');

      $d1 = DB::connection('mysql')->select('SELECT * FROM wp_pencegahan LIMIT 0,6');
      $d2 = DB::connection('mysql')->select('SELECT * FROM wp_pencegahan LIMIT 6,6');

      $e1 = DB::connection('mysql')->select('SELECT * FROM wp_pelindungdiri LIMIT 0,7');
      $e2 = DB::connection('mysql')->select('SELECT * FROM wp_pelindungdiri LIMIT 7,6');

      $vendor = DB::connection('mysql')->select('SELECT * FROM master_vendor ORDER BY perusahaan');
      $pegawai= DB::connection('mysql')->select('SELECT * FROM master_pegawai ORDER BY nama');

      return view('pages2.working-permit', compact('c1','c2','c3','c4','d1','d2','e1','e2','vendor','pegawai'));
    }

    public function get_history()
    {
      $petugas= DB::connection('mysql')->select('SELECT * FROM master_security ORDER BY nama');

      // WHERE keluar <=> NULL
      $history = DB::connection('mysql')->select('SELECT
        a.id,
        a.nama,
        a.keperluan,
        a.kj,
        a.masuk,
        a.keluar,
        a.tanggal,a.nopol,b.perusahaan,c.nama AS petugas,
        d.nama as pegawai
         FROM buku_tamu a JOIN `master_vendor` b
        ON a.instansi=b.id left JOIN `master_security` c
        ON a.petugas=c.id left join `master_pegawai` d
        on a.pegawai=d.id
        ORDER BY a.id DESC');

      $history2 = DB::connection('mysql')->select('SELECT
        a.id,
        a.nama,
        a.keperluan,
        a.kj,
        a.masuk,
        a.keluar,
        a.tanggal,a.nopol,b.perusahaan,c.nama AS petugas,
        d.nama as pegawai
         FROM buku_tamu a JOIN `master_vendor` b
        ON a.instansi=b.id left JOIN `master_security` c
        ON a.petugas=c.id left join `master_pegawai` d
        on a.pegawai=d.id
        ORDER BY a.id DESC');

      return view('pages2.riwayat', compact('history','petugas','history2'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('pages.admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_bt(Request $request)
    {
        $field = new Buku_tamu;

        $field->nama      =$request->nama;
        $field->instansi  =$request->alamat;
        $field->nopol     =$request->nopol;
        $field->keperluan =$request->keperluan;
        $field->KJ        =$request->aturan;
        $field->masuk     =date("H:i:s");
        $field->tanggal   =date("Y-m-d");
        $field->pegawai   =$request->pegawai;

        $field->save();

        return redirect('/')->with('status', 'Buku Tamu atas nama "'.$request->nama.'" berhasil disimpan!');
    }

    public function store_keluar(Request $request)
    {
      $sekarang = date("H:i:s");
      DB::table('buku_tamu')
            ->where('id', $request->id)
            ->update([
              'keluar' => $sekarang,
              'petugas' => $request->petugas
            ]);

        return redirect('/riwayat')->with('status', '"'.$request->nama.'" telah keluar!');
    }

    public function store_wp(Request $request)
    {
      $data = [
         'a1' => $request->a1,
         'a2' => $request->a2,
         'a3' => $request->a3,
         'a4' => $request->a4,
         'a5' => $request->a5,
         'a6' => $request->a6,
         'a7' => $request->a7,
         'a8' => $request->a8,

         'permit' => $request->no_permit,
         'lokasi' => $request->lokasi,
         'pemohon' => $request->pemohon,
         'tanggal' => $request->tanggal,

         'b1' => $request->b1,
         'b2' => $request->b2,
         'b3' => $request->b3,

         'c1' => $request->c1,
         'c2' => $request->c2,
         'c3' => $request->c3,
         'c4' => $request->c4,
         'c5' => $request->c5,
         'c6' => $request->c6,
         'c7' => $request->c7,
         'c8' => $request->c8,
         'c9' => $request->c9,
         'c10' => $request->c10,
         'c11' => $request->c11,
         'c12' => $request->c12,
         'c13' => $request->c13,
         'c14' => $request->c14,
         'c15' => $request->c15,
         'c16' => $request->c16,
         'c17' => $request->c17,
         'c18' => $request->c18,
         'c19' => $request->c19,
         'c20' => $request->c20,
         'c21' => $request->c21,
         'c22' => $request->c22,
         'c23' => $request->c23,
         'c24' => $request->c24,
         'c25' => $request->c25,
         'c26' => $request->c26,
         'c27' => $request->c27,
         'c28' => $request->c28,
         'c29' => $request->c29,
         'c30' => $request->c30,
         'c31' => $request->c31,
         'c32' => $request->c32,
         'c33' => $request->c33,
         'c34' => $request->c34,
         'c35' => $request->c35,
         'c36' => $request->c36,
         'c37' => $request->c37,
         'c38' => $request->c38,
         'c39' => $request->c39,
         'c40' => $request->c40,
         'c41' => $request->c41,

         'd1' => $request->d1,
         'd2' => $request->d2,
         'd3' => $request->d3,
         'd4' => $request->d4,
         'd5' => $request->d5,
         'd6' => $request->d6,
         'd7' => $request->d7,
         'd8' => $request->d8,
         'd9' => $request->d9,
         'd10' => $request->d10,
         'd11' => $request->d11,
         'd12' => $request->d12,

         'e1' => $request->e1,
         'e2' => $request->e2,
         'e3' => $request->e3,
         'e4' => $request->e4,
         'e5' => $request->e5,
         'e6' => $request->e6,
         'e7' => $request->e7,
         'e8' => $request->e8,
         'e9' => $request->e9,
         'e10' => $request->e10,
         'e11' => $request->e11,
         'e12' => $request->e12,
         'e13' => $request->e13,

         'ftanggal' => $request->ftanggal,
         'ftanggal2' => $request->ftanggal2,
         'fjam' => $request->fjam,
         'fjam2' => $request->fjam2,
         'fasisten' => $request->fasisten,
         'fpengawas' => $request->fpengawas,

         'gnama' => $request->gnama,
         'gnama2' => $request->gnama2,
         'gtanggal' => $request->gtanggal,
         'gtanggal2' => $request->gtanggal2,
         'gjam' => $request->gjam,
         'gjam2' => $request->gjam2,
         'gkontraktor' => $request->gkontraktor,
         'gkontraktor2' => $request->gkontraktor2,

         'hnama' => $request->hnama,
         'htanggal' => $request->htanggal,
         'hjam' => $request->hjam,

         'des' => $request->deskripsi,
      ];

      //dd($request->gjam2);

      // $pdf = PDF::loadView('pdf.wp', $data);
      // return $pdf->download('working-permit-'.$request->no_permit.'.pdf');
      return view('pdf.wp', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
