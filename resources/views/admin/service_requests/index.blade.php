@extends('admin.layouts.app')
@section('css')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>{{ $pageTitle }}</h3>
                    {{ Breadcrumbs::render('admin.service_requests.index') }}
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-sm-12">
                <div class="card">


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>'--'
                                        <th>Email</th>
                                        <th>Service</th>
                                        <th>Location</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($service_requests as $service_request)
                                        <tr class="text-center">
                                            <td>{{ $service_request->id }}</td>
                                            <td>{{ $service_request->user_name }}</td>
                                            <td>{{ $service_request->user_phone_number }}</td>
                                            <td>{{ $service_request->email }}</td>
                                            <td>{{ $service_request->service }}</td>
                                            <td>{{ $service_request->location }}</td>
                                            <td>{{ $service_request->created_at->format('Y-m-d') }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.service_requests.show', $service_request->id) }}"
                                                    class="action-btn"><i class="fa fa-eye"></i></a>

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center py-4">No service service_requests found.
                                            </td>
                                        </tr>
                                    @endforelse
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
