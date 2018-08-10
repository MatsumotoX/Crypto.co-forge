<?php

namespace App\Http\Controllers\Binance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;


use Binance;

class BinanceController extends Controller
{
    // public $bid;
    // public $ask;

    public function __construct()
    {
        // $price = json_decode(Redis::get('0.3'));
        // $this->bid = $price[0];
        // $this->ask = $price[1];

        
    }
    public function test()
    {
        // $price = json_decode(Redis::connection('orderbook')->get('0.0'));
        $price = Redis::set('0.0','fucku');
        // $price = json_decode(Redis::get('0.0'));

        dd($price);

        // $data = Binance::getAllOrders('ETHBTC');
        // dd($data[0]);
        // $test = Binance::cancelOrder('ETHBTC', '120812300');

        // dd($test);

        // // $status = Binance::getOrder('ETHBTC', '112201655');
        // // dd($status);
        
        // $sell = Binance::limitSell('ETHBTC', 0.1, $this->ask + 0.019999);
        
        // Cache::put('id',$sell['orderId'],1);
        // // dd($sell);

        // dd(Cache::get('id'));
        
        // dd($status);

        // dd($test);
    }

}
