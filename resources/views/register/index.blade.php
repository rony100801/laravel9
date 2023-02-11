@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mb-3 mt-5 pt-5">
      <div class="col-md-5">
          <h3 class="text-center">Form Registrasi</h3>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-5">
        <form action="/register" method="post">
          @csrf
          <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}">
            <label for="username">Username</label>
            @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email Address" value="{{ old('email') }}">
            <label for="email">Email Address</label>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          
          <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Register</button>
        </form>
        <small class="mt-3 d-block text-end">Already register? <a href="/login" class="text-decoration-none text-danger">Login!</a></small>
      </div>
    </div>
@endsection