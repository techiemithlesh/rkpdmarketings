@extends('admin.layouts.master')

@section('title')
    <title>Edit Portfolio - InvestorBhai</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Portfolio</h1>
            <a href="{{ route('portfolio.list') }}" class="btn btn-primary">Back to List</a>
        </div>

        @include('admin.layouts.message')

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Portfolio</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <!-- Title Field -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror" id="title"
                                    value="{{ old('title', $portfolio->title) }}" placeholder="Enter Portfolio Title">
                                @error('title')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Category Field -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $portfolio->category_id ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
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
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                                    rows="4" placeholder="Enter Portfolio Description">{{ old('description', $portfolio->description) }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Live URL Field -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="live_url">Live URL</label>
                                <input type="url" name="live_url" class="form-control @error('live_url') is-invalid @enderror" id="live_url"
                                    value="{{ old('live_url', $portfolio->live_url) }}" placeholder="Enter Live URL (optional)">
                                @error('live_url')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Image Upload -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Portfolio Image</label>
                                <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" id="image" onchange="previewImage(event)">
                                @error('image')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror

                                @if($portfolio->image)
                                    <img id="imagePreview" src="{{ asset( $portfolio->image) }}" alt="Current Image" style="max-width: 100%; height: auto; margin-top: 10px;">
                                @else
                                    <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100%; height: auto; margin-top: 10px;">
                                @endif
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Portfolio</button>
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
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
