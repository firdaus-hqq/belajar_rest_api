<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriCatatan;

class KategoriCatatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $data_kategori = KategoriCatatan::simplePaginate(10);
        return view('kategori.index', compact('data_kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data_kategori = KategoriCatatan::simplePaginate(10);
        return view('kategori.create', compact('data_kategori'));
        // return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //deklarasi variabel
        $kategori = new KategoriCatatan;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return back()->with('success', 'Kategori berhasil disimpan');
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
        $kategori = KategoriCatatan::find($id);
        return view('kategori.edit', compact('kategori', 'id'));
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
        $kategori = KategoriCatatan::find($id);

        $validatedData = $request->validate([
            'nama_kategori' => 'required'
        ]);

        $kategori->nama_kategori =  $validatedData['nama_kategori'];
        // $request->get('nama_kategori');
        $kategori->save();

        return redirect('kategori')->with('success', 'Kategori berhasil diubah.');
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
        $kategori = KategoriCatatan::find($id);
        $kategori->delete();

        return redirect('kategori')->with('success', 'Data berhasil dihapus.');
    }
}
