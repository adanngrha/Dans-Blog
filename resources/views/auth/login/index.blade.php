@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-md-4">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <main class="form-signin">
            <form action="/login" method="POST">
                @csrf
                {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                <h1 class="h3 mb-5 fw-normal text-center mt-5 ">Please Sign in</h1>

                <div class="form-floating">
                <input type="text" class="form-control @error('username')
                    is-invalid
                @enderror" id="username" placeholder="Your username" name="username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                <label for="floatingPassword">Password</label>
                </div>

                {{-- <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                </div> --}}
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center mt-4">
                Not registered yet? <a href="/register">Register Now.</a>
            </small>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2017–2021</p>
            </main>
        </div>
    </div>

@endsection
