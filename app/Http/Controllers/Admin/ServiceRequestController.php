<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ServiceRequest;

class ServiceRequestController extends Controller
{
    public function index()
    {
        $service_requests = ServiceRequest::latest()->paginate(10);
        return view('admin.service_requests.index', compact('service_requests'));
    }


    public function show(ServiceRequest $serviceRequest)
    {
        $serviceRequest = $serviceRequest->first();
        return view('admin.service_requests.show', compact('serviceRequest'));
    }
}
