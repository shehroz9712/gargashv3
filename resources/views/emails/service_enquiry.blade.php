@component('mail::message')
# New Service Enquiry

- **Name:** {{ $data['user_name'] }}
- **Phone:** {{ $data['user_phone_number'] }}
- **Email:** {{ $data['email'] ?? 'N/A' }}
- **Make:** {{ $data['make'] ?? 'N/A' }}
- **Model:** {{ $data['model'] ?? 'N/A' }}
- **Service:** {{ $data['service'] }}
- **Location:** {{ $data['location'] ?? 'N/A' }}
- **URL:** {{ $data['url'] }}
- **Device:** {{ $data['device_type'] ?? 'N/A' }}
- **IP:** {{ $data['ip_address'] ?? 'N/A' }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
