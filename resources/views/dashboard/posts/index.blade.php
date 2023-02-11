@extends('dashboard.layouts.main')

@section('container')
	<div class="row mt-3">
		<div class="col">
			<h2>My Post</h2>
		</div>
	</div>
	@if(session()->has('success'))
	<div class="row">
		<div class="col-md-6">
			<div class="alert alert-success" role="alert">
				{{ session('success') }}
			</div>
		</div>
	</div>
	@endif
	<div class="row my-3">
		<div class="col">
			<a href="/dashboard/posts/create" class="btn btn-danger">
        Create New Post
      </a>
		</div>
	</div>
	<div class="table-responsive col-lg-8">
		<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Title</th>
					<th scope="col">Category</th>
					<th scope="col">Created At</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($posts as $post)		
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $post->title }}</td>
					<td>{{ $post->category->name }}</td>
					<td>{{ $post->created_at->isoFormat('D MMMM Y') }} ({{ $post->created_at->diffForHumans() }})</td>
					<td>
						<a href="/dashboard/posts/{{ $post->slug }}" class="badge text-bg-primary"><span data-feather="eye"></span></a>

						<a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge text-bg-success"><span data-feather="edit"></span></a>

						<form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="badge text-bg-danger border-0" onclick="return confirm('Are you sure?')">
                <span data-feather="x-circle"></span>
              </button>
            </form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection