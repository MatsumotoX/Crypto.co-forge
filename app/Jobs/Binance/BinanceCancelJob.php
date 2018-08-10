<?php

namespace App\Jobs\Binance;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;
use Binance;
use App\Jobs\Binance\BinanceLimitJob;

class BinanceCancelJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Binance::cancelOrder('ETHBTC', Cache::get('id'));

        BinanceLimitJob::dispatch('sell');
    }
}
