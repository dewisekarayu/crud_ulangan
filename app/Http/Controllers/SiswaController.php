<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index() {
        $data = Siswa::all();
        return view('siswa.index', compact('data'));
    }

    public function create() {
        return view('siswa.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'nilai' => 'required|numeric',
        ]);

        Siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit($id) {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus');
    }
}
