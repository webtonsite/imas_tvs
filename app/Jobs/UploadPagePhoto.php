<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Page;
use App\Services\PagePhotoService;

class UploadPagePhoto implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $page;
    private $file;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Page $page, $file)
    {
        $this->page = $page;
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $photo_service = new PagePhotoService($this->page);
        $photo_service->upload_public($this->file);
    }
}
