<div class="row" id="order">
    <div class="col-md-12" style="padding-left:30px; padding-right:30px;">
        <div class="table-responsive table-boarder">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">Market Exchange</th>
                        <th colspan="2" class="text-center">
                            <img src="../images/bitcoinLogo.png" style="width:45px;"> Bitcoin</img>
                        </th>

                        <th colspan="2" class="text-center">
                            <img src="../images/ethereumLogo.png" style="width:30px;"> Ethereum</img>
                        </th>

                        <th colspan="2" class="text-center">
                            <img src="../images/rippleLogo.png" style="width:40px;"> Ripple</img>
                        </th>

                    </tr>
                    <tr>
                        <!-- <th class="text-center">Logo</th> -->
                        <th class="text-center">Region</th>
                        <th class="text-center">Buy</th>
                        <th class="text-center">Sell</th>
                        <th class="text-center">Buy</th>
                        <th class="text-center">Sell</th>
                        <th class="text-center">Buy</th>
                        <th class="text-center">Sell</th>
                    </tr>
                </thead>

                <tbody v-for="orderbook in orderbooks">

                    <tr>

                        {{-- <td class="text-center">@{{orderbook.exchange}}</td> --}}
                        <td class="text-center">
                            <img :src="orderbook.logo" style="width:120px;"></img> 
                        </td>
                        <td class="text-center">@{{Math.round(orderbook.btcusd.bid*100)/100}}</td>
                        <td class="text-center">@{{Math.round(orderbook.btcusd.ask*100)/100}}</td>
                        <td class="text-center">@{{Math.round(orderbook.ethusd.bid*100)/100}}</td>
                        <td class="text-center">@{{Math.round(orderbook.ethusd.ask*100)/100}}</td>
                        <td class="text-center">@{{Math.round(orderbook.xrpusd.bid*10000)/10000}}</td>
                        <td class="text-center">@{{Math.round(orderbook.xrpusd.ask*10000)/10000}}</td>


                    </tr>


                </tbody>

            </table>

        </div>
    </div>
</div>

<script>
    var socket = io.connect('https://socketliveprice.cryptovationx.io:8443', {
        secure: true
    });

    new Vue({
        el: '#order',

        data: {

            orderbooks: {},

        },

        mounted: function () {

            socket.on('orderbooks-channel:App\\Events\\OrderbookOmit', function (data) {

                this.orderbooks = JSON.parse(data.orderbooks);
                // console.log(this.orderbooks);

            }.bind(this));
        },

    });
</script>