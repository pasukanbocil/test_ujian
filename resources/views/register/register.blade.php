@extends('login.main')
@section('login')
    <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
                <img src="{{ asset('Assets/img/stisla-fill.svg') }}" alt="logo" width="100"
                    class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
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
                <div class="card-header">
                    <h4>Register</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="/register">
                        @csrf
                        <div class="row">
                            <div class="form-group col-8">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control" name="name" autofocus>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-8">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-8">
                                <label for="password" class="d-block">Password</label>
                                <input id="password" type="password" class="form-control pwstrength" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg ">
                                Register
                            </button>
                        </div>
                    </form>
                    <small class="d-block text-center mt-3">Sudah Punya Akun? <a href="/">Login Disini!</a></small>
                </div>
            </div>
            <div class="simple-footer">
                Copyright &copy; Stisla 2024
            </div>
        </div>
    </div>
@endsection
