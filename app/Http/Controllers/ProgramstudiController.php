<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programstudi;

class ProgramstudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // menampilkan semua data post melalui model 'Post'
        $a = Programstudi::all();
        return view('programstudi.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programstudi.create');
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
            'nama_program' => 'required|max:255',
            'fasilitas_id' => 'required',
            'industri_id' => 'required',
            'struktur_id' => 'required'
        ]);

        $a = new Programstudi;
        $a->nama_program = $request->nama_program;
        $a->fasilitas_id = $request->fasilitas_id;
        $a->industri_id = $request->industri_id;
        $a->save();
        $a->struktur()->sync($request->struktur_id);
        return redirect()->route('program_studis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a = Programstudi::findOrFail($id);
        return view('programstudi.show',compact('a'));
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
        $a = Programstudi::findOrFail($id);
        return view('programstudi.edit',compact('a'));
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
            'nama_program' => 'required|max:255',
            'fasilitas_id' => 'required',
            'industri_id' => 'required',
            'struktur_id' => 'required'
        ]);

        // update data berdasarkan id
        $a = Programstudi::findOrFail($id);
        $a->nama_program = $request->nama_program;
        $a->fasilitas_id = $request->fasilitas_id;
        $a->industri_id = $request->industri_id;
        $a->save();
        $a->struktur()->sync($request->struktur_id);
        return redirect()->route('program_studis.index');
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
        $a = Programstudi::findOrFail($id);
        $a->delete();
        return redirect()->route('program_studis.index');  
    }
}
