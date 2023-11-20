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


    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Section 1 ======-->
        <x-sectionOneToProfile/>
        <!--====== End - Section 1 ======-->


        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="dash">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">

                                <!--====== Dashboard Features ======-->
                                <x-dashBoardFeatures :user="$user" />
                                <!--====== End - Dashboard Features ======-->
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <div
                                    class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <h1 class="dash__h1 u-s-m-b-14">Gerenciar Meu Perfil</h1>

                                        <span class="dash__text u-s-m-b-30">Desse Dashboard você gerencia as atividades
                                            da sua conta e atualiza suas infromações. Clique em algum link
                                            abaixo.</span>
                                        <div class="row">
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                    <div class="dash__pad-3">
                                                        <h2 class="dash__h2 u-s-m-b-8">PERFIL PESSOAL</h2>
                                                        <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                            <a href="{{route('profile.edit', $user->USUARIO_ID)}}">Editar</a>
                                                        </div>

                                                        <span class="dash__text">{{ $user->USUARIO_NOME }}</span>

                                                        <span class="dash__text">{{ $user->USUARIO_EMAIL }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                    <div class="dash__pad-3">
                                                        <h2 class="dash__h2 u-s-m-b-8">ENDEREÇOS</h2>

                                                        <span class="dash__text-2 u-s-m-b-8">Padrão de entrega</span>
                                                        <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                            <a href="{{route('profile.address', $user->USUARIO_ID)}}">Editar</a>
                                                        </div>

                                                        <span class="dash__text">4247 Ashford Drive Virginia - VA-20006
                                                            - USA</span>

                                                        <span class="dash__text">(+0) 900901904</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius">
                                    <h2 class="dash__h2 u-s-p-xy-20">RECENT ORDERS</h2>
                                    <div class="dash__table-wrap gl-scroll">
                                        <table class="dash__table">
                                            <thead>
                                                <tr>
                                                    <th>Order #</th>
                                                    <th>Placed On</th>
                                                    <th>Items</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3054231326</td>
                                                    <td>26/13/2016</td>
                                                    <td>
                                                        <div class="dash__table-img-wrap">

                                                            <img class="u-img-fluid"
                                                                src="images/product/electronic/product3.jpg"
                                                                alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dash__table-total">

                                                            <span>$126.00</span>
                                                            <div class="dash__link dash__link--brand">

                                                                <a href="dash-manage-order.html">MANAGE</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3054231326</td>
                                                    <td>26/13/2016</td>
                                                    <td>
                                                        <div class="dash__table-img-wrap">

                                                            <img class="u-img-fluid"
                                                                src="images/product/electronic/product14.jpg"
                                                                alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dash__table-total">

                                                            <span>$126.00</span>
                                                            <div class="dash__link dash__link--brand">

                                                                <a href="dash-manage-order.html">MANAGE</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3054231326</td>
                                                    <td>26/13/2016</td>
                                                    <td>
                                                        <div class="dash__table-img-wrap">

                                                            <img class="u-img-fluid"
                                                                src="images/product/men/product8.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dash__table-total">

                                                            <span>$126.00</span>
                                                            <div class="dash__link dash__link--brand">

                                                                <a href="dash-manage-order.html">MANAGE</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3054231326</td>
                                                    <td>26/13/2016</td>
                                                    <td>
                                                        <div class="dash__table-img-wrap">

                                                            <img class="u-img-fluid"
                                                                src="images/product/women/product10.jpg" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dash__table-total">

                                                            <span>$126.00</span>
                                                            <div class="dash__link dash__link--brand">

                                                                <a href="dash-manage-order.html">MANAGE</a>
                                                            </div>
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
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->
    </div>
    <!--====== End - App Content ======-->

</x-app-layout>
