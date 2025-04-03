<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ServiceRequest;

class ServiceRequestController extends Controller
{
    public function index()
    {
        $requests = ServiceRequest::latest()->paginate(10);
        return view('service_requests.index', compact('requests'));
    }

    public function create()
    {
        return view('service_requests.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|min:3|max:50',
            'user_phone_number' => 'required|digits_between:10,15',
            'email' => 'nullable|email',
            'make' => 'nullable|string|max:30',
            'model' => 'nullable|string|max:30',
            'plate_no' => 'nullable|string|max:15',
            'service' => 'required|string',
            'location' => 'nullable|string|max:100',
        ]);

        ServiceRequest::create($request->all());
        return redirect()->route('service_requests.index')->with('success', 'Request submitted successfully.');
    }

    public function show(ServiceRequest $serviceRequest)
    {
        return view('service_requests.show', compact('serviceRequest'));
    }

    public function edit(ServiceRequest $serviceRequest)
    {
        return view('service_requests.edit', compact('serviceRequest'));
    }

    public function update(Request $request, ServiceRequest $serviceRequest)
    {
        $request->validate([
            'user_name' => 'required|string|min:3|max:50',
            'user_phone_number' => 'required|digits_between:10,15',
            'email' => 'nullable|email',
            'make' => 'nullable|string|max:30',
            'model' => 'nullable|string|max:30',
            'plate_no' => 'nullable|string|max:15',
            'service' => 'required|string',
            'location' => 'nullable|string|max:100',
        ]);

        $serviceRequest->update($request->all());
        return redirect()->route('service_requests.index')->with('success', 'Request updated successfully.');
    }

    public function destroy(ServiceRequest $serviceRequest)
    {
        $serviceRequest->delete();
        return redirect()->route('service_requests.index')->with('success', 'Request deleted successfully.');
    }
}
