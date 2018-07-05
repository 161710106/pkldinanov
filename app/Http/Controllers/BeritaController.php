<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
class BeritaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $beritas = Berita::all();
        return view('berita.index',compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
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
            'tanggal' => 'required|min:2',
            'judul' => 'required|max:255',
            'isi' => 'required|max:25'
           
        ]);

        $beritas = new Berita;
        $beritas->tanggal = $request->tanggal;
        $beritas->judul = $request->judul;
        $beritas->isi = $request->isi;
        $beritas->save();
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beritas = Berita::findOrFail($id);
        return view('berita.show',compact('beritas'));
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
        $beritas = Berita::findOrFail($id);
        return view('berita.edit',compact('beritas'));
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
            'tanggal' => 'required|min:2',
            'judul' => 'required|max:255',
            'isi' => 'required|max:25',
        ]);

        // update data berdasarkan id
        $beritas = Berita::findOrFail($id);
        $beritas->tanggal = $request->tanggal;
        $beritas->judul = $request->judul;
        $beritas->isi = $request->isi;
        $beritas->save();
        return redirect()->route('berita.index');
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
        $beritas = Berita::findOrFail($id);
        $beritas->delete();
        return redirect()->route('berita.index');  
    }
}
