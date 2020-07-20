@include('admin.admin.header')


@include('admin.admin.sidebar')

<div class="content-body">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-lg-3">
                    <div class="card currency-card-rounded">
                        <div class="card-body rounded bitcoin">
                            <div class="currency-card--icon pull-right">
                                <i class="cc BTC-alt" title="BTC"></i>
                            </div>
                            <h4>Clients</h4>
                            <h2> 
                                <span>{{$res->client_count}}</span>
                            </h2>
                            <p>Total</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card currency-card-rounded">
                        <div class="card-body rounded ethereum">
                            <div class="currency-card--icon pull-right">
                                <i class="cc BTC-alt" title="BTC"></i>
                            </div>
                            <h4>Agents</h4>
                            <h2> 
                                <span>{{$res->agent_count}}</span>
                            </h2>
                            <p>Total</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card currency-card-rounded">
                        <div class="card-body rounded ripple">
                            <div class="currency-card--icon pull-right">
                                <i class="cc XRP-alt" title="XRP"></i>
                            </div>
                            <h4>Ripple</h4>
                            <h2>
                                <span>1.765</span> BTC
                            </h2>
                            <p>Brought Rate: 80%</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card currency-card-rounded">
                        <div class="card-body rounded litecoin">
                            <div class="currency-card--icon pull-right">
                                <i class="cc LTC-alt" title="LTC"></i>
                            </div>
                            <h4>Litecoin</h4>
                            <h2>
                                <span>1.765</span> BTC
                            </h2>
                            <p>Brought Rate: 80%</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-t-25">
                <div class="col-lg-3">
                    <div class="accordion crypto-price-card">
                        <div class="card rounded-0">
                            <div class="card-header">
                                <h4 class="mb-0" data-toggle="collapse" data-target="#crypto-price" aria-expanded="true" aria-controls="crypto-price">
                                    Live my Crypto Prices
                                    <i class="fa pull-right accordion__angle--animated" aria-hidden="true"></i>
                                </h4>
                            </div>
                            <div id="crypto-price" class="collapse show">
                                <div class="card-body">
                                    <ul class="m-b-0">
                                        <li>
                                            <span class="currency-name BTC">
                                                BTC
                                            </span>
                                            <span class="currency-status pull-right">
                                                $8.114
                                                <i class="fa fa-angle-down"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="currency-name ETH">
                                                ETH
                                            </span>
                                            <span class="currency-status pull-right">
                                                $8.114
                                                <i class="fa fa-angle-up"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="currency-name XRP">
                                                XRP
                                            </span>
                                            <span class="currency-status pull-right">
                                                $8.114
                                                <i class="fa fa-angle-up"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="currency-name NEO">
                                                NEO
                                            </span>
                                            <span class="currency-status pull-right">
                                                $8.114
                                                <i class="fa fa-angle-down"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="currency-name">
                                                BTC
                                            </span>
                                            <span class="currency-status pull-right">
                                                $8.114
                                                <i class="fa fa-angle-up"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="accordion coin-transfer m-b-30">
                        <div class="card rounded-0">
                            <div class="card-header">
                                <h4 class="mb-0" data-toggle="collapse" data-target="#transfer" aria-expanded="true" aria-controls="transfer">
                                    Transfer coins
                                    <i class="fa pull-right accordion__angle--animated" aria-hidden="true"></i>
                                </h4>
                            </div>
                            <div id="transfer" class="collapse show">
                                <div class="card-body">
                                    <div class="input-group m-b-30">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                $
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="" placeholder="Enter Amount">
                                        <span class="input-dropdown">
                                            <select name="" id="">
                                                <option value="BTC">BTC</option>
                                                <option value="ETC">ETC</option>
                                                <option value="XHR">XHR</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="input-group m-b-30">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                $
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="" value="Mxs123PWid6YZX96" readonly="">
                                    </div>
                                    <button class="btn btn-success button">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="accordion">
                        <div class="card walet-address-card rounded-0">
                            <div class="card-header">
                                <h4 class="mb-0" data-toggle="collapse" data-target="#wallet-address" aria-expanded="true" aria-controls="wallet-address">
                                    Walet Address
                                    <i class="fa pull-right accordion__angle--animated" aria-hidden="true"></i>
                                </h4>
                            </div>
                            <div id="wallet-address" class="collapse show walet-address">
                                <div class="card-body">
                                    <h6>
                                        Bitcoin wallet address
                                    </h6>
                                    <div class="input-group m-b-20">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="cc BTC" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control walet-address" id="" value="Mxs123PWid6YZX96" readonly="">
                                        <span class="input-group-addon" id="">
                                            Copy
                                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <h6 class="m-t-20">Ethereum Walet Address</h6>
                                    <div class="input-group m-b-20">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="cc ETC" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control walet-address" id="" value="Mxs123PWid6YZX96" readonly="">
                                        <span class="input-group-addon" id="">
                                            Copy
                                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <h6 class="m-t-20">Ripple Walet Address</h6>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="cc XRP" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control walet-address" id="" value="Mxs123PWid6YZX96" readonly="">
                                        <span class="input-group-addon" id="">
                                            Copy
                                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="walet-direction">
                                    <h4 class="mb-0">
                                        <a href="">Go to Wallet</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="accordion table-data">
                        <div class="card rounded-0">
                            <div class="card-header">
                                <h4 class="mb-0" data-toggle="collapse" data-target="#table-two" aria-expanded="true" aria-controls="table-two">
                                    Recent Transactions
                                    <i class="fa pull-right accordion__angle--animated" aria-hidden="true"></i>
                                </h4>
                            </div>
                            <div id="table-two" class="collapse show" style="">
                                <table class="table m-b-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Price</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">When </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12,623.40</td>
                                            <td>$12,623.40</td>
                                            <td class="change">
                                                <span>21 min age</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12,623.40</td>
                                            <td>$12,623.40</td>
                                            <td class="change">
                                                <span>21 min age</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12,623.40</td>
                                            <td>$12,623.40</td>
                                            <td class="change">
                                                <span>21 min age</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12,623.40</td>
                                            <td>$12,623.40</td>
                                            <td class="change">
                                                <span>21 min age</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12,623.40</td>
                                            <td>$12,623.40</td>
                                            <td class="change">
                                                <span>21 min age</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div class="walet-direction">
                                                    <h4 class="mb-0 text-center">
                                                        <a href="">Go to Trade</a>
                                                    </h4>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@include('admin.admin.footer')