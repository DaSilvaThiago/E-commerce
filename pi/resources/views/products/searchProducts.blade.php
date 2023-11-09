<x-guest-layout>
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
                                                            <a href="#">{{$category->CATEGORIA_NOME}}</a>
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
                                                <h1 class="shop-w__h">PRICE</h1>

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
                                        @if ($products->count() == 1)
                                            <span class="shop-p__meta-text-1">{{$products->count()}} RESULTADO ENCONTRADO</span>  
                                        @else
                                            <span class="shop-p__meta-text-1">{{$products->count()}} RESULTADOS ENCONTRADOS</span>
                                        @endif
                                        
                                    </div>
                                    <div class="shop-p__tool-style">
                                        <div class="tool-style__group u-s-m-b-8">

                                            <span class="js-shop-grid-target is-active">Grid</span>

                                            <span class="js-shop-list-target">List</span></div>
                                        <form>
                                            <div class="tool-style__form-wrap">
                                                <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                                        <option>Show: 8</option>
                                                        <option selected>Show: 12</option>
                                                        <option>Show: 16</option>
                                                        <option>Show: 28</option>
                                                    </select></div>
                                                <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                                        <option selected>Sort By: Newest Items</option>
                                                        <option>Sort By: Latest Items</option>
                                                        <option>Sort By: Best Selling</option>
                                                        <option>Sort By: Lowest Price</option>
                                                        <option>Sort By: Highest Price</option>
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

                                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
                                                            @php
                                                                $primaryImage = $product->produtoImagens->first();
                                                            @endphp
                                                            @if ($primaryImage)
                                                                <img class="aspect__img" src="{{ $primaryImage->IMAGEM_URL }}"
                                                                    alt="">
                                                            @endif
                                                        </a>
                                                        <div class="product-m__quick-look">

                                                            <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                                        <div class="product-m__add-cart">

                                                            <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">ADD no Carrinho</a></div>
                                                    </div>
                                                    <div class="product-m__content">
                                                        <div class="product-m__category">

                                                            <a href="shop-side-version-2.html">{{ $product->categoria->CATEGORIA_NOME}}</a></div>
                                                        <div class="product-m__name">

                                                            <a href="product-detail.html">{{ $product->PRODUTO_NOME}}</a></div>
                                                        <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        </div>
                                                        <div class="product-m__price">R$ {{ $product->PRODUTO_PRECO}}</div>
                                                        <div class="product-m__hover">
                                                            <div class="product-m__preview-description">

                                                                <span>{{ $product->PRODUTO_DESC}}</span></div>
                                                            <div class="product-m__wishlist">

                                                                <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="u-s-p-y-60">

                                    <!--====== Pagination ======-->
                                    <ul class="shop-p__pagination">
                                        <li class="is-active">

                                            <a href="shop-side-version-2.html">1</a></li>
                                        <li>

                                            <a href="shop-side-version-2.html">2</a></li>
                                        <li>

                                            <a href="shop-side-version-2.html">3</a></li>
                                        <li>

                                            <a href="shop-side-version-2.html">4</a></li>
                                        <li>

                                            <a class="fas fa-angle-right" href="shop-side-version-2.html"></a></li>
                                    </ul>
                                    <!--====== End - Pagination ======-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->
        </div>

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

        <x-quickLookModal/>

        <x-addToCardModal/>
        
</x-guest-layout>