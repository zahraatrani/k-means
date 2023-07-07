<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Alternatif;
use App\Kriteria;
use App\Relasi;
use App\Produk;
use App\Penjualan;


class KMeansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Perhitungan K-Means';
        $data['rows_kriteria'] = DB::table('tb_kriteria')->get();
        $data['rows_alternatif'] = DB::table('tb_alternatif')->get();
        $data['rows_centroid'] = DB::table('tb_alternatif')->limit(3)->get();
        $data['rows_data'] = DB::table('tb_rel_alternatif')
            ->select('*')
            ->join('tb_alternatif', 'tb_alternatif.id_alternatif', '=', 'tb_rel_alternatif.id_alternatif')
            ->join('tb_kriteria', 'tb_kriteria.id_kriteria', '=', 'tb_rel_alternatif.id_kriteria')
            ->get();

        $tanggal_awal = date('Y-m-d');
        $tanggal_akhir = date('Y-m-d');

        // if(empty($request->query('tanggal_awal'))){
        //     $tanggal_awal = $request->query('tanggal_awal');
        //     $tanggal_akhir = $request->query('tanggal_akhir');
        // }

        $data['rows_penjualan'] = DB::table('tb_penjualan')
            ->select('*')
            ->join('tb_alternatif', 'tb_alternatif.id_alternatif', '=', 'tb_penjualan.id_alternatif')
            ->where('tb_penjualan.tanggal', '>=', $tanggal_awal)
            ->get();

        $data['rows_penjualan'] = DB::table('tb_penjualan')
            ->select('*')
            ->join('tb_alternatif', 'tb_alternatif.id_alternatif', '=', 'tb_penjualan.id_alternatif')
            ->where('tb_penjualan.tanggal', '=<', $tanggal_akhir)
            ->get();
        return view('kmeans.index', $data);
    }


    public function laporan()
    {
        $data['title'] = 'Perhitungan K-Means';
        $data['rows_kriteria'] = DB::table('tb_kriteria')->get();
        $data['rows_alternatif'] = DB::table('tb_alternatif')->get();
        $data['rows_centroid'] = DB::table('tb_alternatif')->limit(3)->get();
        $data['rows_data'] = DB::table('tb_rel_alternatif')
            ->select('*')
            ->join('tb_alternatif', 'tb_alternatif.id_alternatif', '=', 'tb_rel_alternatif.id_alternatif')
            ->join('tb_kriteria', 'tb_kriteria.id_kriteria', '=', 'tb_rel_alternatif.id_kriteria')
            ->get();


        return view('kmeans.laporan', $data);
    }

    public function alternatif()
    {
        $data['title'] = 'Alternatif';
        $data['rows'] = DB::table('tbl_barang')->get();
        return view('kmeans.alternatif', $data);
    }

    public function alternatif_tambah()
    {
        $data['title'] = 'Tambah Data Barang';
        $data['produk'] = Alternatif::all();
        return view('kmeans.alternatif_tambah', $data);
    }

    public function alternatif_hapus($id)
    {
        DB::table('tb_alternatif')->where('id_alternatif', '=', $id)->delete();
        DB::table('tb_rel_alternatif')->where('id_alternatif', '=', $id)->delete();
        return redirect('/k_alternatif');
    }

    public function kriteria_hapus($id)
    {
        DB::table('tb_kriteria')->where('id_kriteria', '=', $id)->delete();
        DB::table('tb_rel_kriteria')->where('id_kriteria', '=', $id)->delete();
        return redirect('/k_kriteria');
    }

    public function penjualan_hapus($id)
    {
        DB::table('tb_penjualan')->where('id_penjualan', '=', $id)->delete();
        return redirect('/k_penjualan');
    }

    public function alternatif_simpan(request $Req)
    {
        $alternatif_tabel = new Alternatif;
        $alternatif_tabel->kode_alternatif = $Req->kode;
        $alternatif_tabel->nama_alternatif = $Req->nama;
        $alternatif_tabel->keterangan = $Req->keterangan;
        $alternatif_tabel->save();


        $get_alternatif = Alternatif::where('kode_alternatif', $Req->kode)->first();
        $rows = Kriteria::all();
        foreach ($rows as $row) {
            $relasi_tabel = new Relasi;
            $relasi_tabel->id_alternatif = $get_alternatif->id_alternatif;
            $relasi_tabel->id_kriteria = $row->id_kriteria;
            $relasi_tabel->nilai = 0;
            $relasi_tabel->save();
        }
        return redirect('/k_alternatif');
    }


    public function penjualan()
    {
        $data['title'] = 'Data Transaksi Penjualan';
        $data['rows'] = DB::table('tb_penjualan')
            ->select('*')
            ->join('tb_alternatif', 'tb_alternatif.id_alternatif', '=', 'tb_penjualan.id_alternatif')
            ->get();
        return view('kmeans.penjualan', $data);
    }

    public function penjualan_tambah()
    {
        $data['title'] = 'Tambah Penjualan';
        $data['produk'] = Alternatif::all();
        return view('kmeans.penjualan_tambah', $data);
    }

    public function penjualan_simpan(request $Req)
    {
        $penjualan_tabel = new Penjualan;
        $penjualan_tabel->tanggal = $Req->tanggal;
        $penjualan_tabel->id_alternatif = $Req->nama;
        $penjualan_tabel->qty = $Req->qty;
        $penjualan_tabel->save();
        return redirect('/k_penjualan');
    }

    public function kriteria()
    {
        $data['title'] = 'Kriteria';
        $data['rows'] = DB::table('tb_kriteria')->get();
        return view('kmeans.kriteria', $data);
    }

    public function relasi()
    {
        $data['title'] = 'Data Clustering';

        $data['rows_kriteria'] = DB::table('tb_kriteria')->get();
        $data['rows_alternatif'] = DB::table('tb_alternatif')->get();



        $data['rows_data'] = DB::table('tb_rel_alternatif')
            ->select('*')
            ->join('tb_alternatif', 'tb_alternatif.id_alternatif', '=', 'tb_rel_alternatif.id_alternatif')
            ->join('tb_kriteria', 'tb_kriteria.id_kriteria', '=', 'tb_rel_alternatif.id_kriteria')
            ->get();

        return view('kmeans.rel_alternatif', $data);
    }


    public function relasi_ubah($id)
    {
        $data['title'] = 'Ubah Nilai';

        $data['rows_kriteria'] = DB::table('tb_kriteria')->get();

        $data['id_alternatif_kunci'] = $id;
        $data['rows'] = DB::table('tb_rel_alternatif')
            ->select('*')
            ->join('tb_alternatif', 'tb_alternatif.id_alternatif', '=', 'tb_rel_alternatif.id_alternatif')
            ->join('tb_kriteria', 'tb_kriteria.id_kriteria', '=', 'tb_rel_alternatif.id_kriteria')
            ->where('tb_alternatif.id_alternatif', '=', $id)
            ->get();
        return view('kmeans.relasi_ubah', $data);
    }

    public function relasi_ubah_simpan(request $req, $id)
    {

        $rows_data = DB::table('tb_rel_alternatif')
            ->select('*')
            ->join('tb_alternatif', 'tb_alternatif.id_alternatif', '=', 'tb_rel_alternatif.id_alternatif')
            ->join('tb_kriteria', 'tb_kriteria.id_kriteria', '=', 'tb_rel_alternatif.id_kriteria')
            ->where('tb_alternatif.id_alternatif', '=', $id)
            ->get();


        foreach ($rows_data as $row) {
            $relasi_tabel = Relasi::where('ID', $row->ID)->first();
            $relasi_tabel->nilai = $req->post($row->ID);
            $relasi_tabel->update();
        }
        return redirect('/k_rel_alternatif');
    }

    public function kmeans_import()
    {

        DB::table('tb_alternatif')->truncate();
        DB::table('tb_rel_alternatif')->truncate();

        $rows_alt = Produk::all();
        $no = 1;
        foreach ($rows_alt as $row) {
            $insert_alt = new Alternatif;
            $insert_alt->kode_alternatif = "A" . $no;
            $insert_alt->nama_alternatif = $row->k_produk;
            $insert_alt->save();
            $no++;
        }

        $rows = DB::table('tb_alternatif')
            ->get();
        foreach ($rows as $row) {
            $rka = DB::table('tb_kriteria')
                ->get();
            foreach ($rka as $rkw) {
                $insert_relasi = new Relasi;
                $insert_relasi->id_alternatif = $row->id_alternatif;
                $insert_relasi->id_kriteria = $rkw->id_kriteria;
                $insert_relasi->nilai = 0;
                $insert_relasi->save();
            }
        }
        $data['title'] = 'Data import';
        return view('k_means.import', $data);
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
