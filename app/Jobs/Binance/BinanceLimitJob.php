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

class BinanceLimitJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $bid;
    public $ask;
    public $side;

    public function __construct($side)
    {
        $price = json_decode(Redis::get('0.3'));
        $this->bid = $price[0];
        $this->ask = $price[1];
        $this->side = $side;

        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        switch ($this->side) {
            case 'sell':
                $sell = Binance::limitSell('ETHBTC', 0.1, $this->ask + 0.02);
                Cache::put('id',$sell['orderId'],1);
                break;
            

        }
        
    }
}
