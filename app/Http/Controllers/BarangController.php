<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $res_barang = DB::select('select * from tbl_barang');
        // $title = 'List Barang';
        // return view('master.list-barang', compact('title', 'res_barang'));
        $data['title'] = 'List Barang';
        $data['rows'] = DB::table('tbl_barang')->get();
        return view('master.list-barang', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $title = 'Add Barang';
        // return view('master.add-barang', compact('title'));
        $data['title'] = 'Tambah Data Barang';
        $data['produk'] = Barang::all();
        return view('master.add-barang', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $Req)
    {
        // $this->validate($request, [
        //     'kode' => 'required',
        //     'nama_alternatif' => 'required'
        // ]);

        // $resinsert = DB::insert('INSERT INTO tbl_barang (kode_alternatif,nama_alternatif)
        // VALUES ("' . $request->kode . '","' . $request->nama . '"); ');

        // if ($resinsert) {
        //     return redirect()
        //         ->route('barang.list')
        //         ->with([
        //             'success' => 'New post has been created successfully'
        //         ]);
        // } else {
        //     return redirect()
        //         ->back()
        //         ->withInput()
        //         ->with([
        //             'error' => 'Some problem occurred, please try again'
        //         ]);
        // }
        $barang_tabel = new Barang;
        $barang_tabel->kode_alternatif = $Req->kode;
        $barang_tabel->nama_alternatif = $Req->nama;
        $barang_tabel->stock = $Req->stock;
        $barang_tabel->satuan = $Req->satuan;
        $barang_tabel->save();
        return redirect('/barang');
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
        $res_find = DB::select('select * from tbl_barang where id_alternatif=' . $id);
        $find = $res_find[0];
        $title = 'Edit Barang';
        return view('master.edit-barang', compact('title', 'find'));
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
        $this->validate($request, [
            'kode_alternatif' => 'required',
            'nama_alternatif' => 'required',
            'stock' => 'required',
            'satuan' => 'required'
        ]);

        $barang_models = Barang::findOrFail($id);

        $barang_models->update([
            'kode_alternatif' => $request->kode_alternatif,
            'nama_alternatif' => $request->nama_alternatif,
            'stock' => $request->stock,
            'satuan' => $request->satuan
        ]);

        if ($barang_models) {
            return redirect()
                ->route('barang.list')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $resdelete = DB::delete('DELETE FROM tbl_barang WHERE id_alternatif=' . $id . ';');

        // if ($resdelete) {
        //     return redirect()
        //         ->route('barang.list')
        //         ->with([
        //             'success' => 'New post has been created successfully'
        //         ]);
        // } else {
        //     return redirect()
        //         ->back()
        //         ->withInput()
        //         ->with([
        //             'error' => 'Some problem occurred, please try again'
        //         ]);
        // }        
        DB::table('tbl_barang')->where('id_alternatif', '=', $id)->delete();
        return redirect('/barang');
    }
}
