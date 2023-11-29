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
                                <x-dashBoardFeatures :user="$user" :orders="$orders"/>
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

                                                        <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                            <a href="{{route('profile.address', $user->USUARIO_ID)}}">Editar</a>
                                                        </div>

                                                        <span class="dash__text">{{$user->enderecos->first()->ENDERECO_NOME}}</span>
                                                        <span class="dash__text">{{$user->enderecos->first()->ENDERECO_LOGRADOURO}}</span>
                                                        <span class="dash__text">{{$user->enderecos->first()->ENDERECO_NUMERO}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius">
                                    <h2 class="dash__h2 u-s-p-xy-20">PEDIDOS RECENTES</h2>
                                    <div class="dash__table-wrap gl-scroll">
                                        <table class="dash__table">
                                            <thead>
                                                <tr>
                                                    <th>Pedido #</th>
                                                    <th>Feito Em</th>
                                                    <th>Peças</th>
                                                    <th>Itens</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($ordersToList as $order)
                                                @php
                                                        $itensInOrder = 0;
                                                    @endphp
                                                <tr>
                                                    <td>{{$order->PEDIDO_ID}}</td>
                                                    <td>{{$order->PEDIDO_DATA->format('d.m.Y')}}</td>
                                                    @php
                                                        $itensInOrder += $order->pedidoItems->count();
                                                    @endphp
                                                    <td>{{$itensInOrder}}</td>
                                                    <td>
                                                        <div class="dash__table-total">
                                                            @php
                                                                $total = 0;
                                                                foreach ($itens->where('PEDIDO_ID', $order->PEDIDO_ID) as $product) {
                                                                    $total += $product->ITEM_PRECO;
                                                                }
                                                            @endphp
                                                            <span>R$ {{$total}}</span>
                                                            <div class="dash__link dash__link--brand">

                                                                <a href="{{route('manage.order', $order->PEDIDO_ID)}}">VER PEDIDO</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
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
