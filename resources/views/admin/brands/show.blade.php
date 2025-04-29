@extends('admin.layouts.app')

@section('css')
    <style>
        .img-fluid {
            max-width: 200px;
        }

        .badge {
            font-size: 0.9rem;
        }

        .section-heading {
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 20px;
        }

        .section-description {
            margin-top: 10px;
        }
    </style>
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
                                        <td>{{ $brand->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Author</th>
                                        <td>{{ $brand->user->name ?? 'Unknown' }}</td>
                                    </tr>

                                    <!-- Display Brand Image -->
                                    @if ($brand->image)
                                        <tr>
                                            <th>Brand Image</th>
                                            <td>
                                                <img src="{{ asset('assets/uploads/brands/' . $brand->image) }}"
                                                    alt="Brand Image" class="img-fluid rounded shadow">
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <th>Brand Image</th>
                                            <td>No image available</td>
                                        </tr>
                                    @endif

                                    <tr>
                                        <th>Slug</th>
                                        <td>{{ $brand->slug }}</td>
                                    </tr>

                                    <!-- Display Brand Status -->
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

                                    <!-- Content Description -->
                                    <tr>
                                        <th>Description</th>
                                        <td>{!! $brand->description !!}</td>
                                    </tr>

                                    <tr>
                                        <th>Meta Title</th>
                                        <td>{{ $brand->meta_title }}</td>
                                    </tr>
                                       <tr>
                                        <th>Meta Description</th>
                                        <td>{{ $brand->meta_description }}</td>
                                    </tr>
                                       <tr>
                                        <th>Meta Keyword</th>
                                        <td>{{ $brand->meta_keyword }}</td>
                                    </tr>
                                    <!-- Image for Brand -->
                                    <tr>
                                        <th>Image</th>
                                        <td>
                                            @if ($brand->image)
                                                <img src="{{ asset('assets/uploads/brands/' . $brand->image) }}"
                                                    alt="Brand Image" class="img-fluid rounded shadow">
                                            @else
                                                <p>No image available</p>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Sections Section -->
                        @if ($brand->sections->count() > 0)
                            <div class="section-wrapper">
                                <h4 class="section-heading">Brand Sections</h4>

                                @foreach ($brand->sections as $section)
                                    <div class="section-item">
                                        <h5>{{ $section->heading }}</h5>
                                        <p class="section-description">{!! $section->description !!}</p>
                                        @if ($section->link)
                                            <p><strong>Link:</strong> <a href="{{ $section->link }}"
                                                    target="_blank">{{ $section->link }}</a></p>
                                        @endif
                                        @if ($section->another_link)
                                            <p><strong>Another Link:</strong> <a href="{{ $section->another_link }}"
                                                    target="_blank">{{ $section->another_link }}</a></p>
                                        @endif
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        @else
                            <p>No sections available for this brand.</p>
                        @endif

                        <!-- Action Buttons -->
                        <div class="mt-4">
                            <a href="{{ route('admin.brands.index') }}" class="btn btn-secondary">Back to List</a>
                            <a href="{{ route('admin.brands.edit', $brand->id) }}" class="btn btn-warning">Edit</a>

                            <!-- Delete Form -->
                            <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Are you sure you want to delete this brand?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('js')
    <!-- You can add additional JS or scripts here if needed -->
@endsection
