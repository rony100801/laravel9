@extends('layouts.main')

@section('container')

  <div class="row justify-content-center my-4">
    <div class="col-md-8">
      <h2>{{ $post->title }}</h2>

      <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

      @if($post->image)
        <div style="max-height: 400px; overflow: hidden;">
          <img src="{{ URL::asset('storage/'. $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
        </div>
      @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
      @endif

      <article class="my-3 fs-6">
        {!! $post->body !!}
      </article>
      <a href="/posts">Back To Posts</a>
    </div>
  </div>
  
@endsection
