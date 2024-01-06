<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('dashboard.mahasiswa.index', [
            'title' => 'Mahasiswa',
            'mahasiswas' => Mahasiswa::all(),
        ]);
    }

    public function create()
    {
        return view('dashboard.mahasiswa.create', [
            'title' => 'Tambah Mahasiswa',
            'prodis' => Prodi::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'nim' => 'required|numeric',
            'prodi_id' => 'required'
        ]);

        Mahasiswa::create($request->all());

        return redirect('/dashboard/mahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        return view('dashboard.mahasiswa.edit', [
            'title' => 'Edit Mahasiswa',
            'prodis' => Prodi::all(),
            'mahasiswa' => Mahasiswa::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'nim' => 'required|numeric',
            'prodi_id' => 'required'
        ]);

        Mahasiswa::where('id', $id)
            ->update([
                'name' => $request->name,
                'nim' => $request->nim,
                'prodi_id' => $request->prodi_id
            ]);

        return redirect('/dashboard/mahasiswa')->with('success', 'Data mahasiswa berhasil diubah!');
    }

    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return redirect('/dashboard/mahasiswa')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
