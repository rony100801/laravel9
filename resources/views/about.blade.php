@extends('layouts.main')

@section('container')
  <h1>Halaman About</h1>
  <h3>Biodata</h3>
  <ul>
    <li>Name    : {{ $name }}</li>
    <li>Email   : {{ $email }}</li>
    <li>jurusan : {{ $jurusan }}</li>
  </ul>
@endsection