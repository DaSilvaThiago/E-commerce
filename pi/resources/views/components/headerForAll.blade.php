<div class="header-wrapper">

    <!--====== Main Header ======-->
    <header class="header--style-1 header--box-shadow">

        <!--====== Nav 1 ======-->
        <nav class="primary-nav primary-nav-wrapper--border">
            <div class="container">

                <!--====== Primary Nav ======-->
                <div class="primary-nav">

                    <!--====== Main Logo ======-->

                    <a class="main-logo" href="{{ route('products.index') }}">

                        <img src="{{ asset('images/logo/logo.png') }}" alt=""></a>
                    <!--====== End - Main Logo ======-->


                    <!--====== Search Form ======-->
                    <form class="main-form" action="{{ route('search') }}" method="GET">

                        <label for="main-search"></label>

                        <input class="input-text input-text--border-radius input-text--style-1" type="text"
                            id="main-search" placeholder="Pesquisar" name="PRODUTO_NOME">

                        <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button>
                    </form>
                    <!--====== End - Search Form ======-->


                    <!--====== Dropdown Main plugin ======-->
                    <div class="menu-init" id="navigation">

                        <button class="btn btn--icon toggle-button fas fa-cogs" type="button"
                            style="display: none"></button>

                        <!--====== Menu ======-->
                        <div class="ah-lg-mode">

                            <span class="ah-close">✕ Close</span>

                            <!--====== List ======-->
                            <ul class="ah-list ah-list--design1 ah-list--link--color-secondary">

                                <li class="has-dropdown" data-tooltip="tooltip"
                                    data-placement="left"title="@auth{{ Auth::user()->USUARIO_NOME }}@else Perfil @endauth">
                                    <a><i class="fa-solid fa-circle-user fa-lg" style="color: #272626;"></i></a>

                                    <x-userInfo />

                                </li>

                                <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                    <a href="mailto:contact@domain.com"><i class="fa-solid fa-envelope fa-lg"
                                            style="color: #272626;"></i></a>
                                </li>
                            </ul>
                            <!--====== End - List ======-->
                        </div>
                        <!--====== End - Menu ======-->
                    </div>
                    <!--====== End - Dropdown Main plugin ======-->
                </div>
                <!--====== End - Primary Nav ======-->
            </div>
        </nav>
        <!--====== End - Nav 1 ======-->


        <!--====== Nav 2 ======-->
        <nav class="secondary-nav-wrapper">
            <div class="container">

                <!--====== Secondary Nav ======-->
                <div class="secondary-nav">

                    <!--====== Dropdown Main plugin ======-->
                    <div class="menu-init" id="navigation1">

                        <button class="btn btn--icon toggle-mega-text toggle-button" type="button">M</button>

                        <!--====== Menu ======-->
                        <div class="ah-lg-mode">

                            <span class="ah-close">✕ Close</span>

                            <!--====== List ======-->
                            <ul class="ah-list">
                                <li class="has-dropdown">

                                    <span class="mega-text">MENU</span>

                                    <!--====== Mega Menu ======-->

                                    <span class="js-menu-toggle"></span>
                                    <div class="mega-menu">
                                        <div class="mega-menu-wrap">
                                            <div class="mega-menu-list">
                                                <ul>
                                                    @foreach ($dataFromController as $category)
                                                        <li class="js">

                                                            <a href="search?CATEGORIA_ID={{ $category->CATEGORIA_ID }}"><i
                                                                    class="fas fa-tv u-s-m-r-6"></i>

                                                                <span>{{ $category->CATEGORIA_NOME }}</span></a>

                                                            <span class="js-menu-toggle js-toggle-mark"></span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            <!--====== Electronics ======-->
                                            <div class="mega-menu-content js-active">

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">CAMISETAS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Adidas</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Puma</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">QuikSilver</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">BERMUDAS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Volcom</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">HD</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Hurley</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Oakley</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">MOLETOM</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Santa Cruz</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">GAP</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Red Bull</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">TÊNIS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Air Jordan</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike Dunk</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Mizuno</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                                <br>

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">ACESSÓRIOS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Shoulder Bag</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Mochila</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Boné</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Bucket</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-9 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="#">

                                                                <img class="u-img-fluid u-d-block"
                                                                    src="{{ asset('images/headerMenu/1.jpg') }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                            </div>
                                            <!--====== End - Electronics ======-->


                                            <!--====== Women ======-->
                                            <div class="mega-menu-content">

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-6 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="#">

                                                                <img class="u-img-fluid u-d-block"
                                                                    src="{{ asset('images/headerMenu/2.jpg') }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="#">

                                                                <img class="u-img-fluid u-d-block"
                                                                    src="{{ asset('images/headerMenu/3.jpg') }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                                <br>

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">CAMISETAS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Adidas</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Puma</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">QuikSilver</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">BERMUDAS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Volcom</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">HD</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Hurley</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Oakley</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">MOLETOM</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Santa Cruz</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">GAP</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Red Bull</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">TÊNIS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Air Jordan</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike Dunk</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Mizuno</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                            </div>
                                            <!--====== End - Women ======-->


                                            <!--====== Men ======-->
                                            <div class="mega-menu-content">

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-4 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="#">

                                                                <img class="u-img-fluid u-d-block"
                                                                    src="{{ asset('images/headerMenu/4.jpg') }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="#">

                                                                <img class="u-img-fluid u-d-block"
                                                                    src="{{ asset('images/headerMenu/5.jpg') }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mega-image">
                                                        <div class="mega-banner">

                                                            <a class="u-d-block" href="#">

                                                                <img class="u-img-fluid u-d-block"
                                                                    src="{{ asset('images/headerMenu/6.jpg') }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                                <br>

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">CAMISETAS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Adidas</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Puma</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">QuikSilver</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">BERMUDAS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Volcom</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">HD</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Hurley</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Oakley</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">MOLETOM</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Santa Cruz</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">GAP</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Red Bull</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">TÊNIS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Air Jordan</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike Dunk</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Mizuno</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->

                                            </div>
                                            <!--====== End - Men ======-->


                                            <!--====== No Sub Categories ======-->
                                            <div class="mega-menu-content">

                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">CAMISETAS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Adidas</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Puma</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">QuikSilver</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">BERMUDAS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Volcom</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">HD</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Hurley</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Oakley</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">MOLETOM</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Santa Cruz</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">GAP</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Red Bull</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">TÊNIS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Air Jordan</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike Dunk</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Mizuno</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                                <br>
                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">REGATA</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Adidas</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Puma</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">QuikSilver</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">CAMISA</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Volcom</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">HD</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Hurley</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Oakley</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">CHINELO</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Santa Cruz</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">GAP</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Red Bull</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">SNEAKERS</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Air Jordan</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike Dunk</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Mizuno</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->
                                                <br>
                                                <!--====== Mega Menu Row ======-->
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">CORTA VENTO</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Adidas</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Puma</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">QuikSilver</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">TOUCA</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Volcom</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">HD</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Hurley</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Oakley</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">BONÉ</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Santa Cruz</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">GAP</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Red Bull</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul>
                                                            <li class="mega-list-title">

                                                                <a href="#">SWEATER</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Air Jordan</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Nike Dunk</a>
                                                            </li>
                                                            <li>

                                                                <a href="#">Mizuno</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--====== End - Mega Menu Row ======-->

                                            </div>
                                            <!--====== End - No Sub Categories ======-->
                                        </div>
                                    </div>
                                    <!--====== End - Mega Menu ======-->
                                </li>
                            </ul>
                            <!--====== End - List ======-->
                        </div>
                        <!--====== End - Menu ======-->
                    </div>
                    <!--====== End - Dropdown Main plugin ======-->


                    <!--====== Dropdown Main plugin ======-->
                    <div class="menu-init" id="navigation2">

                        <button class="btn btn--icon toggle-button fas fa-cog engrenagem" type="button"
                            style="display: none"></button>

                        <!--====== Menu ======-->
                        <div class="ah-lg-mode">

                            <span class="ah-close">✕ Close</span>

                            <!--====== List ======-->
                            <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                                @foreach ($dataFromController as $category)
                                    @if ($category->CATEGORIA_ID === 1)
                                        <li>
                                            <form class="main-form" action="{{ route('search') }}" method="GET">
                                                <input type="text" name="CATEGORIA_ID"
                                                    value="{{ $category->CATEGORIA_ID }}" style="display: none">
                                                <button type="submit" class="custom-button2">HOMENS</button>
                                            </form>
                                        </li>
                                    @endif

                                    @if ($category->CATEGORIA_ID === 2)
                                        <li>
                                            <form class="main-form" action="{{ route('search') }}" method="GET">
                                                <input type="text" name="CATEGORIA_ID"
                                                    value="{{ $category->CATEGORIA_ID }}" style="display: none">
                                                <button type="submit" class="custom-button2">MULHERES</button>
                                            </form>

                                        </li>
                                    @endif

                                    @if ($category->CATEGORIA_ID === 4)
                                        <li>
                                            <form class="main-form" action="{{ route('search') }}" method="GET">
                                                <input type="text" name="CATEGORIA_ID"
                                                    value="{{ $category->CATEGORIA_ID }}" style="display: none">
                                                <button type="submit" class="custom-button2">ESPORTES</button>
                                            </form>

                                        </li>
                                    @endif
                                @endforeach

                                <li>
                                    <form class="main-form" action="#" method="GET">

                                        <button type="submit" style="padding:10px 5px" class="custom-button2">MAIS
                                            COMPRADOS</button>
                                    </form>
                                </li>
                                <li>
                                    <form class="main-form" action="{{ route('search') }}" method="GET">
                                        <input type="text" name="orberByNew" value="newest"
                                            style="display: none">
                                        <button type="submit" class="custom-button2">NOVOS</button>
                                    </form>

                                </li>
                            </ul>
                            <!--====== End - List ======-->
                        </div>
                        <!--====== End - Menu ======-->
                    </div>
                    <!--====== End - Dropdown Main plugin ======-->


                    <!--====== Dropdown Main plugin ======-->
                    <div class="menu-init" id="navigation3">

                        <button class="btn btn--icon toggle-button fas fa-shopping-bag toggle-button-shop"
                            type="button" style="display: none"></button>

                        <span class="total-item-round">2</span>

                        <!--====== Menu ======-->
                        <div class="ah-lg-mode">

                            <span class="ah-close">✕ Close</span>

                            <!--====== List ======-->
                            <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                <li>

                                    <a href="{{ route('products.index') }}"><i class="fas fa-home"></i></a>
                                </li>
                                </li>
                                @auth
                                    <li class="has-dropdown">

                                        <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>

                                            <span
                                                class="total-item-round">{{ $user->where('ITEM_QTD', '>', 0)->count() }}</span></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <div class="mini-cart">

                                            <!--====== Mini Product Container ======-->
                                            <div class="mini-product-container gl-scroll u-s-m-b-15">
                                                @php
                                                    $total = 0;
                                                @endphp
                                                @foreach ($user as $item)
                                                    @if (!$item->ITEM_QTD == 0)
                                                        <!--====== Card for mini cart ======-->
                                                        <div class="card-mini-product">
                                                            <div class="mini-product">
                                                                <div class="mini-product__image-wrapper">

                                                                    <a class="mini-product__link"
                                                                        href="{{ route('productDetails', $item->produto->PRODUTO_ID) }}">

                                                                        <img class="u-img-fluid"
                                                                            src="{{ $item->produto->produtoImagens->first()->IMAGEM_URL }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="mini-product__info-wrapper">

                                                                    <span class="mini-product__category">

                                                                        <a
                                                                            href="search?CATEGORIA_ID={{ $item->produto->categoria->CATEGORIA_ID }}">{{ $item->produto->categoria->CATEGORIA_NOME }}</a></span>

                                                                    <span class="mini-product__name">

                                                                        <a
                                                                            href="{{ route('productDetails', $item->produto->PRODUTO_ID) }}">{{ $item->produto->PRODUTO_NOME }}</a></span>

                                                                    <span
                                                                        class="mini-product__quantity">x{{ $item->ITEM_QTD }}</span>

                                                                    <span
                                                                        class="mini-product__price">R${{ $item->ITEM_QTD * ($item->produto->PRODUTO_PRECO - $item->produto->PRODUTO_DESCONTO) }}</span>
                                                                    @php
                                                                        $sum = $item->ITEM_QTD * ($item->produto->PRODUTO_PRECO - $item->produto->PRODUTO_DESCONTO);
                                                                        $total += $sum;
                                                                    @endphp
                                                                </div>
                                                            </div>
                                                            <?php
                                                            $user_id = $item->usuario->USUARIO_ID;
                                                            $produto_id = $item->produto->PRODUTO_ID; ?>

                                                            <a href="{{ route('update.cart', ['user_id' => $user_id, 'produto_id' => $produto_id]) }}"
                                                                class="mini-product__delete-link far fa-trash-alt"></a>

                                                        </div>
                                                        <!--====== End - Card for mini cart ======-->
                                                    @endif
                                                @endforeach
                                            </div>
                                            <!--====== End - Mini Product Container ======-->


                                            <!--====== Mini Product Statistics ======-->
                                            <div class="mini-product-stat">
                                                <div class="mini-total">

                                                    <span class="subtotal-text">SUBTOTAL</span>

                                                    <span class="subtotal-value">R${{ $total }}</span>
                                                </div>
                                                <div class="mini-action">

                                                    <a class="mini-link btn--e-brand-b-2" href="checkout.html">FINALIZAR
                                                        COMPRA</a>

                                                    <a class="mini-link btn--e-transparent-secondary-b-2"
                                                        href="{{route('cart')}}">VER CARRINHO</a>
                                                </div>
                                            </div>
                                            <!--====== End - Mini Product Statistics ======-->
                                        </div>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                @else
                                    <li class="has-dropdown">

                                        <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i> </a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <div class="mini-cart">



                                            <!--====== Mini Product Statistics ======-->
                                            <div class="mini-product-stat">
                                                <div class="mini-total">

                                                    <span class="subtotal-text">FAÇA LOGIN PARA ACESSAR O CARRINHO</span>

                                                </div>
                                                <div class="mini-action">

                                                    <a class="mini-link btn--e-brand-b-2"
                                                        href="checkout.html">REGISTRAR-SE</a>

                                                    <a class="mini-link btn--e-transparent-secondary-b-2"
                                                        href="cart.html">LOGIN</a>
                                                </div>
                                            </div>
                                            <!--====== End - Mini Product Statistics ======-->
                                        </div>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                @endauth
                            </ul>
                            <!--====== End - List ======-->
                        </div>
                        <!--====== End - Menu ======-->
                    </div>
                    <!--====== End - Dropdown Main plugin ======-->
                </div>
                <!--====== End - Secondary Nav ======-->
            </div>
        </nav>
        <!--====== End - Nav 2 ======-->
    </header>
    <!--====== End - Main Header ======-->
</div>
