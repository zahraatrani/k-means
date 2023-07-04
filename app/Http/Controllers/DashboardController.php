<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Produk;
use App\Hasil;
use DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function master1()
    {
        return view ('layouts/master1');
    }

    public function Dashboard()
    {
        return view('/login.login');
    }

    public function Dashboard_kategori(Kategori $kategori)
    {
        $produkall = $kategori->Produk()->paginate(12);
        $kategori = Kategori::all();
        return view('/layouts.ecommers', compact('kategori', 'produkall'));
    }




    // ===================================================================
    // Versi Mobile
    public function mDashboard()
    {
        $kategori = Kategori::all();
        $produkall = Produk::all()->random(12);
        return view('/m/index', compact('kategori', 'produkall'));
    }

    public function mShowproduk($id)
    {
        // Menampilkan produk berdasarkan id yang dipilih
       

        $data['produk_tabel'] = Produk::findOrFail($id);
        $data['produkall'] = Produk::all();
        $data['hasil'] = Hasil::all();

        return view('m/showProduk',$data);
    }

    public function mCari(Request $request)
	{
        $kategori = Kategori::all();

		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table pegawai sesuai pencarian data
		$produkall = DB::table('produk_tabel')
		->where('n_produk','like',"%".$cari."%")
		->paginate();
 
    	// mengirim data pegawai ke view index
		return view('m/index',compact('produkall','kategori'));
 
	}
}
