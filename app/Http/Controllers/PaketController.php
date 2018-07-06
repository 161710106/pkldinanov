<?php

namespace App\Http\Controllers;
use App\Paket;
use App\Pembina;
use App\Fasilitas;
use App\Syarat;
use Illuminate\Http\Request;

use Session;
class PaketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
         $k = Paket::with('Pembina','Fasilitas','Syarat')->get();
        return view('paket.index',compact('k'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $p = Pembina::all();
          $f = Fasilitas::all();
          $s = Syarat::all();
        return view('paket.create',compact('p','f','s'));
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
            'jenis_paket' => 'required|',
            'pembina_id' => 'required',
            'fasilitas_id' => 'required',
            'syarat_id' => 'required'
        ]);
        $k = new Paket;
        $k->jenis_paket = $request->jenis_paket;
        $k->pembina_id = $request->pembina_id;
        $k->fasilitas_id = $request->fasilitas_id;
        $k->syarat_id = $request->syarat_id;
        $k->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$k->jenis_paket</b>"
        ]);
        return redirect()->route('paket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $k = Paket::findOrFail($id);
        return view('paket.show',compact('k'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
        $k = Paket::findOrFail($id);
        $p = Pembina::all();
        $f = Fasilitas::all();
        $s = Syarat::all();
        $selectedp = Paket::findOrFail($id)->pembina_id;
        $selectedp = Paket::findOrFail($id)->fasilitas_id;
        $selectedp = Paket::findOrFail($id)->syarat_id;
        return view('paket.edit',compact('p','k','f','s','selectedp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'jenis_paket' => 'required|',
            'pembina_id' => 'required',
            'fasilitas_id' => 'required',
            'syarat_id' => 'required'
        ]);
        $k = Paket::findOrFail($id);
        $k->jenis_paket = $request->jenis_paket;
        $k->pembina_id = $request->pembina_id;
        $k->fasilitas_id = $request->fasilitas_id;
        $k->syarat_id = $request->syarat_id;
        $k->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$k->jenis_paket</b>"
        ]);
        return redirect()->route('paket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        $k = Paket::findOrFail($id);
        $k->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('paket.index');
    }
}