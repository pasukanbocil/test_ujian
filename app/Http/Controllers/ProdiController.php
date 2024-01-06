<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        return view('dashboard.prodi.index', [
            'title' => 'Prodi',
            'prodis' => Prodi::all(),
        ]);
    }

    public function create()
    {
        return view('dashboard.prodi.create', [
            'title' => 'Tambah Prodi'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'prodi_name' => 'required|max:255'
        ]);

        Prodi::create($request->all());

        return redirect('/dashboard/prodi')->with('success', 'Data prodi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        return view('dashboard.prodi.edit', [
            'title' => 'Edit Prodi',
            'prodi' => Prodi::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'prodi_name' => 'required|max:255'
        ]);

        Prodi::where('id', $id)
            ->update([
                'prodi_name' => $request->prodi_name
            ]);

        return redirect('/dashboard/prodi')->with('success', 'Data prodi berhasil diubah!');
    }

    public function destroy($id)
    {
        Prodi::destroy($id);
        return redirect('/dashboard/prodi')->with('success', 'Data prodi berhasil dihapus!');
    }
}
