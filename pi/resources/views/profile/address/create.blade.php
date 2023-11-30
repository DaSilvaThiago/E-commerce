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
            
                <x-sectionOneToProfile/>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="dash">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-12">

                                    <!--====== Dashboard Features ======-->
                                   
                                    <x-dashBoardFeatures :user="$user" :orders="$orders"/>
                                    <!--====== End - Dashboard Features ======-->
                                </div>
                                <div class="col-lg-9 col-md-12">
                                    <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                        <div class="dash__pad-2">
                                            <h1 class="dash__h1 u-s-m-b-14">Adicionar novo Endereço</h1>

                                            <span class="dash__text u-s-m-b-30">Precisamos de um endereço valido para entrega.</span>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <form class="dash-address-manipulation" method="post" action="{{route('store.address', $user->USUARIO_ID)}}">
                                                @csrf
                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="ENDERECO_NOME">ENDEREÇO NOME *</label>

                                                        <input class="input-text input-text--primary-style" value="{{old('ENDERECO_NOME')}}" name="ENDERECO_NOME" type="text" id="address-fname" placeholder="Endereço" required></div>
                                                        <div class="u-s-m-b-30">

                                                            <!--====== Select Box ======-->
    
                                                            <label class="gl-label" for="address-country">CEP *</label>
                                                            <input class="input-text input-text--primary-style" value="{{old('ENDERECO_CEP')}}" name="ENDERECO_CEP" required type="text" id="cep" placeholder="Cep">
                                                            <!--====== End - Select Box ======-->
                                                        </div>
                                                    </div>
                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="ENDERECO_NUMERO">NUMERO *</label>

                                                        <input class="input-text input-text--primary-style" placeholder="01" type="text" name="ENDERECO_NUMERO" value="{{old('ENDERECO_NUMERO')}}" id="address-phone" required></div>
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="ENDERECO_ESTADO">ESTADO *</label>

                                                        <input class="input-text input-text--primary-style" value="{{old('ENDERECO_ESTADO')}}" name="ENDERECO_ESTADO" required type="text" id="estado" placeholder="Estado"></div>
                                                </div>
                                                <div class="gl-inline">
                                                    
                                                        <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="ENDERECO_LOGRADOURO">LOGRADOURO *</label>

                                                        <input class="input-text input-text--primary-style" name="ENDERECO_LOGRADOURO" value="{{old('ENDERECO_LOGRADOURO')}}" type="text" id="logradouro" placeholder="Logradouro" required></div>
                                                
                                                    <div class="u-s-m-b-30">

                                                        <!--====== Select Box ======-->

                                                        <label class="gl-label" for="address-state">CIDADE *</label>
                                                        <input class="input-text input-text--primary-style" value="{{old('ENDERECO_CIDADE')}}" name="ENDERECO_CIDADE" required type="text" id="cidade" placeholder="Cidade">
                                                        <!--====== End - Select Box ======-->
                                                    </div>
                                                </div>
                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="address-city">COMPLEMENTO </label>

                                                        <input class="input-text input-text--primary-style" name="ENDERECO_COMPLEMENTO" value="{{old('ENDERECO_COMPLEMENTO')}}" type="text" id="address-city"></div>
                                                        
                                                </div>

                                                <button class="btn btn--e-brand-b-2" type="submit">SALVAR</button>
                                            </form>
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