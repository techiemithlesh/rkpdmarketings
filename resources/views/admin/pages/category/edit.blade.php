@extends('admin.layouts.master')

@section('title')
    <title>Update Category - RKPD MARKETINGS</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Category</h1>
            <a href="{{ route('category.list') }}" class="btn btn-primary">Back to List</a>
        </div>

        @include('admin.layouts.message')

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update Category</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')

                    <div class="row  align-items-center justify-content-between">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="category_name">Company Name</label>
                                <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" 
                                id="category_name" value="{{ $category->category_name }}" placeholder="Enter category name">
                                @error('category_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4 mt-2">
                            <button type="submit" class="btn btn-primary">Create Category</button>
                        </div>
                    </div>

                    

                    

                    
                </form>
            </div>
        </div>
    </div>
@endsection
