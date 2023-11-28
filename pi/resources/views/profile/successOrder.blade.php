<x-app-layout>

    <!--====== Main Header ======-->
    @auth
        <!--====== Header Wrapper ======-->
        <x-headerForAll :dataFromController="$categories" :user="$productsByUser" />
        <!--====== End - Header Wrapper ======-->
    @else
        <x-headerForAll :dataFromController="$categories" />
    @endauth
    <!--====== End - Main Header ======-->

    <div class="app-content">

        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="breadcrumb">
                        <div class="breadcrumb__wrap">
                            <ul class="breadcrumb__list">
                                <li class="has-separator">

                                    <a href="{{ route('products.index') }}">Home</a>
                                </li>
                                <li class="is-marked">
                                    <a>PEDIDO</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->


        <!--====== Section 3 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 u-s-m-b-30">
                            <div class="empty">

                                <div class="empty">
                                    <div class="empty__wrap">

                                        <span class="empty__big-text"><i class="fa-solid fa-circle-check fa-xl" style="color: #30db00;"></i></span>
                                        
                                        <h2 class="empty__text-1">PEDIDO REALIZADO COM SUCESSO!</h2>
                                        
                                            <p class="dash__text-2" style="
                                            margin-bottom: 25px">Parabéns! Seu pedido foi concluído com sucesso. <br> Agradecemos por escolher nossa loja. <br> Boas compras!</p>
                                            <a class="empty__redirect-link btn--e-brand" href="{{route('dashboard', $user)}}"> Perfil</a>
                                                        
                                          
                                                       
                                            <a class="empty__redirect-link btn--e-brand" href="shop-side-version-2.html"> Ver pedido</a> </div>
                                
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 3 ======-->
    </div>
    <!--====== End - App Content ======-->
</x-app-layout>
