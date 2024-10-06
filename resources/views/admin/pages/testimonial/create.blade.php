@extends('admin.layouts.master')

@section('title')
    <title>Add Testimonial - RKPDMARKETING</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add New Testimonial</h1>
            <a href="{{ route('testimonial.list') }}" class="btn btn-primary">Back to List</a>
        </div>

        @include('admin.layouts.message')

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Testimonial</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <!-- Title Field -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Category</label>
                                <select name="title" required id="title" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                                @error('title')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Client Name Field -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="client_name">Client Name</label>
                                <input type="text" name="client_name" class="form-control @error('client_name') is-invalid @enderror" id="client_name" value="{{ old('client_name') }}" placeholder="Client's Full Name">
                                @error('client_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Company Name Field -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company_name">Company Name</label>
                                <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror" id="company_name" value="{{ old('company_name') }}" placeholder="Client's Company">
                                @error('company_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Client Position Field -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="client_position">Client Position</label>
                                <input type="text" name="client_position" class="form-control @error('client_position') is-invalid @enderror" id="client_position" value="{{ old('client_position') }}" placeholder="Position in Company">
                                @error('client_position')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Rating Field -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="rating_count">Rating (1-5)</label>
                                <input type="number" name="rating_count" class="form-control @error('rating_count') is-invalid @enderror" id="rating_count" value="{{ old('rating_count') }}" min="1" max="5">
                                @error('rating_count')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Location Field -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" id="location" value="{{ old('location') }}" placeholder="City, Country">
                                @error('location')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Description Field -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="4" placeholder="Enter Testimonial Description">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Image Upload with Preview -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="img">Client Image</label>
                                <input type="file" name="img" class="form-control-file @error('img') is-invalid @enderror" id="img" onchange="previewImage(event)">
                                <small class="form-text text-muted">Recommended size: 300x300px</small>
                                @error('img')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Image Preview -->
                        <div class="col-md-6">
                            <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100%; height: auto;">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Testimonial</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.style.display = 'block'; // Show the preview image
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
