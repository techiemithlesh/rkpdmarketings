@extends('admin.layouts.master')

@section('title')
    <title>Company - RKPD MARKETING</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Company</h1>
            <a href="{{ route('admin.company.create') }}" class="btn btn-primary">Create</a>
        </div>

        @include('admin.layouts.message')

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List of Companies</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Company Name</th>
                                <th>Company Logo</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($companies as $key => $company)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $company->company_name }}</td>
                                    <td>
                                        <img src="{{ asset($company->company_logo) }}" alt="{{ $company->company_name }}" width="50" height="50">
                                    </td>
                                    <td>{{ $company->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>{{ $company->created_at->format('d-m-Y H:i') }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.company.edit', $company->id) }}" class="btn btn-success" title="Edit Company">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admin.company.delete', $company->id) }}" class="btn btn-danger" title="Delete Company" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $company->id }}').submit();">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $company->id }}" action="{{ route('admin.company.delete', $company->id) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No companies found!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        {{ $companies->onEachSide(2)->links() }}
                    </div>
                    <div class="col-lg-4 col-md-12 text-right">
                        <h5 class="summary mt-2 pr-1">Showing {{ $companies->firstItem() }} to {{ $companies->lastItem() }} of {{ $companies->total() }} Companies</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
