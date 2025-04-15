@extends('admin.layouts.app')

@section('css')
    <style>
        .form-label {
            font-weight: bold;
        }

        .card-body {
            padding: 30px;
        }

        .section-wrapper {
            margin-top: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Create Brand</h3>
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
                    <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data"
                        class="form theme-form">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <!-- Brand Title -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Brand Title</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name') }}" placeholder="Enter brand title">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Slug -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Slug</label>
                                        <input type="text" name="slug" class="form-control"
                                            value="{{ old('slug') }}" placeholder="Enter slug">
                                        @error('slug')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Category Dropdown -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <select name="category_id" class="form-control">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- User Dropdown -->
                               

                                <!-- Image -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Image</label>
                                        <input type="file" name="image" class="form-control">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Heading -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Brand Heading</label>
                                        <input type="text" name="heading" class="form-control"
                                            value="{{ old('heading') }}" placeholder="Enter brand heading">
                                        @error('heading')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Brand Description</label>
                                        <textarea name="description" class="form-control" rows="5" placeholder="Enter brand description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft
                                            </option>
                                            <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>
                                                Published</option>
                                            <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>
                                                Archived</option>
                                        </select>
                                        @error('status')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <!-- Sections (Optional) -->
                            <div class="section-wrapper">
                                <h4>Brand Sections</h4>
                                <div id="sections-container">
                                    <!-- Section 1 -->
                                    <div class="section-item">
                                        <div class="row">
                                            <!-- Section Heading -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Section Heading</label>
                                                    <input type="text" name="sections[0][heading]" class="form-control"
                                                        placeholder="Enter section heading">
                                                </div>
                                            </div>

                                            <!-- Section Description -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Section Description</label>
                                                    <textarea name="sections[0][description]" class="form-control" rows="3" placeholder="Enter section description"></textarea>
                                                </div>
                                            </div>

                                            <!-- Section Link -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Section Link</label>
                                                    <input type="text" name="sections[0][link]" class="form-control"
                                                        placeholder="Enter section link">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="add-section-btn" class="btn btn-secondary">Add
                                    Section</button>
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Create Brand</button>
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
    <script>
        let sectionCount = 1;

        document.getElementById('add-section-btn').addEventListener('click', function() {
            const sectionContainer = document.createElement('div');
            sectionContainer.classList.add('section-item');
            sectionContainer.innerHTML = `
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Section Heading</label>
                            <input type="text" name="sections[${sectionCount}][heading]" class="form-control" placeholder="Enter section heading">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Section Description</label>
                            <textarea name="sections[${sectionCount}][description]" class="form-control" rows="3" placeholder="Enter section description"></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Section Link</label>
                            <input type="text" name="sections[${sectionCount}][link]" class="form-control" placeholder="Enter section link">
                        </div>
                    </div>
                </div>
            `;

            document.getElementById('sections-container').appendChild(sectionContainer);
            sectionCount++;
        });
    </script>
@endsection
