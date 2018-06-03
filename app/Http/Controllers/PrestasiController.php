<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestasi;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // menampilkan semua data post melalui model 'Post'
        $a = Prestasi::all();
        return view('prestasi.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'nama' => 'required|max:255',
            'tgl_peroleh' => 'required|max:255'
        ]);

        $a = new Prestasi;
        $a->nama = $request->nama;
        $a->tgl_peroleh = $request->tgl_peroleh;
        $a->save();
        return redirect()->route('prestasis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a = Prestasi::findOrFail($id);
        return view('prestasi.show',compact('a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // memanggil data pos berdasrkan id di halaman pos edit
        $a = Prestasi::findOrFail($id);
        return view('prestasi.edit',compact('a'));
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
        // unique dihapus karena ketika update data title tidak diubah juga tidak apa-apa
        $this->validate($request,[
            'nama' => 'required|max:255',
            'tgl_peroleh' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $a = Prestasi::findOrFail($id);
        $a->nama = $request->nama;
        $a->tgl_peroleh = $request->tgl_peroleh;
        $a->save();
        return redirect()->route('prestasis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data beradasarkan id
        $a = Prestasi::findOrFail($id);
        $a->delete();
        return redirect()->route('prestasis.index');  
    }
}
