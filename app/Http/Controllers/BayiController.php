<?php

namespace App\Http\Controllers;

use App\Models\Bayi;
use Illuminate\Http\Request;

class BayiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $bayi = Bayi::paginate(6); // Mengambil 6 isi tabel
        $posts = Bayi::orderBy('no_urut', 'desc')->paginate(6);
        return view('bayi.index', compact('bayi'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bayi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'no_urut' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'bb_lahir' => 'required',
            'tb_lahir' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        Bayi::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('bayi.index')->with('success', 'Bayi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $no_urut
     * @return \Illuminate\Http\Response
     */
    public function show($no_urut)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Bayi = Bayi::find($no_urut);
        return view('bayi.detail', compact('Bayi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $no_urut
     * @return \Illuminate\Http\Response
     */
    public function edit($no_urut)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Bayi = Bayi::find($no_urut);
        return view('bayi.edit', compact('Bayi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $no_urut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_urut)
    {
        //melakukan validasi data
        $request->validate([
            'no_urut' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'bb_lahir' => 'required',
            'tb_lahir' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Bayi::find($no_urut)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('bayi.index')->with('success', 'Bayi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $no_urut
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_urut)
    {
        //fungsi eloquent untuk menghapus data
        Bayi::find($no_urut)->delete();
        return redirect()->route('bayi.index')->with('success', 'Bayi Berhasil Dihapus');
    }
}
