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

        .section-item {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            position: relative;
        }

        .remove-section {
            position: absolute;
            top: 10px;
            right: 10px;
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

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data"
                        class="form theme-form">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <!-- Brand Fields -->
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
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Slug</label>
                                        <input type="text" name="slug" class="form-control"
                                            value="{{ old('slug') }}" placeholder="Enter slug" readonly>
                                        @error('slug')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
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
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Brand Image</label>
                                        <input type="file" name="image" class="form-control">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
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
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Brand Description</label>
                                        <textarea name="description" class="form-control" rows="5" placeholder="Enter brand description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
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
                           
                                <div class="col-md-6">
    <div class="mb-3">
        <label class="form-label">Meta Title</label>
        <input type="text" name="meta_title" class="form-control"
            value="{{ old('meta_title') }}" placeholder="Enter meta title">
        @error('meta_title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="col-md-12">
    <div class="mb-3">
        <label class="form-label">Meta Keywords</label>
        <textarea name="meta_keyword" class="form-control" rows="4"
            placeholder="Enter meta keyword">{{ old('meta_keyword') }}</textarea>
        @error('meta_keyword')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="col-md-12">
    <div class="mb-3">
        <label class="form-label">Meta Description</label>
        <textarea name="meta_description" class="form-control" rows="4"
            placeholder="Enter meta description">{{ old('meta_description') }}</textarea>
        @error('meta_description')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

                            </div>

                            <!-- Sections -->
                            <div class="section-wrapper">
                                <h4>Brand Sections</h4>
                                <div id="sections-container"></div>
                                <button type="button" id="add-section-btn" class="btn btn-secondary mt-2">Add
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
@endsection

@section('js')
    <script src="https://cdn.tiny.cloud/1/o97qnk8zj3tk8vhpnvjh9labykwhrbtwblxcdof8mps79ctm/tinymce/5/tinymce.min.js"></script>
    <script>
        // Slug auto-generation
        document.querySelector('input[name="name"]').addEventListener('input', function() {
            const title = this.value;
            const slug = title
                .toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .replace(/^-|-$/g, '');
            document.querySelector('input[name="slug"]').value = slug;
        });

        let sectionCount = 0;

        function initEditor(selector) {
            tinymce.init({
                selector,
                plugins: 'link image code',
                menubar: false,
                toolbar: 'undo redo | formatselect | bold italic | link image | alignleft aligncenter alignright | code',
                height: 300,
            });
        }

        function addSection() {
            const container = document.createElement('div');
            container.classList.add('section-item');
            container.innerHTML = `
                <button type="button" class="btn btn-danger btn-sm remove-section">Remove</button>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Section Image</label>
                            <input type="file" name="sections[${sectionCount}][image]" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Section Heading</label>
                            <input type="text" name="sections[${sectionCount}][heading]" class="form-control" placeholder="Enter section heading">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Section Description</label>
                            <textarea name="sections[${sectionCount}][description]" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Section Link</label>
                            <input type="text" name="sections[${sectionCount}][link]" class="form-control" placeholder="Enter section link">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Section Button Text</label>
                            <input type="text" name="sections[${sectionCount}][btn_text]" class="form-control" placeholder="Enter section button text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Another Link</label>
                            <input type="text" name="sections[${sectionCount}][another_link]" class="form-control" placeholder="Enter another link">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Another Button Text</label>
                            <input type="text" name="sections[${sectionCount}][another_btn_text]" class="form-control" placeholder="Enter another button text">
                        </div>
                    </div>
                </div>
            `;
            document.getElementById('sections-container').appendChild(container);
            initEditor(`textarea[name="sections[${sectionCount}][description]"]`);
            sectionCount++;
        }

        document.getElementById('add-section-btn').addEventListener('click', addSection);
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-section')) {
                e.target.closest('.section-item').remove();
            }
        });

        window.onload = function() {
            addSection();
            initEditor('textarea[name="description"]');
        };
    </script>
@endsection
