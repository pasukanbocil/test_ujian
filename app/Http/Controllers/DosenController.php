<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return view('dashboard.dosen.index', [
            'title' => 'Dosen',
            'dosens' => Dosen::all(),
        ]);
    }

    public function create()
    {
        return view('dashboard.dosen.create', [
            'title' => 'Tambah Dosen',
            'prodis' => Prodi::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'nip' => 'required|numeric',
            'prodi_id' => 'required'
        ]);

        Dosen::create($request->all());

        return redirect('/dashboard/dosen')->with('success', 'Data dosen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        return view('dashboard.dosen.edit', [
            'title' => 'Edit Dosen',
            'prodis' => Prodi::all(),
            'dosen' => Dosen::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'nip' => 'required|numeric',
            'prodi_id' => 'required'
        ]);

        Dosen::where('id', $id)
            ->update([
                'name' => $request->name,
                'nip' => $request->nip,
                'prodi_id' => $request->prodi_id
            ]);

        return redirect('/dashboard/dosen')->with('success', 'Data dosen berhasil diubah!');
    }

    public function destroy($id)
    {
        Dosen::destroy($id);
        return redirect('/dashboard/dosen')->with('success', 'Data dosen berhasil dihapus!');
    }
}
