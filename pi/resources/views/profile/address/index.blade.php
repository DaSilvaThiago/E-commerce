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
                                <x-dashBoardFeatures :user="$user" />
                                <!--====== End - Dashboard Features ======-->
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <div class="dash__address-header">
                                            <h1 class="dash__h1">Lista de Endereços</h1>
                                            <div>

                                                <span class="dash__link dash__link--black u-s-m-r-8">

                                                    {{$addressByUser->count()}} Endereços Cadastrados</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius u-s-m-b-30">
                                    <div class="dash__table-2-wrap gl-scroll">
                                        <table class="dash__table-2">
                                            <thead>
                                                <tr>
                                                    <th>Editar</th>
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
                                                    @foreach ($addressByUser as $address)
                                                    <tr>
                                                        <td><a class="address-book-edit btn--e-transparent-platinum-b-2" href="{{route('edit.address', $address->ENDERECO_ID)}}">Editar</a></td>
                                                        <td>{{$address->ENDERECO_NOME}}</td>
                                                        <td>{{$address->ENDERECO_LOGRADOURO}}</td>
                                                        <td>{{$address->ENDERECO_NUMERO}}</td>
                                                        <td>{{$address->ENDERECO_COMPLEMENTO ? $address->ENDERECO_COMPLEMENTO : " "}}</td>
                                                        <td>{{$address->ENDERECO_CEP}}</td>
                                                        <td>{{$address->ENDERECO_CIDADE}}</td>
                                                        <td>{{$address->ENDERECO_ESTADO}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div>

                                    <a class="dash__custom-link btn--e-brand-b-2" href="{{route('create.address', $user->USUARIO_ID)}}"><i class="fas fa-plus u-s-m-r-8"></i>

                                        <span>Novo Endereço</span></a></div>

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
