<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ekskul;

class EkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // menampilkan semua data post melalui model 'Post'
        $a = Ekskul::all();
        return view('ekskul.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ekskul.create');
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
            'jadwal' => 'required|max:255',
            'prestasis_id' => 'required'
        ]);

        $a = new Ekskul;
        $a->nama = $request->nama;
        $a->jadwal = $request->jadwal;
        $a->save();
        $a->prestasi()->sync($request->prestasis_id);
        return redirect()->route('ekskuls.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a = Ekskul::findOrFail($id);
        return view('ekskul.show',compact('a'));
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
        $a = Ekskul::findOrFail($id);
        return view('ekskul.edit',compact('a'));
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
            'jadwal' => 'required|max:255',
            'prestasis_id' => 'required'
        ]);

        // update data berdasarkan id
        $a = Ekskul::findOrFail($id);
        $a->nama = $request->nama;
        $a->jadwal = $request->jadwal;
        $a->save();
        $a->prestasi()->sync($request->prestasis_id);
        return redirect()->route('ekskuls.index');
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
        $a = Ekskul::findOrFail($id);
        $a->delete();
        return redirect()->route('ekskuls.index');  
    }
}
