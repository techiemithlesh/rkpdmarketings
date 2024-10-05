@extends('admin.layouts.master')

@section('title')
    <title>Portfolio List - InvestorBhai</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Portfolios</h1>
            <a href="{{ route('portfolio.create') }}" class="btn btn-primary">Create Portfolio</a>
        </div>

        @include('admin.layouts.message')

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List of Portfolios</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Live URL</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($portfolios as $key => $portfolio)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $portfolio->title }}</td>
                                    <td>{{ $portfolio->category->category_name }}</td> <!-- assuming category relationship is set -->
                                    <td>
                                        @if($portfolio->live_url)
                                            <a href="{{ $portfolio->live_url }}" target="_blank">Visit Site</a>
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-success" title="Edit Portfolio">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('portfolio.delete', $portfolio->id) }}" class="btn btn-danger" title="Delete Portfolio" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $portfolio->id }}').submit();">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $portfolio->id }}" action="{{ route('portfolio.delete', $portfolio->id) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No portfolios found!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        {{ $portfolios->onEachSide(2)->links() }}
                    </div>
                    <div class="col-lg-4 col-md-12 text-right">
                        <h5 class="summary mt-2 pr-1">Showing {{ $portfolios->firstItem() }} to {{ $portfolios->lastItem() }} of {{ $portfolios->total() }} Portfolios</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
