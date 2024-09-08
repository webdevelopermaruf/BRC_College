<?php

namespace App\Jobs;

use App\Mail\AdmissionInfoMail;
use Buglinjo\LaravelWebp\Facades\Webp;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class AdmissionStarted implements ShouldQueue
{
    use Dispatchable, Queueable;

    /**
     * Create a new job instance.
     */

    public function __construct(
        public $id,
        public $email,
        public $mobile,
        public $pwd
    ) {
        $this->id = $id;
        $this->email = $email;
        $this->mobile = $mobile;
        $this->pwd = $pwd;
    }

    public function handle(): void
    {
        Mail::to($this->email)
            ->send(new AdmissionInfoMail($this->id, $this->email, $this->mobile, $this->pwd));
    }
}
