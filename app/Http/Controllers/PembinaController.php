<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembina;
class PembinaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $pembinas = Pembina::all();
        return view('pembina.index',compact('pembinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembina.create');
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
            'nama' => 'required|min:2',
            'jabatan' => 'required|max:255',
           
           
        ]);

        $pembinas = new Pembina;
        $pembinas->nama = $request->nama;
        $pembinas->jabatan = $request->jabatan;
       
        $pembinas->save();
        return redirect()->route('pembina.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembinas = Pembina::findOrFail($id);
        return view('pembina.show',compact('pembinas'));
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
        $pembinas = Pembina::findOrFail($id);
        return view('pembina.edit',compact('pembinas'));
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
            'nama' => 'required|min:2',
            'jabatan' => 'required|max:255',
            
        ]);

        // update data berdasarkan id
        $pembinas = Pembina::findOrFail($id);
        $pembinas->nama = $request->nama;
        $pembinas->jabatan = $request->jabatan;
       
        $pembinas->save();
        return redirect()->route('pembina.index');
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
        $pembinas = Pembina::findOrFail($id);
        $pembinas->delete();
        return redirect()->route('pembina.index');  
    }
}
