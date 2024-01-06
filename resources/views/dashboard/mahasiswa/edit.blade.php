@extends('dashboard.main')
@section('maincontent')
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Mahasiswa</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <form action="/mahasiswa/{{ $mahasiswa->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name </label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name', $mahasiswa->name) }}">
                                </div>
                                <div class="form-group">
                                    <label for="nim">Nim</label>
                                    <input type="text" name="nim" id="nim" class="form-control"
                                        value="{{ old('nim', $mahasiswa->nim) }}">
                                </div>
                                <div class="form-group">
                                    <label for="prodi_id">Prodi</label>
                                    <select class="form-control" name="prodi_id" id="prodi_id">
                                        @foreach ($prodis as $prodi)
                                            <option value="{{ $prodi->id }}"
                                                {{ old('prodi_id', $mahasiswa->prodi_id) == $prodi->id ? 'selected' : '' }}>
                                                {{ $prodi->prodi_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
