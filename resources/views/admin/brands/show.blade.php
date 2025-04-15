@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>{{ $pageTitle }}</h3>
                    {{ Breadcrumbs::render('admin.brands.show', $brand) }}
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Brand Details
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Title</th>
                                        <td>{{ $brand->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Author</th>
                                        <td>{{ $brand->author ?? 'Unknown' }}</td>
                                    </tr>
                                    @if ($brand->image)
                                        <tr>
                                            <th>Author</th>
                                            <td>
                                                <img src="{{ asset('assets/uploads/brands/' . $brand->author_image) }}"
                                                    alt="Brand Image" class="img-fluid rounded shadow"
                                                    style="max-width: 200px;">
                                            </td>
                                        </tr>
                                    @else
                                        <p>No image available</p>
                                    @endif
                                    <tr>
                                        <th>Slug</th>
                                        <td>{{ $brand->slug }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            @if ($brand->status === 'published')
                                                <span class="badge bg-success">Published</span>
                                            @elseif ($brand->status === 'draft')
                                                <span class="badge bg-warning">Draft</span>
                                            @else
                                                <span class="badge bg-secondary">Archived</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Created At</th>
                                        <td>{{ $brand->created_at->format('d M, Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Content</th>
                                        <td>{!! $brand->content !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td>
                                            @if ($brand->image)
                                                <img src="{{ asset('assets/uploads/brands/' . $brand->image) }}"
                                                    alt="Brand Image" class="img-fluid rounded shadow"
                                                    style="max-width: 200px;">
                                            @else
                                                <p>No image available</p>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('admin.brands.index') }}" class="btn btn-secondary">Back to List</a>
                            <a href="{{ route('admin.brands.edit', $brand->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this brand?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                s
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
@section('js')
@endsection
