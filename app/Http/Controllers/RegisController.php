<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\PDF;

class RegisController extends Controller
{
    public function index(){

        return view('Regis.index', [
            'regiss' => DB::table('siswa')->orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(Request $request)
    {
        DB::table('siswa')->insert([
            'noReg' => $request->noReg,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'asal' => $request->asal,
            'jurusan' => $request->jurusan,
        ]);

        return redirect()->back()->with('success', 'Registrasi Berhasil Di Kirim!');
    }

    public function edit($id){

        $regi = DB::table('siswa')->where('id', $id)->first();
        return view('Regis.edit', ['regi' => $regi]);

    }

    public function update(Request $request, $id){
        DB::table('siswa')->where('id', $id)->update([
            'noReg' => $request->noReg,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'asal' => $request->asal,
            'jurusan' => $request->jurusan,
        ]);
        return redirect('/regis')->with('success', 'Data Registrasi Berhasil Di Edit!');
    }

    public function destroy($id)
    {
        DB::table('siswa')->where('id', $id)->delete();
        return back()->with('danger', 'Data Registrasi Berhasil Di Hapus!');
    }

    public function cetak($id){

        $regi = DB::table('siswa')->where('id', $id)->first();
        return view('Regis.cetak', compact('regi'));
    }
}
