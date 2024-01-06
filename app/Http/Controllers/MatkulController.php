<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
        return view('dashboard.matkul.index', [
            'title' => 'Matkul',
            'matkuls' => Matkul::all(),
        ]);
    }

    public function create()
    {
        return view('dashboard.matkul.create', [
            'title' => 'Tambah Matkul',
            'prodis' => Prodi::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'matkul_name' => 'required|max:255',
            'sks' => 'required|numeric',
            'prodi_id' => 'required'
        ]);

        Matkul::create($request->all());

        return redirect('/dashboard/matkul')->with('success', 'Data matkul berhasil ditambahkan!');
    }

    public function edit($id)
    {
        return view('dashboard.matkul.edit', [
            'title' => 'Edit Matkul',
            'prodis' => Prodi::all(),
            'matkul' => Matkul::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'matkul_name' => 'required|max:255',
            'sks' => 'required|numeric',
            'prodi_id' => 'required'
        ]);

        Matkul::where('id', $id)
            ->update([
                'matkul_name' => $request->matkul_name,
                'sks' => $request->sks,
                'prodi_id' => $request->prodi_id
            ]);

        return redirect('/dashboard/matkul')->with('success', 'Data matkul berhasil diubah!');
    }

    public function destroy($id)
    {
        Matkul::destroy($id);
        return redirect('/dashboard/matkul')->with('success', 'Data matkul berhasil dihapus!');
    }
}
