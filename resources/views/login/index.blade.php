@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mb-3 mt-5 pt-5">
      <div class="col-md-4">
        @if ((session()->has('success')))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if ((session()->has('loginError')))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
          <h3 class="text-center">Form Login</h3>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <form action="/login" method="post">
          @csrf
          <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address" autofocus required value="{{ old('email') }}">
            <label for="email">Email Address</label>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Login</button>
        </form>
        <small class="mt-3 d-block text-end">Not registered? <a href="/register" class="text-decoration-none text-danger">Register Now!</a></small>
      </div>
    </div>
@endsection