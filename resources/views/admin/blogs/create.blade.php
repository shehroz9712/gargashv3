@extends('admin.layouts.app')

@section('css')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>{{ $pageTitle }}</h3>
                    {{ Breadcrumbs::render('admin.blogs.index') }}
                </div>
            </div>
        </div>
    </div>
    
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-sm-12">
                <div class="card">
                    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" class="form theme-form">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Blog Title</label>
                                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Enter blog title">
                                        @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Slug</label>
                                        <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" placeholder="Enter slug">
                                        @error('slug')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Image</label>
                                        <input type="file" name="image" class="form-control">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Short Content</label>
                                        <input type="text" name="short_content" class="form-control" value="{{ old('short_content') }}" placeholder="Enter short content">
                                        @error('short_content')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                            <div class="col-md-12">
    <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea name="content" class="form-control" rows="5" placeholder="Enter content">{{ old('content') }}</textarea>
        @error('content')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>


                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Author</label>
                                        <input type="text" name="author" class="form-control" value="{{ old('author') }}" placeholder="Enter author name">
                                        @error('author')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Author Image</label>
                                        <input type="file" name="author_image" class="form-control">
                                        @error('author_image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                            <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                                            <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>Archived</option>
                                        </select>
                                        @error('status')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Create Blog</button>
                            <a href="{{ route('admin.blogs.index') }}" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('js')
<!-- TinyMCE Script -->
<script src="https://cdn.tiny.cloud/1/angawkv2xx2vxc4g4fmmz2kga206yrhmrnuu1i2avvbr1n6d/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea[name="content"]',
        height: 300,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
                 'bold italic underline backcolor | alignleft aligncenter ' +
                 'alignright alignjustify | bullist numlist outdent indent | ' +
                 'removeformat | help',
    });
</script>
@endsection
