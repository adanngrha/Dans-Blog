@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
            <form action="/register" method="POST">
                @csrf
                {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                <h1 class="h3 mb-5 fw-normal text-center mt-5 ">Registration Form</h1>

                <div class="form-floating">
                <input type="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Your Full Name" name="name" value="{{ old('name') }}">  <label for="name">Full Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="form-floating">
                <input type="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" value="{{ old('usernamw') }}">  <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="form-floating">
                <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                {{-- <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                </div> --}}
                <button class="w-100 btn btn-lg btn-primary mt-3 mb-2" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-4">
                Already have an account? <a href="/login">Sign in</a>
            </small>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2017–2021</p>
            </main>
        </div>
    </div>

@endsection
