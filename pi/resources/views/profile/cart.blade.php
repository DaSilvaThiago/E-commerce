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

                                    <a href="{{ route('products.index') }}">Home</a>
                                </li>
                                <li class="is-marked">

                                    <a>Carrinho</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->


        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">CARRINHO DE COMPRA</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 u-s-m-b-30">
                            <div class="table-responsive">
                                <table class="table-p">
                                    <tbody>
                                        @php
                                            $subtotal = 0;
                                            $total = 0;
                                            $descontos = 0;
                                        @endphp
                                        <!--====== Row ======-->
                                        @foreach ($productsByUser as $item)
                                            @if (!$item->ITEM_QTD == 0)
                                                <tr>
                                                    <td>
                                                        <div class="table-p__box">
                                                            <div class="table-p__img-wrap">

                                                                <img class="u-img-fluid"
                                                                    src="{{ $item->produto->produtoImagens->first()->IMAGEM_URL }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="table-p__info">

                                                                <span class="table-p__name">

                                                                    <a
                                                                        href="{{ route('productDetails', $item->produto->PRODUTO_ID) }}">{{ $item->produto->PRODUTO_NOME }}</a></span>

                                                                <span class="table-p__category">

                                                                    <a
                                                                        href="search?CATEGORIA_ID={{ $item->produto->categoria->CATEGORIA_ID }}">{{ $item->produto->categoria->CATEGORIA_NOME }}</a></span>
                                                                <ul class="table-p__variant-list">

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <span
                                                            class="table-p__price">R${{ $item->ITEM_QTD * ($item->produto->PRODUTO_PRECO - $item->produto->PRODUTO_DESCONTO) }}</span>
                                                    </td>
                                                    <td>
                                                        <div class="table-p__input-counter-wrap">

                                                            <!--====== Input Counter ======-->
                                                            <div class="input-counter">

                                                                <input
                                                                    class="input-counter__text input-counter--text-primary-style"
                                                                    type="text" value="{{ $item->ITEM_QTD }}"
                                                                    data-min="1" readonly data-max="1000">


                                                            </div>
                                                            <!--====== End - Input Counter ======-->
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-p__del-wrap">
                                                            <?php
                                                            $user_id = $item->usuario->USUARIO_ID;
                                                            $produto_id = $item->produto->PRODUTO_ID; ?>
                                                            <a class="far fa-trash-alt table-p__delete-link"
                                                                href="{{ route('update.cart', ['user_id' => $user_id, 'produto_id' => $produto_id]) }}"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @php
                                                    $subtotal += $item->ITEM_QTD * $item->produto->PRODUTO_PRECO;
                                                    $total += $item->ITEM_QTD * ($item->produto->PRODUTO_PRECO - $item->produto->PRODUTO_DESCONTO);
                                                    $descontos += $item->ITEM_QTD * $item->produto->PRODUTO_DESCONTO;
                                               @endphp
                                            @endif
                                        @endforeach
                                        <!--====== End - Row ======-->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            
                                <div class="f-cart__pad-box">
                                    <div class="u-s-m-b-30">
                                        <table class="f-cart__table">
                                            <tbody>
                                                <tr>
                                                    <td>SUBTOTAL</td>
                                                    <td>R${{ $subtotal }}</td>
                                                </tr>
                                                <tr>
                                                    <td>DESCONTOS</td>
                                                    <td>R${{ $descontos }}</td>
                                                </tr>
                                                <tr>
                                                    <td>TOTAL</td>
                                                    <td>R${{ $total }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="f-cart" style="margin-left: 70px">

                                        <a class="btn btn--e-brand-b-2" href="{{route('order')}}"> FINALIZAR COMPRA</a>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="col-lg-12">
                            <div class="route-box">
                                <div class="route-box__g1">

                                    <a class="route-box__link"
                                        href="search?CATEGORIA_ID={{ $item->produto->categoria->CATEGORIA_ID }}"><i
                                            class="fas fa-long-arrow-alt-left"></i>

                                        <span>CONTINUAR COMPRANDO</span></a>
                                </div>
                                <div class="route-box__g2">

                                    <a class="route-box__link" href="cart.html"><i class="fas fa-trash"></i>

                                        <span>LIMPAR CARRINHO</span></a>

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
