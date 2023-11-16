<x-guest-layout >
        @auth
            <!--====== Header Wrapper ======-->
            <x-headerForAll :dataFromController="$categories" :user="$productsByUser" />
            <!--====== End - Header Wrapper ======-->    
        @else
            <x-headerForAll :dataFromController="$categories"  />
        @endauth
                    <!--====== Main Header ======-->
                
                <!--====== End - Main Header ======-->
    
    
            <!--====== App Content ======-->
            <div class="app-content">
            <!--====== Section 1 ======-->
            <div class="u-s-p-y-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <div class="shop-w-master">
                                <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>

                                    <span>FILTROS</span></h1>
                                <div class="shop-w-master__sidebar">
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w shop-w--style">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">CATEGORIAS</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-category" data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-category">
                                                <ul class="shop-w__category-list gl-scroll">
                                                    @foreach ($categories as $category)    
                                                        <li class="has-list">
                                                            <a href="search?CATEGORIA_ID={{$category->CATEGORIA_ID}}">{{$category->CATEGORIA_NOME}}</a>
                                                            <span class="category-list__text u-s-m-l-6">({{$category->products->count()}})</span>
                                                            <span class="js-shop-category-span is-expanded fas fa-plus u-s-m-l-6"></span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w shop-w--style">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">AVALIAÇÃO</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-rating" data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-rating">
                                                <ul class="shop-w__list gl-scroll">
                                                    <li>
                                                        <div class="rating__check">

                                                            <input type="checkbox">
                                                            <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                                        </div>

                                                        <span class="shop-w__total-text" id="random1">(2)</span>
                                                        
                                                    </li>
                                                    <li>
                                                        <div class="rating__check">

                                                            <input type="checkbox">
                                                            <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>

                                                                </div>
                                                        </div>

                                                        <span class="shop-w__total-text" id="random2">(8)</span>
                                                    </li>
                                                    <li>
                                                        <div class="rating__check">

                                                            <input type="checkbox">
                                                            <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                                </div>
                                                        </div>

                                                        <span class="shop-w__total-text" id="random3">(10)</span>
                                                    </li>
                                                    <li>
                                                        <div class="rating__check">

                                                            <input type="checkbox">
                                                            <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                                </div>
                                                        </div>

                                                        <span class="shop-w__total-text" id="random4">(12)</span>
                                                    </li>
                                                    <li>
                                                        <div class="rating__check">

                                                            <input type="checkbox">
                                                            <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                                </div>
                                                        </div>

                                                        <span class="shop-w__total-text" id="random5">(1)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w shop-w--style">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">PREÇO</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-price" data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-price">
                                                <form class="shop-w__form-p" action="{{route('search')}}" method="GET">
                                                    <div class="shop-w__form-p-wrap">
                                                        <input type="text" name="PRODUTO_NOME" value="{{ $searchTerm }}" style="display: none;">
                                                        <div>

                                                            <label for="price-min"></label>

                                                            @if (isset($minPrice))
                                                                <input class="input-text input-text--primary-style" type="text" id="price-min" name="minPrice" value="{{$minPrice}}"></div>
                                                            @else
                                                                <input class="input-text input-text--primary-style" type="text" id="price-min" name="minPrice" placeholder="MIN"></div>
                                                            @endif
                                                        <div>

                                                            <label for="price-max"></label>

                                                            @if (isset($maxPrice))
                                                                <input class="input-text input-text--primary-style" type="text" id="price-max" value="{{$maxPrice}}" name="maxPrice"></div>
                                                            @else
                                                                <input class="input-text input-text--primary-style" type="text" id="price-max" placeholder="MAX" name="maxPrice"></div>
                                                            @endif
                                                        <div>

                                                            <button class="btn btn--icon fas fa-angle-right btn--e-transparent-platinum-b-2" type="submit"></button></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="shop-p">
                                <div class="shop-p__toolbar u-s-m-b-30">
                                    <div class="shop-p__meta-wrap u-s-m-b-60">
                                        @if ($products->total() == 1)
                                            <span class="shop-p__meta-text-1">{{$products->total()}} RESULTADO ENCONTRADO</span>  
                                        @else
                                            <span class="shop-p__meta-text-1">{{$products->total()}} RESULTADOS ENCONTRADOS</span>
                                        @endif
                                    </div>
                                    <div class="shop-p__tool-style">
                                        <div class="tool-style__group u-s-m-b-8">

                                            <span class="js-shop-grid-target is-active">Grid</span>

                                            <span class="js-shop-list-target">List</span></div>
                                        <form action="{{route('search')}}" method="GET" id="formProductShow">
                                            <div class="tool-style__form-wrap">
                                                @isset($searchTerm)
                                                        <input type="text" name="PRODUTO_NOME" value="{{ $searchTerm }}" style="display: none;">
                                                    @endisset
                                                    @isset($minPrice)
                                                        <input class="input-text input-text--primary-style" type="text" id="price-min" name="minPrice" value="{{$minPrice}}" style="display: none">
                                                    @endisset
                                                    @isset($maxPrice)
                                                        <input class="input-text input-text--primary-style" type="text" id="price-max" value="{{$maxPrice}}" name="maxPrice" style="display: none">
                                                    @endisset
                                                <div class="u-s-m-b-8"><select name="productsPerPage" id="productsPerPage" class="select-box select-box--transparent-b-2">
                                                    @if(isset($productsPerPage))
                                                        <option value="8" {{ $productsPerPage === '8' ? 'selected' : '' }}>Mostrar: 8</option>
                                                        <option value="12" {{ $productsPerPage === '12' ? 'selected' : '' }}>Mostrar: 12</option>
                                                        <option value="28" {{ $productsPerPage === '28' ? 'selected' : '' }}>Mostrar: 28</option>
                                                        <option value="16" {{ $productsPerPage === '16' ? 'selected' : '' }}>Mostrar: 16</option>
                                                    @else
                                                        <option value="8">Mostrar: 8</option>
                                                        <option value="12" selected>Mostrar: 12</option>
                                                        <option value="28">Mostrar: 28</option>
                                                        <option value="16">Mostrar: 16</option>
                                                    @endif
                                                </select>
                                                </div>
                                                <div class="u-s-m-b-8"><select name="takeFormat" id="takeFormat" class="select-box select-box--transparent-b-2">
                                                    @if (isset($takeFormat))
                                                        <option value="newest" {{ $takeFormat === 'newest' ? 'selected' : '' }}>Ordernar Por: Novos</option>
                                                        <option value="latest" {{ $takeFormat === 'latest' ? 'selected' : '' }}>Ordernar Por: Últimos</option>
                                                        <option value="besSelling" {{ $takeFormat === 'bestSelling' ? 'selected' : '' }}>Ordernar Por: Mais Vendidos</option>
                                                        <option value="lowestPrice" {{ $takeFormat === 'lowestPrice' ? 'selected' : '' }}>Ordernar Por: Menor Preço</option>
                                                        <option value="highestPrice" {{ $takeFormat === 'highestPrice' ? 'selected' : '' }}>Ordernar Por: Maior Preço</option>
                                                    @else
                                                        <option value="newest" selected>Ordernar Por: Novos</option>
                                                        <option value="latest">Ordernar Por: Últimos</option>
                                                        <option value="besSelling">Ordernar Por: Mais Vendidos</option>
                                                        <option value="lowestPrice">Ordernar Por: Menor Preço</option>
                                                        <option value="highestPrice">Ordernar Por: Maior Preço</option>
                                                    @endif

                                                    </select></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="shop-p__collection">
                                    <div class="row is-grid-active">
                                        @foreach ($products as $product)
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="product-m">
                                                    <div class="product-m__thumb">

                                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{route('productDetails', $product->PRODUTO_ID)}}">
                                                            @php
                                                                $primaryImage = $product->produtoImagens->first();
                                                            @endphp
                                                            @if ($primaryImage)
                                                                <img class="aspect__img" src="{{ $primaryImage->IMAGEM_URL }}"
                                                                    alt="">
                                                            @endif
                                                        </a>
                                                        <div class="product-m__quick-look">
                                                            <a 
                                                                data-modal="modal" 
                                                                data-modal-id="#quick-look" 
                                                                href="#" 
                                                                data-bs-toggle="modal"
                                                                class="ProductsDetailModal"
                                                                data-bs-target="#ProductsDetailModal"
                                                                data-nome="{{$product->PRODUTO_NOME}}"
                                                                data-desc="{{$product->PRODUTO_DESC}}"
                                                                data-preco="{{$product->PRODUTO_PRECO}}"
                                                                data-desconto="{{$product->PRODUTO_DESCONTO}}"
                                                                data-fotos="{{$product->produtoImagens}}"
                                                                data-categoria="{{$product->categoria->CATEGORIA_NOME}}"
                                                                @if ($product->produtoEstoque)
                                                                    data-estoque="{{$product->produtoEstoque->PRODUTO_QTD}}"
                                                                @else
                                                                    data-estoque="{{0}}"
                                                                @endif >
                                                                <span class="material-icons">zoom_in</span>
                                                            </a>
                                                        </div>
                                                        <div class="product-m__add-cart">

                                                            <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Adicionar ao Carrinho</a></div>
                                                    </div>
                                                    <div class="product-m__content">
                                                        <div class="product-m__category">

                                                            <a href="search?CATEGORIA_ID={{$product->categoria->CATEGORIA_ID}}">{{ $product->categoria->CATEGORIA_NOME}}</a></div>
                                                        <div class="product-m__name">

                                                            <a href="{{route('productDetails', $product->PRODUTO_ID)}}">{{ $product->PRODUTO_NOME}}</a></div>
                                                        <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        </div>
                                                        <div class="product-m__price">R$ {{ $product->PRODUTO_PRECO}}</div>
                                                        <div class="product-m__hover">
                                                            <div class="product-m__preview-description">

                                                                <span>{{ $product->PRODUTO_DESC}}</span></div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="u-s-p-y-60">
                                   
                                    <!--====== Pagination ======-->
                                    <div class="pagination-container">
                                        <ul class="shop-p__pagination">
                                            {{-- Botão "Anterior" --}}
                                            @if ($products->onFirstPage())
                                                <li class="disabled">
                                                    <span>&laquo;</span>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ $products->previousPageUrl() }}" rel="prev">&laquo;</a>
                                                </li>
                                            @endif
                                    
                                            {{-- Links das páginas --}}
                                            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                                @if ($page == $products->currentPage())
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
                                            @if ($products->hasMorePages())
                                                <li>
                                                    <a href="{{ $products->nextPageUrl() }}" rel="next">&raquo;</a>
                                                </li>
                                            @else
                                                <li class="disabled">
                                                    <span>&raquo;</span>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <!--====== End - Pagination ======-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->
        </div>
   

        <x-quickLookModal/>

        <x-addToCardModal/>
    </div>
    <!--====== End - App Content ======-->
        <script>
            var select = document.getElementById("productsPerPage");
            var select2 = document.getElementById("takeFormat");
            var form = document.getElementById("formProductShow");

            select.addEventListener("change", sendForm);
            select2.addEventListener("change", sendForm);
            
            function sendForm() {
                form.submit();
            }
        </script>

        <script>
            function getRandomNumber(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }
        
            document.getElementById('random1').textContent = getRandomNumber(1, 400); 
            document.getElementById('random2').textContent = getRandomNumber(1, 400);
            document.getElementById('random3').textContent = getRandomNumber(1, 400);
            document.getElementById('random4').textContent = getRandomNumber(1, 400);
            document.getElementById('random5').textContent = getRandomNumber(1, 400); 
            document.getElementById('random6').textContent = getRandomNumber(1, 400); 
        </script>

</x-guest-layout>