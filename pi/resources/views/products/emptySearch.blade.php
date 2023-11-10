<x-guest-layout>
            <!--====== Main Header ======-->
            <x-headerForAll :dataFromController="$categories"  />
            <!--====== End - Main Header ======-->


        <!--====== App Content ======-->
        <div class="app-content">
         


    <!--====== Section 1 ======-->
    <div class="u-s-p-y-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 u-s-m-b-30">
                        <div class="empty">
                            <div class="empty__wrap">

                                <span class="empty__big-text">DESCULPE</span>

                                <span class="empty__text-1">Nenhum produto foi encontrado. Deixamos algumas sugestões para você abaixo.</span>

                                <span class="empty__text-2">Sugestão de pesquisa:

                                    <a href="shop-side-version-2.html">Roupas de Homem</a>

                                    <a href="shop-side-version-2.html">Roupas de Mulher</a>

                                    <a href="shop-side-version-2.html">Roupas de Criança</a></span>
                                <form class="empty__search-form" action="{{route('search')}}" method="GET">

                                    <label for="search-label"></label>

                                    <input class="input-text input-text--primary-style" type="text" id="search-label" placeholder="Pesquisar palavra chave" name="PRODUTO_NOME">

                                    <button class="btn btn--icon fas fa-search" type="submit"></button></form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 1 ======-->
       
</div>
<!--====== End - App Content ======-->
</x-guest-layout>