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

                                        <a >Detalhes do pedido</a></li>
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
                                    <h1 class="dash__h1 u-s-m-b-30">Detalhes do Pedido</h1>
                                    <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                        <div class="dash__pad-2">
                                            <div class="dash-l-r">
                                                <div>
                                                    <div class="manage-o__text-2 u-c-secondary">Order #{{$order->PEDIDO_ID}}</div>
                                                    <div class="manage-o__text u-c-silver">Realizado em {{$order->PEDIDO_DATA->format('d/m/Y')}}</div>
                                                </div>
                                                <div>
                                                    <div class="manage-o__text-2 u-c-silver">Total:
                                                        @php
                                                        $total = 0;
                                                        foreach ($orderItems as $product) {
                                                            $total += $product->ITEM_PRECO;
                                                        }
                                                    @endphp
                                                        <span class="manage-o__text-2 u-c-secondary">R${{$total}}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                        <div class="dash__pad-2">
                                            <div class="manage-o">
                                                <div class="manage-o__header u-s-m-b-30">
                                                    <div class="manage-o__icon"><i class="fas fa-box u-s-m-r-5"></i>

                                                        <span class="manage-o__text">Pacote de Entrega</span></div>
                                                </div>
                                                <div class="dash-l-r">
                                                    <div class="manage-o__text u-c-secondary">Sera entregue em {{$order->PEDIDO_DATA->addDays(7)->format('d/m/Y')}}</div>
                                                    <div class="manage-o__icon"><i class="fas fa-truck u-s-m-r-5"></i>

                                                        <span class="manage-o__text">Correios</span></div>
                                                </div>
                                                <div class="manage-o__timeline">
                                                    <div class="timeline-row">
                                                        <div class="col-lg-4 u-s-m-b-30">
                                                            <div class="timeline-step">
                                                                <div class="timeline-l-i timeline-l-i--finish">

                                                                    <span class="timeline-circle"></span></div>

                                                                <span class="timeline-text">Processando</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 u-s-m-b-30">
                                                            <div class="timeline-step">
                                                                <div class="timeline-l-i ">

                                                                    <span class="timeline-circle"></span></div>

                                                                <span class="timeline-text">Enviado</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 u-s-m-b-30">
                                                            <div class="timeline-step">
                                                                <div class="timeline-l-i">

                                                                    <span class="timeline-circle"></span></div>

                                                                <span class="timeline-text">Entregue</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach ($orderItems as $item)
                                                <div class="manage-o__description">
                                                    <div class="description__container">
                                                        <div class="description__img-wrap">

                                                            <img class="u-img-fluid" src="{{$item->produto->produtoImagens->first()->IMAGEM_URL}}" alt=""></div>
                                                        <div class="description-title">{{$item->produto->PRODUTO_NOME}}</div>
                                                    </div>
                                                    <div class="description__info-wrap">
                                                        <div>

                                                            <span class="manage-o__text-2 u-c-silver">Quantidade:

                                                                <span class="manage-o__text-2 u-c-secondary">{{$item->ITEM_QTD}}</span></span></div>
                                                        <div>

                                                            <span class="manage-o__text-2 u-c-silver">Total:

                                                                <span class="manage-o__text-2 u-c-secondary">${{$item->ITEM_PRECO}}</span></span></div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                                <div class="dash__pad-3">
                                                    <h2 class="dash__h2 u-s-m-b-8">Endereço de Entrega</h2>
                                                    <h2 class="dash__h2 u-s-m-b-8">{{$order->endereco->ENDERECO_NOME}}</h2>

                                                    <span class="dash__text-2">{{$order->endereco->ENDERECO_LOGRADOURO. " " . $order->endereco->ENDERECO_NUMERO . " - " . $order->endereco->ENDERECO_CEP}}</span>

                                                    <span class="dash__text-2">{{$order->endereco->ENDERECO_CIDADE . " - " . $order->endereco->ENDERECO_ESTADO}}</span>
                                                </div>
                                            </div>
                                            <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                                                <div class="dash__pad-3">
                                                    <h2 class="dash__h2 u-s-m-b-8">Endereço de Cobrança</h2>
                                                    <h2 class="dash__h2 u-s-m-b-8">{{$order->endereco->ENDERECO_NOME}}</h2>

                                                    <span class="dash__text-2">{{$order->endereco->ENDERECO_LOGRADOURO. " " . $order->endereco->ENDERECO_NUMERO . " - " . $order->endereco->ENDERECO_CEP}}</span>

                                                    <span class="dash__text-2">{{$order->endereco->ENDERECO_CIDADE . " - " . $order->endereco->ENDERECO_ESTADO}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="dash__box dash__box--bg-white dash__box--shadow u-h-100">
                                                <div class="dash__pad-3">
                                                    <h2 class="dash__h2 u-s-m-b-8">Resumo do Pedido</h2>
                                                    <div class="dash-l-r u-s-m-b-8">
                                                        <div class="manage-o__text-2 u-c-secondary">Subtotal</div>
                                                        <div class="manage-o__text-2 u-c-secondary">R$ {{$orderItems->sum('ITEM_PRECO')}}</div>
                                                    </div>
                                                    <div class="dash-l-r u-s-m-b-8">
                                                        <div class="manage-o__text-2 u-c-secondary">Valor do Frete</div>
                                                        <div class="manage-o__text-2 u-c-secondary">Grátis</div>
                                                    </div>
                                                    <div class="dash-l-r u-s-m-b-8">
                                                        <div class="manage-o__text-2 u-c-secondary">Total</div>
                                                        <div class="manage-o__text-2 u-c-secondary">R$ {{$orderItems->sum('ITEM_PRECO')}}</div>
                                                    </div>

                                                    <span class="dash__text-2">Pago com PIX</span>
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
