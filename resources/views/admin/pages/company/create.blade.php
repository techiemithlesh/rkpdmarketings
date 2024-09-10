@extends('admin.layouts.master')

@section('title')
    <title>Create Company - InvestorBhai</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Company</h1>
            <a href="{{ route('admin.company.list') }}" class="btn btn-primary">Back to List</a>
        </div>

        @include('admin.layouts.message')

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Company</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.company.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="company_name">Company Name</label>
                        <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror" id="company_name" value="{{ old('company_name') }}" placeholder="Enter company name">
                        @error('company_name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="company_logo">Company Logo</label>
                        <input type="file" name="company_logo" class="form-control-file @error('company_logo') is-invalid @enderror" id="company_logo">
                        @error('company_logo')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Company</button>
                </form>
            </div>
        </div>
    </div>
@endsection
