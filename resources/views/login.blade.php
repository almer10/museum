@extends('layouts.login')
@section('login')
    <div id="login">
        <div class="container p-5">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Login Admin</h4>
                        <h6 class="card-text">Museum prabu geusan ulun</h6>
                        <form method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan NIP">
                                @error('username')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Kata Sandi">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="btn-login">
                                <a href="/dashboard">
                                    <button type="submit" class="btn btn-warning text-white">Login</button>
                                </a>
                                @error('noAuth')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
