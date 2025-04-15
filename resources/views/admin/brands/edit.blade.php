@extends('admin.layouts.app')

@section('css')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>{{ $pageTitle }}</h3>
                    {{ Breadcrumbs::render('admin.brands.edit', $brand) }}
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-sm-12">
                <div class="card">
                    <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data"
                        class="form theme-form">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Brand Title</label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ old('title', $brand->title) }}" placeholder="Enter brand title">
                                        @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Slug</label>
                                        <input type="text" name="slug" class="form-control"
                                            value="{{ old('slug', $brand->slug) }}" placeholder="Enter slug">
                                        @error('slug')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Image</label>
                                        <input type="file" name="image" class="form-control">
                                        @if ($brand->image)
                                            <img src="{{ asset('assets/uploads/brands/' . $brand->image) }}" class="mt-2"
                                                width="100">
                                        @endif
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Short Content</label>
                                        <input type="text" name="short_content" class="form-control"
                                            value="{{ old('short_content', $brand->short_content) }}"
                                            placeholder="Enter short content">
                                        @error('short_content')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Content</label>
                                        <textarea name="content" class="form-control" rows="5" placeholder="Enter content">{{ old('content', $brand->content) }}</textarea>
                                        @error('content')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Author</label>
                                        <input type="text" name="author" class="form-control"
                                            value="{{ old('author', $brand->author) }}" placeholder="Enter author name">
                                        @error('author')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Author Image</label>
                                        <input type="file" name="author_image" class="form-control">
                                        @if ($brand->author_image)
                                            <img src="{{ asset('assets/uploads/brands/' . $brand->author_image) }}"
                                                class="mt-2" width="100">
                                        @endif
                                        @error('author_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="draft"
                                                {{ old('status', $brand->status) == 'draft' ? 'selected' : '' }}>Draft
                                            </option>
                                            <option value="published"
                                                {{ old('status', $brand->status) == 'published' ? 'selected' : '' }}>
                                                Published</option>
                                            <option value="archived"
                                                {{ old('status', $brand->status) == 'archived' ? 'selected' : '' }}>Archived
                                            </option>
                                        </select>
                                        @error('status')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Update Brand</button>
                            <a href="{{ route('admin.brands.index') }}" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('js')
@endsection
