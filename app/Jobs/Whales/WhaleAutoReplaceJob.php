<?php

namespace App\Jobs\Whales;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Jobs\Whales\WhaleReplaceJob;
use App\Whales\WhaleBinance;
use Carbon\Carbon;

class WhaleAutoReplaceJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $check = WhaleBinance::find($this->id);
        if ($check->status=='Open') {
            WhaleAutoReplaceJob::dispatch($this->id)->delay(Carbon::now()->addSeconds(7));
            WhaleReplaceJob::dispatch($this->id);
        }
    }
}
