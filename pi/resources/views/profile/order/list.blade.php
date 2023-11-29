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
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="breadcrumb">
                            <div class="breadcrumb__wrap">
                                <ul class="breadcrumb__list">
                                    <li class="has-separator">

                                        <a href="{{route('products.index')}}">Home</a></li>
                                    <li class="is-marked">

                                        <a >Meus Pedidos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="dash">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-12">
                                    <x-dashBoardFeatures :user="$user" :orders="$orders"/>
                                </div>
                                <div class="col-lg-9 col-md-12">
                                    <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                        <div class="dash__pad-2">
                                            <h1 class="dash__h1 u-s-m-b-14">Meus Pedidos</h1>

                                            <span class="dash__text u-s-m-b-30">Aqui esta todos os pedidos feitos por você.</span>
                                         
                                            <div class="m-order__list">
                                                @foreach ($ordersTolist as $order)
                                                    <div class="m-order__get">
                                                        <div class="manage-o__header u-s-m-b-30">
                                                            <div class="dash-l-r">
                                                                <div>
                                                                    <div class="manage-o__text-2 u-c-secondary">Pedido #{{$order->PEDIDO_ID}}</div>
                                                                    <div class="manage-o__text u-c-silver">Feito em {{$order->PEDIDO_DATA->format('d/m/Y')}}</div>
                                                                </div>
                                                                <div>
                                                                    <div class="dash__link dash__link--brand">

                                                                        <a href="{{route('manage.order', $order->PEDIDO_ID)}}">Ver Pedido</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="manage-o__description">
                                                            <div>
                                                                @foreach ($order->pedidoItems as $item)
                                                                    <p>{{$item->ITEM_QTD}}x - {{$item->produto->PRODUTO_NOME}}</p>
                                                                @endforeach
                                                            </div>
                                                            <div class="description__info-wrap">
                                                                <div>
                                                                    @php
                                                                        $orderDate = $order->PEDIDO_DATA;
                                                                        $daysElapsed = now()->diffInDays($orderDate);
                                                                    @endphp
                                                                    @if ($order->STATUS_ID == 3)
                                                                    <span class="manage-o__badge badge--delivered">Cancelado</span>                                                               
                                                                    @elseif ($daysElapsed <= 2)
                                                                        <span class="manage-o__badge badge--processing">Processando</span>                                                               
                                                                    @elseif  ($daysElapsed <= 4)
                                                                        <span class="manage-o__badge badge--shipped">Enviado</span>
                                                                    @else
                                                                        <span class="manage-o__badge badge--shipped">Entregue</span>
                                                                    @endif
                                                                </div>
                                                                <div>
                                                                    @php
                                                                        $count = 0;
                                                                    @endphp
                                                                    <span class="manage-o__text-2 u-c-silver">Total:
                                                                    @foreach ($order->pedidoItems as $item)
                                                                        @php
                                                                            $count += $item->ITEM_PRECO
                                                                        @endphp    
                                                                    @endforeach
                                                                        <span class="manage-o__text-2 u-c-secondary">R$ {{$count}}</span></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="pagination-container">
                                                    <ul class="shop-p__pagination">
                                                        {{-- Botão "Anterior" --}}
                                                        @if ($ordersTolist->onFirstPage())
                                                            <li class="disabled">
                                                                <span>&laquo;</span>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a href="{{ $ordersTolist->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                            </li>
                                                        @endif
                                                
                                                        {{-- Links das páginas --}}
                                                        @foreach ($ordersTolist->getUrlRange(1, $ordersTolist->lastPage()) as $page => $url)
                                                            @if ($page == $ordersTolist->currentPage())
                                                                <li class="is-active">
                                                                    <span>{{ $page }}</span>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <a href="{{ $url }}{{ request()->getQueryString() ? '&' : '?' }}{{ http_build_query(request()->except('page')) }}">{{ $page }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                
                                                        {{-- Botão "Próximo" --}}
                                                        @if ($ordersTolist->hasMorePages())
                                                            <li>
                                                                <a href="{{ $ordersTolist->nextPageUrl() }}" rel="next">&raquo;</a>
                                                            </li>
                                                        @else
                                                            <li class="disabled">
                                                                <span>&raquo;</span>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
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
  