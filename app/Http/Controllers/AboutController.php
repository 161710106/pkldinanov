<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
class AboutController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $abouts = About::all();
        return view('about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
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
            'sejarah' => 'required',
            'visi_misi' => 'required'
            
           
        ]);

        $abouts = new About;
        $abouts->sejarah = $request->sejarah;
        $abouts->visi_misi = $request->visi_misi;
        $abouts->save();
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abouts = About::findOrFail($id);
        return view('about.show',compact('abouts'));
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
        $abouts = About::findOrFail($id);
        return view('about.edit',compact('abouts'));
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
            'sejarah' => 'required',
            'visi_misi' => 'required'
        ]);

        // update data berdasarkan id
        $abouts = About::findOrFail($id);
        $abouts->sejarah = $request->sejarah;
        $abouts->visi_misi = $request->visi_misi;
        $abouts->save();
        return redirect()->route('about.index');
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
        $abouts = About::findOrFail($id);
        $abouts->delete();
        return redirect()->route('about.index');  
    }
}
