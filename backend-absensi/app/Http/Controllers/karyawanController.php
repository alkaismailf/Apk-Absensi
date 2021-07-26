<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class karyawanController extends Controller
{
    public function index() 
    {
        $data_karyawan = \App\Karyawan::all();
        return view('karyawan.index', ['data_karyawan' => $data_karyawan]);
    }

    public function create(Request $request) 
    {
        \App\Karyawan::create($request->all());
        return redirect('/karyawan')->with('sukses', 'Data berhasil ditambahkan!');
    }

    public function edit($id) 
    {
        $karyawan = \App\Karyawan::find($id);
        return view('karyawan.edit', ['karyawan' => $karyawan]);
    }

    public function update(Request $request, $id) 
    {
        $karyawan = \App\Karyawan::find($id);
        $karyawan->update($request->all());
        return redirect('/karyawan')->with('sukses', 'Data berhasil diubah!');
    }

    public function delete($id) 
    {
        $karyawan = \App\Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan')->with('sukses', 'Data berhasil dihapus!');
    }
}