    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="{{asset('js/vendor.js')}}"></script>

    
    <!--====== jQuery Shopnav plugin ======-->
    <script src="{{asset('js/jquery.shopnav.js')}}"></script>

    <!--====== App ======-->
    <script src="{{asset('js/app.js')}}"></script>
    <a id="topScroll" href="#top" style="position: fixed; z-index: 100;"><i class="fa-solid fa-arrow-up" style="color: #000000;"></i></a>
    <script src="https://kit.fontawesome.com/eabf20875e.js" crossorigin="anonymous"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a
                                JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>