@extends('dashboard.layouts.main')

@section('container')
	<div class="row mt-3">
		<div class="col">
			<h2>Post Categories</h2>
		</div>
	</div>

	@if(session()->has('success'))
	<div class="row">
		<div class="col-lg-6">
			<div class="alert alert-success" role="alert">
				{{ session('success') }}
			</div>
		</div>
	</div>
	@endif

	<div class="row my-3">
		<div class="col">
			<a href="/dashboard/categories/create" class="btn btn-danger">
        Create New Category
      </a>
		</div>
	</div>

	<div class="table-responsive col-lg-6">
		<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Category Name</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($categories as $category)		
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $category->name }}</td>
					<td>
						<a href="/dashboard/categories/{{ $category->slug }}" class="badge text-bg-primary"><span data-feather="eye"></span></a>

						<a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge text-bg-success"><span data-feather="edit"></span></a>

						<form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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