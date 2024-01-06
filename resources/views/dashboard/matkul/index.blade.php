@extends('dashboard.main')
@section('maincontent')
    <section class="section">
        <div class="section-header">
            <h1>Data MataKuliah</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif
                        <a href="/dashboard/matkul/create" class="btn btn-primary">Tambah MataKuliah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>
                                            No.
                                        </th>
                                        <th>Name </th>
                                        <th>Sks</th>
                                        <th>Prodi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matkuls as $matkul)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $matkul->matkul_name }}</td>
                                            <td>{{ $matkul->sks }}</td>
                                            <td>{{ $matkul->prodi->prodi_name }}</td>
                                            <td>
                                                <a href="/dashboard/matkul/{{ $matkul->id }}/edit"
                                                    class="btn btn-warning border-0 btn-sm">Edit</a>
                                                <form action="/matkul/{{ $matkul->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger border-0 btn-sm"
                                                        onclick="return confirm('Anda Yakin Ingin Menghapus Data')"><span
                                                            data-feather="x-circle"></span>Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
