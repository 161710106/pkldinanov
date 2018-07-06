<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Syarat;
class SyaratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $syarats = Syarat::all();
        return view('syarat.index',compact('syarats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('syarat.create');
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
            'termasuk' => 'required|min:2',
            'tidak_termasuk' => 'required',
            'persyaratan' => 'required|max:25',
            'dp' => 'required|max:25'
           
        ]);

        $syarats = new Syarat;
        $syarats->termasuk = $request->termasuk;
        $syarats->tidak_termasuk = $request->tidak_termasuk;
        $syarats->persyaratan = $request->persyaratan;
        $syarats->dp = $request->dp;
        $syarats->save();
        return redirect()->route('syarat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $syarats = Syarat::findOrFail($id);
        return view('syarat.show',compact('syarats'));
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
        $syarats = Syarat::findOrFail($id);
        return view('syarat.edit',compact('syarats'));
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
            'termasuk' => 'required|min:2',
            'tidak_termasuk' => 'required',
            'persyaratan' => 'required|max:25',
            'dp' => 'required',
        ]);

        // update data berdasarkan id
        $syarats = Syarat::findOrFail($id);
        $syarats->termasuk = $request->termasuk;
        $syarats->tidak_termasuk = $request->tidak_termasuk;
        $syarats->persyaratan = $request->persyaratan;
        $syarats->dp = $request->dp;
        $syarats->save();
        return redirect()->route('syarat.index');
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
        $syarats = Syarat::findOrFail($id);
        $syarats->delete();
        return redirect()->route('syarat.index');  
    }
}

