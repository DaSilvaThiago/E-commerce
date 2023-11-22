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
                                    <a>Dados do Pedido</a>
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
                    <div class="checkout-f">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1 class="checkout-f__h1">INFORMAÇÕES DE ENTREGA</h1>
                                <form class="checkout-f__delivery" method="post" action="{{route('store.address', $user->USUARIO_ID)}}">
                                    @csrf
                                    <div class="u-s-m-b-30">
                                        <div class="u-s-m-b-15">

                                            <!--====== Check Box ======-->
                                            <div class="check-box">

                                                <input type="checkbox" id="get-address">
                                                <div class="check-box__state check-box__state--primary">

                                                    <label class="check-box__label" for="get-address">Usar endereço ja
                                                        cadastrado</label>
                                                </div>
                                            </div>
                                            <!--====== End - Check Box ======-->
                                        </div>

                                        <!--====== First Name, Last Name ======-->
                                        <div class="gl-inline">
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="billing-fname">NOME DO ENDEREÇO *</label>

                                                <input class="input-text input-text--primary-style" name="ENDERECO_NOME" type="text"
                                                    id="billing-fname" data-bill="" placeholder="casa">
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="billing-lname">CEP *</label>

                                                <input class="input-text input-text--primary-style" type="text"
                                                    id="billing-lname" data-bill="" name="ENDERECO_CEP" placeholder="00000-000">
                                            </div>
                                        </div>
                                        <!--====== End - First Name, Last Name ======-->


                                        <!--====== E-MAIL ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-email">LOGRADOURO *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-email" data-bill="" name="ENDERECO_LOGRADOURO" placeholder="Rua x">
                                        </div>
                                        <!--====== End - E-MAIL ======-->


                                        <!--====== PHONE ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-phone">NUMERO *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-phone" data-bill="" name="ENDERECO_NUMERO" placeholder="01">
                                        </div>
                                        <!--====== End - PHONE ======-->


                                        <!--====== Street Address ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-street">COMPLEMENTO </label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-street" placeholder=""
                                                data-bill="" name="ENDERECO_COMPLEMENTO" >
                                        </div>
                                        <!--====== End - Street Address ======-->


                                        <!--====== Town / City ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-town-city">CIDADE *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-town-city" data-bill="" name="ENDERECO_CIDADE" placeholder="são paulo">
                                        </div>
                                        <!--====== End - Town / City ======-->


                                        <!--====== ZIP/POSTAL ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-zip">ESTADO *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="billing-zip"  data-bill="" placeholder="SP" name="ENDERECO_ESTADO">
                                        </div>
                                        <!--====== End - ZIP/POSTAL ======-->

                                        <div>

                                            <button class="btn btn--e-transparent-brand-b-2"
                                                type="submit">SALVAR</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <h1 class="checkout-f__h1">ITEMS DO PEDIDO</h1>

                                <!--====== Order Summary ======-->
                                <div class="o-summary">
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__item-wrap gl-scroll">
                                            @foreach ($productsByUser as $item)
                                                @if (!$item->ITEM_QTD == 0)
                                                    <div class="o-card">
                                                        <div class="o-card__flex">
                                                            <div class="o-card__img-wrap">

                                                                <img class="u-img-fluid"
                                                                    src="{{ $item->produto->produtoImagens->first()->IMAGEM_URL }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="o-card__info-wrap">

                                                                <span class="o-card__name">

                                                                    <a
                                                                        href="{{ route('productDetails', $item->produto->PRODUTO_ID) }}">{{ $item->produto->PRODUTO_NOME }}</a></span>

                                                                <span class="o-card__quantity">Quantidade x
                                                                    {{ $item->ITEM_QTD }}</span>

                                                                <span
                                                                    class="o-card__price">R${{ ($item->produto->PRODUTO_PRECO - $item->produto->PRODUTO_DESCONTO) * $item->ITEM_QTD }}</span>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $user_id = $item->usuario->USUARIO_ID;
                                                        $produto_id = $item->produto->PRODUTO_ID; ?>
                                                        <a href="{{ route('update.cart', ['user_id' => $user_id, 'produto_id' => $produto_id]) }}"
                                                            class="o-card__del far fa-trash-alt"></a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <h1 class="checkout-f__h1">ENDEREÇOS CADASTRADOS PARA ENTREGA</h1>

                                            <div class="dash__table-2-wrap gl-scroll">
                                                <table class="dash__table-2">
                                                    <thead>
                                                        <tr>
                                                            <th>Selecione</th>
                                                            <th>Nome do Endereço</th>
                                                            <th>Logradouro</th>
                                                            <th>Numero</th>
                                                            <th>Complemento</th>
                                                            <th>Cep</th>
                                                            <th>Cidade</th>
                                                            <th>Estado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            @foreach ($addressByUser as $address)
                                                                <!--====== Radio Box ======-->
                                                        <tr>

                                                            <td>
                                                                <div class="radio-box">

                                                                    <input type="radio" id="address-1"
                                                                        name="{{ $address->ENDERECO_ID }}">
                                                                    <div
                                                                        class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label"
                                                                            for="address-1"></label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!--====== End - Radio Box ======-->

                                                            <td>{{ $address->ENDERECO_NOME }}</td>
                                                            <td>{{ $address->ENDERECO_LOGRADOURO }}</td>
                                                            <td>{{ $address->ENDERECO_NUMERO }}</td>
                                                            <td>{{ $address->ENDERECO_COMPLEMENTO ? $address->ENDERECO_COMPLEMENTO : ' ' }}
                                                            </td>
                                                            <td>{{ $address->ENDERECO_CEP }}</td>
                                                            <td>{{ $address->ENDERECO_CIDADE }}</td>
                                                            <td>{{ $address->ENDERECO_ESTADO }}</td>
                                                        </tr>
                                                        @endforeach
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <table class="o-summary__table">
                                                <tbody>
                                                    <tr>
                                                        <td>SHIPPING</td>
                                                        <td>$4.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>TAX</td>
                                                        <td>$0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SUBTOTAL</td>
                                                        <td>$379.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GRAND TOTAL</td>
                                                        <td>$379.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <h1 class="checkout-f__h1">PAYMENT INFORMATION</h1>
                                            <form class="checkout-f__payment">
                                                <div class="u-s-m-b-10">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" id="cash-on-delivery" name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label"
                                                                for="cash-on-delivery">Cash on Delivery</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">Pay Upon Cash on delivery. (This
                                                        service is only available for some countries)</span>
                                                </div>
                                                <div class="u-s-m-b-10">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" id="direct-bank-transfer"
                                                            name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label"
                                                                for="direct-bank-transfer">Direct Bank Transfer</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">Make your payment directly into our
                                                        bank account. Please use your Order ID as the payment reference.
                                                        Your order will not be shipped until the funds have cleared in
                                                        our account.</span>
                                                </div>
                                                <div class="u-s-m-b-10">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" id="pay-with-check" name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label" for="pay-with-check">Pay
                                                                With Check</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">Please send a check to Store Name,
                                                        Store Street, Store Town, Store State / County, Store
                                                        Postcode.</span>
                                                </div>
                                                <div class="u-s-m-b-10">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" id="pay-with-card" name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label" for="pay-with-card">Pay
                                                                With Credit / Debit Card</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">International Credit Cards must be
                                                        eligible for use within the United States.</span>
                                                </div>
                                                <div class="u-s-m-b-10">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" id="pay-pal" name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label" for="pay-pal">Pay
                                                                Pal</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">When you click "Place Order" below
                                                        we'll take you to Paypal's site to set up your billing
                                                        information.</span>
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <!--====== Check Box ======-->
                                                    <div class="check-box">

                                                        <input type="checkbox" id="term-and-condition">
                                                        <div class="check-box__state check-box__state--primary">

                                                            <label class="check-box__label" for="term-and-condition">I
                                                                consent to the</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Check Box ======-->

                                                    <a class="gl-link">Terms of Service.</a>
                                                </div>
                                                <div>

                                                    <button class="btn btn--e-brand-b-2" type="submit">PLACE
                                                        ORDER</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Order Summary ======-->
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
