@extends('admin.layouts.app')

@section('css')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>{{ $pageTitle ?? 'Service Request Details' }}</h3>
                    {{ Breadcrumbs::render('admin.service_requests.show', $serviceRequest) }}
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
                        Service Request Details
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>User Name</th>
                                        <td>{{ $serviceRequest->user_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td>{{ $serviceRequest->user_phone_number }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $serviceRequest->email ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Make</th>
                                        <td>{{ $serviceRequest->make ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Model</th>
                                        <td>{{ $serviceRequest->model ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Plate Number</th>
                                        <td>{{ $serviceRequest->plate_no ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Service</th>
                                        <td>{{ $serviceRequest->service }}</td>
                                    </tr>
                                    <tr>
                                        <th>Location</th>
                                        <td>{{ $serviceRequest->location ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>URL</th>
                                        <td>
                                            @if ($serviceRequest->url)
                                                <a href="{{ $serviceRequest->url }}"
                                                    target="_blank">{{ $serviceRequest->url }}</a>
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Device Type</th>
                                        <td>{{ $serviceRequest->device_type ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>IP Address</th>
                                        <td>{{ $serviceRequest->ip_address ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Created At</th>
                                        <td>{{ $serviceRequest->created_at->format('d M, Y h:i A') }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('admin.service_requests.index') }}" class="btn btn-secondary">Back to
                                List</a>

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
