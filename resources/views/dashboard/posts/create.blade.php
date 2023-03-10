@extends('dashboard.layouts.main')

@section('container')
  <div class="row mt-4">
    <div class="col">
      <h2>Create New Post</h2>
    </div>
  </div>
  <hr>
  <div class="row mb-4">
    <div class="col-lg-8">
      <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
          @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select name="category_id" id="category" class="form-select">
            @foreach ($categories as $category)
              @if (old('category_id') == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          <img src="" alt="" class="img-fluid img-preview mb-3 col-sm-5">
          <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          @error('body')
            <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="body" type="hidden" name="body" value="{{ old('body') }}">
          <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="btn btn-danger">Create Post</button>

      </form>
    </div>
  </div>

<script>
  const title = document.querySelector('#title')
  const slug = document.querySelector('#slug')
  title.addEventListener('keyup', function(){
    let preslug = title.value
    preslug = preslug.replace(/ /g, "-")
    slug.value = preslug.toLowerCase()
  })

  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault()
  })

  function previewImage()
  {
    const image = document.querySelector('#image')
    const imgPreview = document.querySelector('.img-preview')

    imgPreview.style.display = 'block';

    const oFReader = new FileReader()
    oFReader.readAsDataURL(image.files[0])

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }


</script>
@endsection