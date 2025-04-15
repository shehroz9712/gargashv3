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
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <td>{{ $brand->id }}</td>
                                            <td>{{ $brand->title }}</td>
                                            <td>{{ $brand->author ?? 'Unknown' }}</td>
                                            <td>{{ ucfirst($brand->status) }}</td>
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
