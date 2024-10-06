@extends('admin.layouts.master')

@section('title')
    <title>Testimonial List - RKPDMARKETING</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Testimonials</h1>
            <a href="{{ route('testimonial.create') }}" class="btn btn-primary">Add New Testimonial</a>
        </div>

        @include('admin.layouts.message')

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Testimonial List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Rating</th>
                                <th>Client Name</th>
                                <th>Company Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $testimonial->id }}</td>
                                    <td>{{ $testimonial->title }}</td>
                                    <td>{{ Str::limit($testimonial->description, 50) }}</td>
                                    <td>
                                        @if($testimonial->img)
                                            <img src="{{ asset($testimonial->img) }}" alt="Image" style="width: 50px; height: 50px;">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>{{ $testimonial->rating_count }}/5</td>
                                    <td>{{ $testimonial->client_name }}</td>
                                    <td>{{ $testimonial->company_name }}</td>
                                    <td>
                                        <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('testimonial.delete', $testimonial->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this testimonial?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $testimonials->links() }}
            </div>
        </div>
    </div>
@endsection
