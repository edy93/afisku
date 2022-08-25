@extends('manajemen.auth.layouts.app')

@section('title', 'Halaman Login')

@section('content')
    <div class="card card-primary">
        <div class="card-header text-center">
            <h4>{{ config('app.description') }}</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" placeholder="Username"
                        tabindex="1" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    <div class="invalid-feedback">
                        Masukkan username Anda!
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Kata Sandi</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password"
                        tabindex="2" required autocomplete="current-password">
                    <div class="invalid-feedback">
                        Masukkan kata sandi!
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Masuk
                    </button>
                </div>
                @if ($errors->any())
                    <div class="text-center p-t-12 text-danger">
                        <span class="txt2">
                            @foreach ($errors->all() as $error)
                                <p class="mb-2">{{ $error }}</p>
                            @endforeach
                        </span>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
