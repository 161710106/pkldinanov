<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Paket;
use Session;
class JadwalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
         $k = Jadwal::with('Paket')->get();
        return view('jadwal.index',compact('k'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $a = Paket::all();
        return view('jadwal.create',compact('a'));
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
            'tanggal' => 'required|',
            'durasi' => 'required|',
            'quad' => 'required|',
            'paket_id' => 'required'
        ]);
        $k = new Jadwal;
        $k->tanggal = $request->tanggal;
        $k->durasi = $request->durasi;
        $k->quad = $request->quad;
        $k->paket_id = $request->paket_id;
        $k->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$k->tanggal</b>"
        ]);
        return redirect()->route('jadwal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $k = Jadwal::findOrFail($id);
        return view('jadwal.show',compact('k'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
        $k = Jadwal::findOrFail($id);
        $a = Paket::all();
        $selectedp = Jadwal::findOrFail($id)->paket_id;
        return view('jadwal.edit',compact('a','selectedp'));
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
            'tanggal' => 'required|',
            'durasi' => 'required|',
            'quad' => 'required|',
            'paket_id' => 'required',
        ]);
        $k = Paket::findOrFail($id);
        $k->tanggal = $request->tanggal;
        $k->durasi = $request->durasi;
        $k->quad = $request->quad;
        $k->paket_id = $request->paket_id;
        $k->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$k->tanggal</b>"
        ]);
        return redirect()->route('jadwal.index');
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
        return redirect()->route('jadwal.index');
    }
}