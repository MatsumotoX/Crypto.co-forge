<?php

namespace App\Jobs\Whales;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Http\Controllers\Whale\WhaleController;

class WhaleSubReplaceJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $id;
    public $side;

    public function __construct($id,$side)
    {
        $this->id = $id;
        $this->side = $side;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $controller = new WhaleController;
        $controller->replacejob($this->id,$this->side);
    }
}
