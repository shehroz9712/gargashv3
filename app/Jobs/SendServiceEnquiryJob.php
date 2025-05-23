<?php

namespace App\Jobs;

use App\Mail\ServiceEnquiryMail;
use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendServiceEnquiryJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $setting = Setting::first();

        Mail::to('testing@gargashauto.ae')->send(new ServiceEnquiryMail($this->data));
    }
}
