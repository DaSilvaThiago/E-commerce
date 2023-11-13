
<!DOCTYPE html>
<html class="no-js" lang="en">

<x-headHtml/>

<body class="config">
    <x-preloader/>

    <!--====== Main App ======-->
    <div id="app">

        <!--====== Header Wrapper ======-->
        @auth
            <x-headerForHome :dataFromController="$categories" :user="$productsByUser" />
        @else
            <x-headerForHome :dataFromController="$categories"/>
        @endauth
        <!--====== End - Header Wrapper ======-->    


        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Primary Slider ======-->
            <div class="s-skeleton s-skeleton--h-640 s-skeleton--bg-grey">
                <div class="owl-carousel primary-style-3" id="hero-slider">
                    <div class="hero-slide hero-slide--7">
                        <div class="primary-style-3-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content slider-content--animation">

                                            <span class="content-span-1 u-c-white">Atualize-se na Moda</span>

                                            <span class="content-span-2 u-c-white">10% de desconto</span>

                                            <span class="content-span-3 u-c-white">Em peças selecionadas de camisa
                                                feminina</span>

                                            <span class="content-span-4 u-c-white">Apartir de

                                                <span class="u-c-brand">R$99.90</span></span>

                                            <a class="shop-now-link btn--e-brand"
                                                href="shop-side-version-2.html">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide--8">
                        <div class="primary-style-3-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content slider-content--animation">

                                            <span class="content-span-1 u-c-white">Abra os olhos</span>

                                            <span class="content-span-2 u-c-white">10% off para Moletons</span>

                                            <span class="content-span-3 u-c-white">Encontre aqui os melhores
                                                preços</span>

                                            <span class="content-span-4 u-c-white">Apartir de

                                                <span class="u-c-brand">R$180.00</span></span>

                                            <a class="shop-now-link btn--e-brand"
                                                href="shop-side-version-2.html">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide--9">
                        <div class="primary-style-3-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content slider-content--animation">

                                            <span class="content-span-1 u-c-white">Encontre as melhores marcas</span>

                                            <span class="content-span-2 u-c-white">Marcas selecionadas</span>

                                            <span class="content-span-3 u-c-white">Venha conferir produtos da moda
                                                jovem</span>

                                            <span class="content-span-4 u-c-white">Adiquira já

                                                <a class="shop-now-link btn--e-brand"
                                                    href="shop-side-version-2.html">VER MAIS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Primary Slider ======-->


            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="promotion-o">
                                    <div class="aspect aspect--bg-grey aspect--square">

                                        <img class="aspect__img" src="{{ asset('images/section1/1.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="promotion-o__content">

                                        <a class="promotion-o__link btn--e-white-brand"
                                            href="shop-side-version-2.html">Roupas de Mulher</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="promotion-o">
                                    <div class="aspect aspect--bg-grey aspect--square">

                                        <img class="aspect__img" src="{{ asset('images/section1/2.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="promotion-o__content">

                                        <a class="promotion-o__link btn--e-white-brand"
                                            href="shop-side-version-2.html">Acessórios</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="promotion-o">
                                    <div class="aspect aspect--bg-grey aspect--square">

                                        <img class="aspect__img" src="{{ asset('images/section1/3.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="promotion-o__content">

                                        <a class="promotion-o__link btn--e-white-brand"
                                            href="shop-side-version-2.html">Roupas de Homem</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">

                                    <a class="i3-banner" href="shop-side-version-2.html">
                                        <div class="aspect aspect--bg-grey-fb aspect--square">

                                            <img class="aspect__img i3-banner__img"
                                                src="{{ asset('images/section2/3.jpg') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 u-s-m-b-30">
                                            <div class="product-short u-h-100">
                                                <div class="product-short__container">
                                                    <div class="product-short__img-wrap">

                                                        <a class="aspect aspect--bg-grey-fb aspect--square u-d-block"
                                                            href="product-detail.html">

                                                            <img class="aspect__img product-short__img"
                                                                src="{{ asset('images/section2/2.jpg') }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product-short__info">
                                                        <div class="priceSold">
                                                            <span class="product-bs__discount">R$379.99</span>
                                                            <span class="product-short__price">R$322.99</span>
                                                        </div>

                                                        <span class="product-short__name">

                                                            <a href="product-detail.html">G-SHOCK</a></span>

                                                        <span class="product-short__category">

                                                            <a href="shop-side-version-2.html">Acessório
                                                                Masculino</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 u-s-m-b-30">
                                            <div class="product-short u-h-100">
                                                <div class="product-short__container">
                                                    <div class="product-short__img-wrap">

                                                        <a class="aspect aspect--bg-grey-fb aspect--square u-d-block"
                                                            href="product-detail.html">

                                                            <img class="aspect__img product-short__img"
                                                                src="{{ asset('images/section2/1.jpg') }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="product-short__info">

                                                        <span class="product-short__price">R$176.77</span>

                                                        <span class="product-short__name">

                                                            <a href="product-detail.html">Bucket The North
                                                                Face</a></span>

                                                        <span class="product-short__category">

                                                            <a href="shop-side-version-2.html">Acessório
                                                                Uniseex</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <a class="i3-banner" href="shop-side-version-2.html">
                                                <div class="aspect aspect--bg-grey-fb aspect--1048-334">
                                                    <img class="aspect__img i3-banner__img"
                                                        src="{{ asset('images/section2/4.jpg') }}" alt="">
                                                </div>
                                            </a>
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


            <!--====== Section 3 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">PRODUTOS RECENTES</h1>

                                    <span class="section__span u-c-silver">RECEM CHEGADOS</span>
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
                            @foreach ($products as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                    <div class="product-r u-h-100">
                                        <div class="product-r__container">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="{{route('productDetails', $product->PRODUTO_ID)}}">
                                                @php
                                                    $primaryImage = $product->produtoImagens->first();
                                                @endphp

                                                @if ($primaryImage)
                                                    <img class="aspect__img" src="{{ $primaryImage->IMAGEM_URL }}"
                                                        alt="">
                                                @endif
                                            </a>
                                            <div class="product-r__action-wrap">
                                                <ul class="product-r__action-list">
                                                    <li class="margin">

                                                        <a 
                                                            data-modal="modal" 
                                                            data-modal-id="#quick-look" 
                                                            data-bs-toggle="modal"
                                                            class="ProductsDetailModal"
                                                            data-bs-target="#ProductsDetailModal"
                                                            data-nome="{{$product->PRODUTO_NOME}}"
                                                            data-desc="{{$product->PRODUTO_DESC}}"
                                                            data-preco="{{$product->PRODUTO_PRECO}}"
                                                            data-idprod="{{$product->PRODUTO_ID}}"
                                                            data-desconto="{{$product->PRODUTO_DESCONTO}}"
                                                            data-fotos="{{$product->produtoImagens}}"
                                                            data-categoria="{{$product->categoria->CATEGORIA_NOME}}"
                                                            @if ($product->produtoEstoque)
                                                                data-estoque="{{$product->produtoEstoque->PRODUTO_QTD}}"
                                                            @else
                                                                data-estoque="{{0}}"
                                                            @endif
                                                            @auth
                                                                data-usuario="{{$user->USUARIO_ID}}"
                                                            @endauth >
                                                            <i class="fas fa-search-plus"></i>
                                                        </a>
                                                    </li>

                                                    @auth
                                                        <li>

                                                            <a data-modal="modal" data-modal-id="#add-to-cart"><i class="fas fa-plus-circle"></i></a>
                                                        </li>
                                                    @else
                                                        <li>

                                                            <a href="{{route('login')}}"><i class="fas fa-plus-circle"></i></a>
                                                        </li>
                                                    @endauth
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-r__info-wrap">

                                            <span class="product-r__category">

                                                <a
                                                    href="shop-side-version-2.html">{{ $product->categoria->CATEGORIA_NOME }}</a></span>
                                            <div class="product-r__n-p-wrap">

                                                <span class="product-r__name">

                                                    <a
                                                        href="product-detail.html">{{ $product->PRODUTO_NOME }}</a></span>
                                                @if ($product->PRODUTO_DESCONTO)
                                                    <div class="priceSold">
                                                        <span
                                                            class="product-bs__discount">R${{ $product->PRODUTO_PRECO }}</span>
                                                        <span
                                                            class="product-r__price">R${{ $product->PRODUTO_PRECO - $product->PRODUTO_DESCONTO }}</span>
                                                    </div>
                                                @else
                                                    <span
                                                        class="product-r__price">R${{ $product->PRODUTO_PRECO }}</span>
                                                @endif
                                            </div>

                                            <span class="product-r__description">{{ substr($product->PRODUTO_DESC, 0, 200) }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 3 ======-->


            <!--====== Section 4 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-16">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">PRODUTOS MAIS VENDIDOS</h1>

                                    <span class="section__span u-c-silver u-s-m-b-16">ENCONTRE OS PRODUTOS MAIS VENDIDOS NA CHARLIE</span>
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
                            <div class="col-lg-12">
                                <div class="filter-category-container">
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-2 js-checked" type="button"
                                            data-filter="*">TODOS</button>
                                    </div>

                                    @foreach ($categories->take(4) as $category)
                                        <div class="filter__category-wrapper">

                                            <button class="btn filter__btn filter__btn--style-2" type="button"
                                                
                                                    @if ($category->CATEGORIA_ID == 1)
                                                        data-filter=".outwear"
                                                    @elseif ($category->CATEGORIA_ID == 2)
                                                        data-filter=".bottom"
                                                    @elseif ($category->CATEGORIA_ID == 3)
                                                        data-filter=".footwear"
                                                    @else
                                                        data-filter=".accessories"
                                                    @endif
                                                >{{$category->CATEGORIA_NOME}}</button>
                                        </div>
                                    @endforeach
                                    
                                </div>
                                <div class="filter__grid-wrapper u-s-m-t-30 toHideAndScrol">
                                    <div class="row">
                                        @foreach ($categories as $category)
                                            @if ($category->CATEGORIA_ID == 1)
                                                @foreach ($products->where('CATEGORIA_ID', $category->CATEGORIA_ID) as $product)
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item outwear">
                                                        <div class="product-bs">
                                                            <div class="product-bs__container">
                                                                <div class="product-bs__wrap">

                                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                                        href="product-detail.html">

                                                                        <img class="aspect__img"
                                                                            src="{{$product->produtoImagens->first()->IMAGEM_URL}}"
                                                                            alt=""></a>
                                                                    <div class="product-bs__action-wrap">
                                                                        
                                                                         <ul class="product-bs__action-list">
                                                                            <li>
                                                                                <a 
                                                                                    data-modal="modal" 
                                                                                    data-modal-id="#quick-look" 
                                                                                    data-bs-toggle="modal"
                                                                                    class="ProductsDetailModal"
                                                                                    data-bs-target="#ProductsDetailModal"
                                                                                    data-nome="{{$product->PRODUTO_NOME}}"
                                                                                    data-desc="{{$product->PRODUTO_DESC}}"
                                                                                    data-preco="{{$product->PRODUTO_PRECO}}"
                                                                                    data-idprod="{{$product->PRODUTO_ID}}"
                                                                                    data-desconto="{{$product->PRODUTO_DESCONTO}}"
                                                                                    data-fotos="{{$product->produtoImagens}}"
                                                                                    data-categoria="{{$product->categoria->CATEGORIA_NOME}}"
                                                                                    @if ($product->produtoEstoque)
                                                                                        data-estoque="{{$product->produtoEstoque->PRODUTO_QTD}}"
                                                                                    @else
                                                                                        data-estoque="{{0}}"
                                                                                    @endif
                                                                                    @auth
                                                                                        data-usuario="{{$user->USUARIO_ID}}"
                                                                                    @endauth >
                                                                                    <i class="fas fa-search-plus"></i>
                                                                                </a>
                                                                            </li>

                                                                            @auth
                                                                                <li>

                                                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i class="fas fa-plus-circle"></i></a>
                                                                                </li>
                                                                            @else
                                                                                <li>

                                                                                    <a href="{{route('login')}}"><i class="fas fa-plus-circle"></i></a>
                                                                                </li>
                                                                            @endauth
                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                                <span class="product-bs__category">

                                                                    <a href="shop-side-version-2.html">{{$product->categoria->CATEGORIA_NOME}}</a></span>

                                                                <span class="product-bs__name">

                                                                    <a href="product-detail.html">{{$product->PRODUTO_NOME}}</a></span>
                                                                <div class="product-bs__rating gl-rating-style"><i
                                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                        class="far fa-star"></i>

                                                                    <span class="product-bs__review">(23)</span>
                                                                </div>

                                                                <span class="product-bs__price">R${{$product->PRODUTO_PRECO - $product->PRODUTO_DESCONTO}}

                                                                    <span class="product-bs__discount">R${{$product->PRODUTO_PRECO}}</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @elseif ($category->CATEGORIA_ID == 2)
                                                @foreach ($products->where('CATEGORIA_ID', $category->CATEGORIA_ID) as $product)
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item bottom">
                                                        <div class="product-bs">
                                                            <div class="product-bs__container">
                                                                <div class="product-bs__wrap">

                                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                                        href="product-detail.html">

                                                                        <img class="aspect__img"
                                                                            src="{{$product->produtoImagens->first()->IMAGEM_URL}}"
                                                                            alt=""></a>
                                                                    <div class="product-bs__action-wrap">
                                                                        
                                                                         <ul class="product-bs__action-list">
                                                                            <li>
                                                                                <a 
                                                                                    data-modal="modal" 
                                                                                    data-modal-id="#quick-look" 
                                                                                    data-bs-toggle="modal"
                                                                                    class="ProductsDetailModal"
                                                                                    data-bs-target="#ProductsDetailModal"
                                                                                    data-nome="{{$product->PRODUTO_NOME}}"
                                                                                    data-desc="{{$product->PRODUTO_DESC}}"
                                                                                    data-preco="{{$product->PRODUTO_PRECO}}"
                                                                                    data-idprod="{{$product->PRODUTO_ID}}"
                                                                                    data-desconto="{{$product->PRODUTO_DESCONTO}}"
                                                                                    data-fotos="{{$product->produtoImagens}}"
                                                                                    data-categoria="{{$product->categoria->CATEGORIA_NOME}}"
                                                                                    @if ($product->produtoEstoque)
                                                                                        data-estoque="{{$product->produtoEstoque->PRODUTO_QTD}}"
                                                                                    @else
                                                                                        data-estoque="{{0}}"
                                                                                    @endif
                                                                                    @auth
                                                                                        data-usuario="{{$user->USUARIO_ID}}"
                                                                                    @endauth >
                                                                                    <i class="fas fa-search-plus"></i>
                                                                                </a>
                                                                            </li>

                                                                            @auth
                                                                                <li>

                                                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i class="fas fa-plus-circle"></i></a>
                                                                                </li>
                                                                            @else
                                                                                <li>

                                                                                    <a href="{{route('login')}}"><i class="fas fa-plus-circle"></i></a>
                                                                                </li>
                                                                            @endauth
                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                                <span class="product-bs__category">

                                                                    <a href="shop-side-version-2.html">{{$product->categoria->CATEGORIA_NOME}}</a></span>

                                                                <span class="product-bs__name">

                                                                    <a href="product-detail.html">{{$product->PRODUTO_NOME}}</a></span>
                                                                <div class="product-bs__rating gl-rating-style"><i
                                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                        class="far fa-star"></i>

                                                                    <span class="product-bs__review">(23)</span>
                                                                </div>

                                                                <span class="product-bs__price">R${{$product->PRODUTO_PRECO - $product->PRODUTO_DESCONTO}}

                                                                    <span class="product-bs__discount">R${{$product->PRODUTO_PRECO}}</span></span>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                @endforeach
                                            @elseif ($category->CATEGORIA_ID == 3)
                                                @foreach ($products->where('CATEGORIA_ID', $category->CATEGORIA_ID) as $product)
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item accessories">
                                                        <div class="product-bs">
                                                            <div class="product-bs__container">
                                                                <div class="product-bs__wrap">

                                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                                        href="product-detail.html">

                                                                        <img class="aspect__img"
                                                                            src="{{$product->produtoImagens->first()->IMAGEM_URL}}"
                                                                            alt=""></a>
                                                                    <div class="product-bs__action-wrap">
                                                                        
                                                                         <ul class="product-bs__action-list">
                                                                            <li>
                                                                                <a 
                                                                                    data-modal="modal" 
                                                                                    data-modal-id="#quick-look" 
                                                                                    data-bs-toggle="modal"
                                                                                    class="ProductsDetailModal"
                                                                                    data-bs-target="#ProductsDetailModal"
                                                                                    data-nome="{{$product->PRODUTO_NOME}}"
                                                                                    data-desc="{{$product->PRODUTO_DESC}}"
                                                                                    data-preco="{{$product->PRODUTO_PRECO}}"
                                                                                    data-idprod="{{$product->PRODUTO_ID}}"
                                                                                    data-desconto="{{$product->PRODUTO_DESCONTO}}"
                                                                                    data-fotos="{{$product->produtoImagens}}"
                                                                                    data-categoria="{{$product->categoria->CATEGORIA_NOME}}"
                                                                                    @if ($product->produtoEstoque)
                                                                                        data-estoque="{{$product->produtoEstoque->PRODUTO_QTD}}"
                                                                                    @else
                                                                                        data-estoque="{{0}}"
                                                                                    @endif
                                                                                    @auth
                                                                                        data-usuario="{{$user->USUARIO_ID}}"
                                                                                    @endauth >
                                                                                    <i class="fas fa-search-plus"></i>
                                                                                </a>
                                                                            </li>

                                                                            @auth
                                                                                <li>

                                                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i class="fas fa-plus-circle"></i></a>
                                                                                </li>
                                                                            @else
                                                                                <li>

                                                                                    <a href="{{route('login')}}"><i class="fas fa-plus-circle"></i></a>
                                                                                </li>
                                                                            @endauth
                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                                <span class="product-bs__category">

                                                                    <a href="shop-side-version-2.html">{{$product->categoria->CATEGORIA_NOME}}</a></span>

                                                                <span class="product-bs__name">

                                                                    <a href="product-detail.html">{{$product->PRODUTO_NOME}}</a></span>
                                                                <div class="product-bs__rating gl-rating-style"><i
                                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                        class="far fa-star"></i>

                                                                    <span class="product-bs__review">(23)</span>
                                                                </div>

                                                                <span class="product-bs__price">R${{$product->PRODUTO_PRECO - $product->PRODUTO_DESCONTO}}

                                                                    <span class="product-bs__discount">R${{$product->PRODUTO_PRECO}}</span></span>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                @endforeach
                                            @else
                                                @foreach ($products->where('CATEGORIA_ID', $category->CATEGORIA_ID) as $product)
                                                    <div
                                                        class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item footwear">
                                                        <div class="product-bs">
                                                            <div class="product-bs__container">
                                                                <div class="product-bs__wrap">

                                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                                        href="product-detail.html">

                                                                        <img class="aspect__img"
                                                                            src="{{$product->produtoImagens->first()->IMAGEM_URL}}"
                                                                            alt=""></a>
                                                                    <div class="product-bs__action-wrap">
                                                                        
                                                                         <ul class="product-bs__action-list">
                                                                            <li>
                                                                                <a 
                                                                                    data-modal="modal" 
                                                                                    data-modal-id="#quick-look" 
                                                                                    data-bs-toggle="modal"
                                                                                    class="ProductsDetailModal"
                                                                                    data-bs-target="#ProductsDetailModal"
                                                                                    data-nome="{{$product->PRODUTO_NOME}}"
                                                                                    data-desc="{{$product->PRODUTO_DESC}}"
                                                                                    data-preco="{{$product->PRODUTO_PRECO}}"
                                                                                    data-idprod="{{$product->PRODUTO_ID}}"
                                                                                    data-desconto="{{$product->PRODUTO_DESCONTO}}"
                                                                                    data-fotos="{{$product->produtoImagens}}"
                                                                                    data-categoria="{{$product->categoria->CATEGORIA_NOME}}"
                                                                                    @if ($product->produtoEstoque)
                                                                                        data-estoque="{{$product->produtoEstoque->PRODUTO_QTD}}"
                                                                                    @else
                                                                                        data-estoque="{{0}}"
                                                                                    @endif
                                                                                    @auth
                                                                                        data-usuario="{{$user->USUARIO_ID}}"
                                                                                    @endauth >
                                                                                    <i class="fas fa-search-plus"></i>
                                                                                </a>
                                                                            </li>

                                                                            @auth
                                                                                <li>

                                                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i class="fas fa-plus-circle"></i></a>
                                                                                </li>
                                                                            @else
                                                                                <li>

                                                                                    <a href="{{route('login')}}"><i class="fas fa-plus-circle"></i></a>
                                                                                </li>
                                                                            @endauth
                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                                <span class="product-bs__category">

                                                                    <a href="shop-side-version-2.html">{{$product->categoria->CATEGORIA_NOME}}</a></span>

                                                                <span class="product-bs__name">

                                                                    <a href="product-detail.html">{{$product->PRODUTO_NOME}}</a></span>
                                                                <div class="product-bs__rating gl-rating-style"><i
                                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                        class="far fa-star"></i>

                                                                    <span class="product-bs__review">(23)</span>
                                                                </div>

                                                                <span class="product-bs__price">R${{$product->PRODUTO_PRECO - $product->PRODUTO_DESCONTO}}

                                                                    <span class="product-bs__discount">R${{$product->PRODUTO_PRECO}}</span></span>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 4 ======-->


            <!--====== Section 5 ======-->
            <div class="banner-bg">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-bg__countdown">
                                    <div class="countdown countdown--style-banner">
                                        <div class="countdown__content">
                                            <div>
                                                <span class="countdown__value" id="days"></span>
                                                <span class="countdown__key">Dias</span>
                                            </div>
                                        </div>
                                        <div class="countdown__content">
                                            <div>
                                                <span class="countdown__value" id="hours"></span>
                                                <span class="countdown__key">Horas</span>
                                            </div>
                                        </div>
                                        <div class="countdown__content">
                                            <div>
                                                <span class="countdown__value" id="mins"></span>
                                                <span class="countdown__key">Mins</span>
                                            </div>
                                        </div>
                                        <div class="countdown__content">
                                            <div>
                                                <span class="countdown__value" id="secs"></span>
                                                <span class="countdown__key">Segs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-bg__wrap">
                                    <div class="banner-bg__text-1">

                                        <span class="u-c-secondary">Oferta</span>

                                        <span class="u-c-secondary">Em Toda Loja</span></div>
                                    <div class="banner-bg__text-2">

                                        <span class="u-c-secondary">Qualquer Produto</span>

                                        <span class="u-c-secondary">Não Perca!</span></div>

                                    <span class="banner-bg__text-block banner-bg__text-3 u-c-secondary">Ganhe frete grátis ao comprar 2 ou mais produtos!</span>

                                    <a class="banner-bg__shop-now btn--e-secondary">Me Avise!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 5 ======-->


            <!--====== Section 6 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                <div class="column-product">

                                    <span class="column-product__title u-c-secondary u-s-m-b-25">MAIS VENDIDOS DO DIA</span>
                                    <ul class="column-product__list">
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/men/product9.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Men Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Fashion A Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/men/product10.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Men Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Fashion B Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product9.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Dress A Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                <div class="column-product">

                                    <span class="column-product__title u-c-secondary u-s-m-b-25">PRODUTOS DA SEMANA</span>
                                    <ul class="column-product__list">
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product10.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Dress B Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00

                                                        <span class="product-l__discount">$160</span></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product11.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Dress C Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00

                                                        <span class="product-l__discount">$160</span></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product12.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Dress D Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00

                                                        <span class="product-l__discount">$160</span></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                <div class="column-product">

                                    <span class="column-product__title u-c-secondary u-s-m-b-25">ACABANDO O ESTOQUE</span>
                                    <ul class="column-product__list">
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product13.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">
                                                    <div class="product-l__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="far fa-star"></i><i
                                                            class="far fa-star"></i></div>

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">New Dress E Nice
                                                            Elegant</a></span>

                                                    <span class="product-l__price">$125.00</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product1.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">
                                                    <div class="product-l__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="far fa-star"></i><i
                                                            class="far fa-star"></i></div>

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">Women intimate Bra</a></span>

                                                    <span class="product-l__price">$125.00</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                        href="product-detail.html">

                                                        <img class="aspect__img"
                                                            src="images/product/women/product2.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="product-l__info-wrap">
                                                    <div class="product-l__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="far fa-star"></i><i
                                                            class="far fa-star"></i></div>

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">Women Wedding Event
                                                            Dress</a></span>

                                                    <span class="product-l__price">$125.00</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 6 ======-->


            <!--====== Section 7 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">

                        <!--====== Brand Slider ======-->
                        <div class="slider-fouc">
                            <div class="owl-carousel" id="brand-slider" data-item="5">
                                <div class="brand-slide">

                                    <a >

                                        <img src="{{asset('images/section7/1.jpg')}}" alt=""></a>
                                </div>
                                <div class="brand-slide">

                                    <a >

                                        <img src="{{asset('images/section7/2.jpg')}}" alt=""></a>
                                </div>
                                <div class="brand-slide">

                                    <a >

                                        <img src="{{asset('images/section7/3.jpg')}}" alt=""></a>
                                </div>
                                <div class="brand-slide">

                                    <a>

                                        <img src="{{asset('images/section7/4.jpg')}}" alt=""></a>
                                </div>
                                <div class="brand-slide">

                                    <a>

                                        <img src="{{asset('images/section7/5.jpg')}}" alt=""></a>
                                </div>
                                <div class="brand-slide">

                                    <a>

                                        <img src="{{asset('images/section7/6.jpg')}}" alt=""></a>
                                </div>
                                <div class="brand-slide">

                                    <a>

                                        <img src="{{asset('images/section7/7.jpg')}}" alt=""></a>
                                </div>
                                <div class="brand-slide">

                                    <a>

                                        <img src="{{asset('images/section7/8.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Brand Slider ======-->
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 7 ======-->
        </div>
        <!--====== End - App Content ======-->


        <!--====== Main Footer ======-->

        <x-mainFooter/>

        <!--====== End - Main Footer ======-->

        <!--====== Modal Section ======-->

        <x-addToCardModal/>
        
        <x-quickLookModal/>

        <x-newsLetter/>

        <!--====== End - Modal Section ======-->
    
    </div>
    <!--====== End - Main App ======-->

    <!--====== timer for section 5 ======-->
        <script>
            const countdownDate = new Date("2024-01-01").getTime();
            
            const interval = setInterval(function() {
                const now = new Date().getTime();
                const distance = countdownDate - now;
                
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                const formattedHours = String(hours).padStart(2, '0');
                const formattedMinutes = String(minutes).padStart(2, '0');
                const formattedSeconds = String(seconds).padStart(2, '0');
            
                document.getElementById("days").innerText = days;
                document.getElementById("hours").innerText = formattedHours;
                document.getElementById("mins").innerText = formattedMinutes;
                document.getElementById("secs").innerText = formattedSeconds;
        
            }, 1000);
        </script>
    <!--====== End - Counter time for section 5 ======-->

    <x-someScripts/>

</body>

</html>
