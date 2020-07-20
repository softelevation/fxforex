@include('admin.admin.header')


@include('admin.admin.sidebar')

<div class="content-body">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-title">Trading</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="trading-view">
                                <div>
                                    <script>
                                        baseUrl = "https://widgets.cryptocompare.com/";
                                        var scripts = document.getElementsByTagName("script");
                                        var embedder = scripts[scripts.length - 1];
                                        var cccTheme = {
                                            "General": {
                                                "borderWidth": "1px"
                                            },
                                            "Chart": {
                                                "fillColor": "rgba(225,180,38,0.2)"
                                            }
                                        };
                                        (function() {
                                            var appName = encodeURIComponent(window.location.hostname);
                                            if (appName == "") {
                                                appName = "local";
                                            }
                                            var s = document.createElement("script");
                                            s.type = "text/javascript";
                                            s.async = true;
                                            var theUrl = baseUrl + 'serve/v3/coin/chart?fsym=BTC&tsyms=USD,EUR,CNY,GBP';
                                            s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                            embedder.parentNode.appendChild(s);
                                        })();
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
</div>
@include('admin.admin.footer')