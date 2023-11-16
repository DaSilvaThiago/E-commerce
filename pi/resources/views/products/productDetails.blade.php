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
            <div class="u-s-p-t-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">

                            <!--====== Product Breadcrumb ======-->
                            <div class="pd-breadcrumb u-s-m-b-30">
                                <ul class="pd-breadcrumb__list">
                                    <li class="has-separator">

                                        <a href="index.hml">Home</a></li>
                                    <li class="has-separator">

                                     <a href="shop-side-version-2.html">{{$product->categoria->CATEGORIA_NOME}}</a></li>
                                    <li class="is-marked">

                                        <a href="shop-side-version-2.html">{{$product->PRODUTO_NOME}}</a></li>
                                </ul>
                            </div>
                            <!--====== End - Product Breadcrumb ======-->


                            <!--====== Product Detail Zoom ======-->
                            <div class="pd u-s-m-b-30">
                                <div class="slider-fouc pd-wrap">
                                    <div id="pd-o-initiate">
                                        @foreach ($product->produtoImagens as $image)
                                            <div class="pd-o-img-wrap" data-src="images/product/product-d-1.jpg">

                                                <img class="u-img-fluid" src="{{$image->IMAGEM_URL}}" data-zoom-image="images/product/product-d-1.jpg" alt=""></div>
                                        @endforeach
                                    </div>

                                    <span class="pd-text">Click para dar zoom</span>
                                </div>
                                <div class="u-s-m-t-15">
                                    <div class="slider-fouc">
                                        <div id="pd-o-thumbnail">
                                            @foreach ($product->produtoImagens as $image)
                                                <div class="pd-o-img-wrap" data-src="images/product/product-d-1.jpg">

                                                <img class="u-img-fluid" src="{{$image->IMAGEM_URL}}" data-zoom-image="images/product/product-d-1.jpg" alt=""></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--====== End - Product Detail Zoom ======-->
                        </div>
                        <div class="col-lg-7">

                            <!--====== Product Right Side Details ======-->
                            <div class="pd-detail">
                                <div>

                                    <span class="pd-detail__name">{{$product->PRODUTO_NOME}}</span></div>
                                <div>
                                    <div class="pd-detail__inline">

                                        <span class="pd-detail__price">
                                            R${{$product->PRODUTO_PRECO - $product->PRODUTO_DESCONTO}}
                                        </span>

                                        <span class="pd-detail__discount">({{floor(($product->PRODUTO_DESCONTO / $product->PRODUTO_PRECO) * 100)}}% OFF)</span><del class="pd-detail__del"> R${{$product->PRODUTO_PRECO}}</del></div>
                                </div>
                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__rating gl-rating-style">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="5">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="4">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="3">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="2">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="1">1 star</label>
                                    </div>

                                    <span class="pd-detail__review u-s-m-l-4">

                                        <a data-click-scroll="#view-review"  id="random1"></a></span>
                                </div>
                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__inline" id="stock">
                                        
                                        @if (empty($product->produtoEstoque->PRODUTO_QTD) || $product->produtoEstoque->PRODUTO_QTD <= 0)
                                            <span class="pd-detail__left">estoque esgotado</span>
                                        @elseif ($product->produtoEstoque->PRODUTO_QTD > 20)
                                            <span class="pd-detail__stock">{{$product->produtoEstoque->PRODUTO_QTD}} em estoque</span>
                                        @else
                                            <span class="pd-detail__left">restam apenas {{$product->produtoEstoque->PRODUTO_QTD}}</span>
                                        @endif

                                        </div>
                                </div>
                                <div class="u-s-m-b-15">

                                    <span class="pd-detail__preview-desc">{{$product->PRODUTO_DESC}}</span></div>
                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__inline">

                                        <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                            <a >Adicionar a lista de desejos</a>

                                            <span class="pd-detail__click-count">(222)</span></span></div>
                                </div>
                                <div class="u-s-m-b-15">
                                    <div class="pd-detail__inline">

                                        <span class="pd-detail__click-wrap"><i class="far fa-envelope u-s-m-r-6"></i>

                                            <a>Me avise</a>

                                            <span class="pd-detail__click-count">(20)</span></span></div>
                                </div>
                                <div class="u-s-m-b-15">
                                    <ul class="pd-social-list">
                                        <li>

                                            <a class="s-fb--color-hover" ><i class="fab fa-facebook-f"></i></a></li>
                                        <li>

                                            <a class="s-tw--color-hover"><i class="fab fa-twitter"></i></a></li>
                                        <li>

                                            <a class="s-insta--color-hover" ><i class="fab fa-instagram"></i></a></li>
                                        <li>

                                            <a class="s-wa--color-hover" ><i class="fab fa-whatsapp"></i></a></li>
                                        <li>

                                            <a class="s-gplus--color-hover"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                                <div class="u-s-m-b-15">
                                    <form class="pd-detail__form">
                                        <div class="u-s-m-b-15">

                                            <span class="pd-detail__label u-s-m-b-8">Cor:</span>
                                            <div class="pd-detail__color">
                                                <div class="color__radio">

                                                    <input type="radio" id="jet" name="color" checked>

                                                    <label class="color__radio-label" for="jet" style="background-color: #333333"></label></div>
                                                <div class="color__radio">

                                                    <input type="radio" id="folly" name="color">

                                                    <label class="color__radio-label" for="folly" style="background-color: #FF0055"></label></div>
                                                <div class="color__radio">

                                                    <input type="radio" id="yellow" name="color">

                                                    <label class="color__radio-label" for="yellow" style="background-color: #FFFF00"></label></div>
                                                <div class="color__radio">

                                                    <input type="radio" id="granite-gray" name="color">

                                                    <label class="color__radio-label" for="granite-gray" style="background-color: #605F5E"></label></div>
                                                <div class="color__radio">

                                                    <input type="radio" id="space-cadet" name="color">

                                                    <label class="color__radio-label" for="space-cadet" style="background-color: #1D3461"></label></div>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <span class="pd-detail__label u-s-m-b-8">Tamanho:</span>
                                            <div class="pd-detail__size">
                                                <div class="size__radio">

                                                    <input type="radio" id="xs" name="size" checked>

                                                    <label class="size__radio-label" for="xs">XS</label></div>
                                                <div class="size__radio">

                                                    <input type="radio" id="small" name="size">

                                                    <label class="size__radio-label" for="xxl">Small</label></div>
                                                <div class="size__radio">

                                                    <input type="radio" id="medium" name="size">

                                                    <label class="size__radio-label" for="medium">Medium</label></div>
                                                <div class="size__radio">

                                                    <input type="radio" id="large" name="size">

                                                    <label class="size__radio-label" for="xxl">Large</label></div>
                                                <div class="size__radio">

                                                    <input type="radio" id="xl" name="size">

                                                    <label class="size__radio-label" for="xl">XL</label></div>
                                                <div class="size__radio">

                                                    <input type="radio" id="xxl" name="size">

                                                    <label class="size__radio-label" for="xxl">XXL</label></div>
                                            </div>
                                        </div>
                                        <div class="pd-detail-inline-2">
                                            <div class="u-s-m-b-15">

                                                <!--====== Input Counter ======-->
                                                <div class="input-counter">

                                                    <span class="input-counter__minus fas fa-minus" style="padding-top: 20px"></span>

                                                    <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">

                                                    <span class="input-counter__plus fas fa-plus" style="padding-top: 20px"></span></div>
                                                <!--====== End - Input Counter ======-->
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <button class="btn btn--e-brand-b-2" type="submit">Adicionar ao Carrinho</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="u-s-m-b-15">

                                    <span class="pd-detail__label u-s-m-b-8">Política do produto:</span>
                                    <ul class="pd-detail__policy-list">
                                        <li><i class="fas fa-check-circle u-s-m-r-8"></i>
    
                                            <span>Compra segura. </span></li>
                                        <li><i class="fas fa-check-circle u-s-m-r-8"></i>
    
                                            <span>Reembolso total caso não receber o produto. </span></li>
                                        <li><i class="fas fa-check-circle u-s-m-r-8"></i>
    
                                            <span>Devolução caso o produto não seja o comprado. </span></li>
                                    </ul>
                                </div>
                            </div>
                            <!--====== End - Product Right Side Details ======-->
                        </div>
                    </div>
                </div>
            </div>

            <!--====== Product Detail Tab ======-->
            <div class="u-s-p-y-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pd-tab">
                                <div class="u-s-m-b-30">
                                    <ul class="nav pd-tab__list">
                                        <li class="nav-item">

                                            <a class="nav-link" data-toggle="tab" href="#pd-desc">DESCRICAO</a></li>
                                        <li class="nav-item">

                                            <a class="nav-link active" id="view-review" data-toggle="tab" href="#pd-rev">AVALIACOES

                                                <span>(23)</span></a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">

                                    <!--====== Tab 1 ======-->
                                    <div class="tab-pane" id="pd-desc">
                                        <div class="pd-tab__desc">
                                            <div class="u-s-m-b-15">
                                                <p>{{$product->PRODUTO_DESC}}</p>
                                            </div>
                                            <div class="u-s-m-b-30"><iframe src="https://www.youtube.com/embed/qKqSBm07KZk" allowfullscreen></iframe></div>
                                            <div class="u-s-m-b-30">
                                                <ul>
                                                    <li><i class="fas fa-check u-s-m-r-8"></i>

                                                        <span>Compra segura. </span></li>
                                                    <li><i class="fas fa-check u-s-m-r-8"></i>

                                                        <span>Reembolso total caso não receber o produto. </span></li>
                                                    <li><i class="fas fa-check u-s-m-r-8"></i>

                                                        <span>Devolução caso o produto não seja o comprado. </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--====== End - Tab 1 ======-->

                                    <!--====== Tab 3 ======-->
                                    <div class="tab-pane fade show active" id="pd-rev">
                                        <div class="pd-tab__rev">
                                            <div class="u-s-m-b-30">
                                                <div class="pd-tab__rev-score">
                                                    <div class="u-s-m-b-8">
                                                        <h2>23 Avaliacoes - 4.6</h2>
                                                    </div>
                                                    <div class="gl-rating-style-2 u-s-m-b-8"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                                                    <div class="u-s-m-b-8">
                                                        <h4>Nos queremos escutar voce</h4>
                                                    </div>

                                                    <span class="gl-text">Nos diga oque achou do produto</span>
                                                </div>
                                            </div>
                                            <div class="u-s-m-b-30">
                                                <form class="pd-tab__rev-f1">
                                                    <div class="rev-f1__group">
                                                        <div class="u-s-m-b-15">
                                                            <h2>5 Avaliacoes para {{$product->PRODUTO_NOME}}</h2>
                                                        </div>
                                                    </div>
                                                    <div class="rev-f1__review">
                                                        @for ($i = 0; $i < 3; $i++)
                                                            <div class="review-o u-s-m-b-15">
                                                                <div class="review-o__info u-s-m-b-8">

                                                                    <span class="review-o__name">Thiago Dias</span>

                                                                    <span class="review-o__date">16 Nov 2023 00:34:43</span></div>
                                                                <div class="review-o__rating gl-rating-style u-s-m-b-8"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>

                                                                    <span>(4)</span></div>
                                                                <p class="review-o__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                            </div>
                                                        @endfor
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--====== End - Tab 3 ======-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Product Detail Tab ======-->
            <div class="u-s-p-b-90">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">CLIENTES TAMBEM VIRAM</h1>

                                    <span class="section__span u-c-grey">PRODUCTS THAT CUSTOMER VIEWED</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="slider-fouc">
                            <div class="owl-carousel product-slider" data-item="4">
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product1.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Electronics</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Beats Bomb Wireless Headphone</a></span>
                                        <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                            <span class="product-o__review">(20)</span></div>

                                        <span class="product-o__price">$125.00

                                            <span class="product-o__discount">$160.00</span></span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product2.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Electronics</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Red Wireless Headphone</a></span>
                                        <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                            <span class="product-o__review">(20)</span></div>

                                        <span class="product-o__price">$125.00

                                            <span class="product-o__discount">$160.00</span></span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product3.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Electronics</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Yellow Wireless Headphone</a></span>
                                        <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                            <span class="product-o__review">(20)</span></div>

                                        <span class="product-o__price">$125.00

                                            <span class="product-o__discount">$160.00</span></span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product23.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Electronics</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Razor Gear Ultra Slim 8GB Ram</a></span>
                                        <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                            <span class="product-o__review">(20)</span></div>

                                        <span class="product-o__price">$125.00

                                            <span class="product-o__discount">$160.00</span></span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product26.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Electronics</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Razor Gear Ultra Slim 12GB Ram</a></span>
                                        <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                            <span class="product-o__review">(20)</span></div>

                                        <span class="product-o__price">$125.00

                                            <span class="product-o__discount">$160.00</span></span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product30.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                    <li>

                                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Electronics</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Razor Gear Ultra Slim 16GB Ram</a></span>
                                        <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                            <span class="product-o__review">(20)</span></div>

                                        <span class="product-o__price">$125.00

                                            <span class="product-o__discount">$160.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 1 ======-->
            <x-quickLookModal/>

        <x-addToCardModal/>
        </div>
        <!--====== End - App Content ======-->
        <script>
            function getRandomNumber(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min + " avaliacoes";
            }
        
            document.getElementById('random1').textContent = getRandomNumber(1, 400); 
          </script>
        
    </x-guest-layout>
 