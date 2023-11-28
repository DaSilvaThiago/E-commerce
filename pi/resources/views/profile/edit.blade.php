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
                                        <h1 class="dash__h1 u-s-m-b-14">Editar Perfil</h1>

                                        <span class="dash__text u-s-m-b-30">Atualize seus dados cadastrais</span>
                                        <div class="dash__link dash__link--secondary u-s-m-b-30">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            @if (session('set'))
                                                <div class="alert alert-success">
                                                    {{ session('set') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form class="dash-edit-p" method="POST" action="{{route('profile.update', $user->USUARIO_ID)}}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-fname">NOME *</label>

                                                            <input class="input-text input-text--primary-style"
                                                                type="text" id="reg-fname" value="{{$user->USUARIO_NOME}}" name="USUARIO_NOME" placeholder="Nome">
                                                        </div>
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-fname">CPF *</label>

                                                            <input class="input-text input-text--primary-style" value="{{$user->USUARIO_CPF}}"
                                                                type="text" id="reg-fname" name="USUARIO_CPF" placeholder="Nome">
                                                        </div>
                                                    </div>
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">
                                                          
                                                            <label class="gl-label" for="reg-fname">EMAIL *</label>

                                                            <input class="input-text input-text--primary-style" value="{{$user->USUARIO_EMAIL}}"
                                                                type="text" id="reg-fname" name="USUARIO_EMAIL" placeholder="Email">
                                                        </div>
                                                        <div class="u-s-m-b-30">
                                                          
                                                            <label class="gl-label" for="reg-fname">SENHA *</label>

                                                            <input class="input-text input-text--primary-style"
                                                                type="password" id="reg-fname" name="USUARIO_SENHA" placeholder="Senha">
                                                        </div>
                                                        <div class="u-s-m-b-30">
                                                          
                                                            <label class="gl-label" for="reg-fname">NOVA SENHA *</label>

                                                            <input class="input-text input-text--primary-style"
                                                                type="password" id="reg-fname" name="USUARIO_SENHANOVA" placeholder="Nova senha">
                                                        </div>
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
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->
    </div>

</x-app-layout>
