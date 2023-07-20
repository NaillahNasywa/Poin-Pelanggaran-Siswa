<?php

namespace App\Http\Controllers;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use App\Models\Pelanggaran_siswa;

use Illuminate\Http\Request;

class Pelanggaran_siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggaran_siswa = Pelanggaran_siswa::with('pelanggaran','siswa')->get();
        return view('pelanggaran_siswa.index', compact('pelanggaran_siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggaran_siswa= pelanggaran_siswa::all();
        $siswa= Siswa::all();
        $pelanggaran = Pelanggaran::all();
        return view('pelanggaran_siswa.tb_create', ['pelanggaran_siswa'=>$pelanggaran_siswa,'siswa'=>$siswa,'pelanggaran'=>$pelanggaran]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa_id = $request->siswa_id;
        $pelanggaran_id = $request->pelanggaran_id;
        $data = $request->all();
        $siswa = Siswa::findOrFail($siswa_id);
        $pelanggaran = Pelanggaran::findOrFail($pelanggaran_id);
        $pointS = $siswa->point;
        $pointP = $pelanggaran->jmlh_point;
        $pointS+=$pointP;
        if($data) {
            $siswa->update([
                'point' =>$pointS
            ]);
        }

        Pelanggaran_siswa::create($data);
        return redirect('pelanggaran_siswa')->with('success','laporan data created succesfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
