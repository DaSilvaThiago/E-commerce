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

                                                    <a href="">Escolher endereço padrão</a></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius u-s-m-b-30">
                                    <div class="dash__table-2-wrap gl-scroll">
                                        <table class="dash__table-2">
                                            <thead>
                                                <tr>
                                                    <th>Editar</th>
                                                    <th>Endereço</th>
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
                                                    <td>

                                                        <a class="address-book-edit btn--e-transparent-platinum-b-2" href="dash-address-edit.html">Editar</a></td>
                                                    <td>John Doe</td>
                                                    <td>4247 Ashford Drive Virginia VA-20006 USA</td>
                                                    <td>Virginia VA-20006 USA</td>
                                                    <td>(+0) 900901904</td>
                                                    <td>
                                                        <div class="gl-text">Default Shipping Address</div>
                                                        <div class="gl-text">Default Billing Address</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>

                                                        <a class="address-book-edit btn--e-transparent-platinum-b-2" href="dash-address-edit.html">Edit</a></td>
                                                    <td>Doe John</td>
                                                    <td>1484 Abner Road</td>
                                                    <td>Eau Claire WI - Wisconsin</td>
                                                    <td>(+0) 7154419563</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div>

                                    <a class="dash__custom-link btn--e-brand-b-2" href="{{route('create.address', $user->USUARIO_ID)}}"><i class="fas fa-plus u-s-m-r-8"></i>

                                        <span>Add New Address</span></a></div>
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
