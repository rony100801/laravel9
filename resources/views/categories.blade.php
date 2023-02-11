@extends('layouts.main')

@section('container')
  <div class="row">
    <div class="col">
      <h2>{{ $title }}</h2>
    </div>
  </div>

  <div class="row">
    @foreach ($categories as $category)
    <div class="col-md-4 mb-3">
      <a href="/posts?category={{ $category->slug }}">
        <div class="card text-bg-dark">
          <img src="https://source.unsplash.com/500x300?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
          <div class="card-img-overlay d-flex align-items-center justify-content-center p-0">
            <h4 class="card-title flex-fill p-4 text-center" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h4>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
@endsection