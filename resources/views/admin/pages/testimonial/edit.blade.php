@extends('admin.layouts.master')

@section('title')
    <title>Edit Testimonial - InvestorBhai</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Testimonial</h1>
            <a href="{{ route('testimonial.list') }}" class="btn btn-primary">Back to List</a>
        </div>

        @include('admin.layouts.message')

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update Testimonial</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <!-- Title Field -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="title" class="form-control @error('category_name') is-invalid @enderror" id="category" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->category_name }}" {{ old('title') == $category->category_name ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        


                        <!-- Description Field -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                                    rows="4" placeholder="Enter Description">{{ old('description', $testimonial->description) }}</textarea>
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
                                <label for="img">Portfolio Image</label>
                                <input type="file" name="img"
                                    class="form-control-file @error('img') is-invalid @enderror" id="img"
                                    onchange="previewImage(event)">
                                @error('img')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Image Preview -->
                        <div class="col-md-6">
                            @if ($testimonial->img)
                                <img id="imagePreview" src="{{ asset($testimonial->img) }}" alt="Image Preview"
                                    style="width: 100px; height: 100px; display: block;">
                            @else
                                <img id="imagePreview" src="#" alt="Image Preview" style="display: none;">
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <!-- Rating Count Field -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="rating_count">Rating</label>
                                <input type="number" name="rating_count" min="1" max="5"
                                    class="form-control @error('rating_count') is-invalid @enderror" id="rating_count"
                                    value="{{ old('rating_count', $testimonial->rating_count) }}" required
                                    placeholder="Enter Rating">
                                @error('rating_count')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Client Name Field -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="client_name">Client Name</label>
                                <input type="text" name="client_name"
                                    class="form-control @error('client_name') is-invalid @enderror" id="client_name"
                                    value="{{ old('client_name', $testimonial->client_name) }}"
                                    placeholder="Enter Client Name">
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
                                <input type="text" name="company_name"
                                    class="form-control @error('company_name') is-invalid @enderror" id="company_name"
                                    value="{{ old('company_name', $testimonial->company_name) }}"
                                    placeholder="Enter Company Name">
                                @error('company_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Testimonial</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.style.display = 'block'; // Show the preview image
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
