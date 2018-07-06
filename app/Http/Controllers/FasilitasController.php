<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fasilitas;
class FasilitasController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $fasilitas = Fasilitas::all();
        return view('fasilitas.index',compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitas.create');
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
            'bus' => 'required|min:2',
            'pesawat' => 'required|max:255',
            'hotel' => 'required|max:25'
           
        ]);

        $fasilitas = new fasilitas;
        $fasilitas->bus = $request->bus;
        $fasilitas->pesawat = $request->pesawat;
        $fasilitas->hotel = $request->hotel;
        $fasilitas->save();
        return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.show',compact('fasilitas'));
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
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.edit',compact('fasilitas'));
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
            'bus' => 'required|min:2',
            'pesawat' => 'required|max:255',
            'hotel' => 'required|max:25',
        ]);

        // update data berdasarkan id
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->bus = $request->bus;
        $fasilitas->pesawat = $request->pesawat;
        $fasilitas->hotel = $request->hotel;
        $fasilitas->save();
        return redirect()->route('fasilitas.index');
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
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas.index');  
    }
}

