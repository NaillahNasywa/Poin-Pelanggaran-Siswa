<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggaran;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggaran = Pelanggaran::all();
        return view("pelanggaran.index", compact("pelanggaran")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggaran = Pelanggaran::all();
        return view('pelanggaran.tb_create',['pelanggaran' => $pelanggaran,"title"=>"pelanggaran"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenispelanggaran'=>'required',
            'tindakan'=>'required',
            'jmlh_point'=>'required',
         ]);
 
         $input =$request->all();
         Pelanggaran::create($input);
 
         return redirect('/pelanggaran')
          ->with('success', 'Student data created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggaran = Pelanggaran::findOrFail($id);
        return view('pelanggaran.tb_edit', compact(['pelanggaran']),["title"=>"pelanggaran"]);
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
        $pelanggaran = Pelanggaran::findOrFail($id);
        $pelanggaran->update($request->all());

        return redirect('pelanggaran')->with('success', 'data update sucecsfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelangaran = Pelanggaran::findOrFind($id)->delete();
        return redirect()->route('pelanggaran.index')
            ->with('success','siswa deleted successfully');
    }
}
