@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>{{ $pageTitle }}</h3>
                    {{ Breadcrumbs::render('admin.brands.index') }}
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.brands.create') }}" class="btn btn-primary">Add Brand</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Brand Name</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $index => $brand)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $brand->name }}</td>
                                            <td>{{ $brand->category->name }}</td>
                                            <td>
                                                @if ($brand->status == 'published')
                                                    <span class="badge bg-success">Published</span>
                                                @elseif ($brand->status == 'draft')
                                                    <span class="badge bg-warning">Draft</span>
                                                @else
                                                    <span class="badge bg-secondary">Archived</span>
                                                @endif
                                            </td>
                                            <td>{{ $brand->created_at->format('d M, Y') }}</td>

                                            <td>
                                                <a href="{{ route('admin.brands.show', $brand->id) }}" class="action-btn"><i
                                                        class="fa fa-eye"></i></a>
                                                <a href="{{ route('admin.brands.edit', $brand->id) }}" class="action-btn"><i
                                                        class="fa fa-pencil-square-o"></i></a>

                                                <form id="delete-form-{{ $brand->id }}"
                                                    action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <a href="#" class="action-btn"
                                                    onclick="event.preventDefault(); if(confirm('Are you sure?')) document.getElementById('delete-form-{{ $brand->id }}').submit();"
                                                    class="text-danger">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
@section('js')
@endsection
