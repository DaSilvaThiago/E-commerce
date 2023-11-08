<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

                <!--====== Section 1 ======-->
                <div class="u-s-p-y-60">

                    <!--====== Section Content ======-->
                    <div class="section__content">
                        <div class="container">
                            <div class="breadcrumb">
                                <div class="breadcrumb__wrap">
                                    <ul class="breadcrumb__list">
                                        <li class="has-separator">
    
                                            <a href="{{route('produtos.index')}}">Home</a></li>
                                        <li class="is-marked">
    
                                            <a href="#">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section 1 ======-->
    
    
                <!--====== Section 2 ======-->
                <div class="u-s-p-b-60">
    
                    <!--====== Section Intro ======-->
                    <div class="section__intro u-s-m-b-60">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section__text-wrap">
                                        <h1 class="section__heading u-c-secondary">JÁ TEM CADASTRO?</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Intro ======-->
    
    
                    <!--====== Section Content ======-->
                    <div class="section__content">
                        <div class="container">
                            <div class="row row--center">
                                <div class="col-lg-6 col-md-8 u-s-m-b-30">
                                    <div class="l-f-o">
                                        <div class="l-f-o__pad-box">
                                            <h1 class="gl-h1">CLIENTE NOVO</h1>
    
                                            <span class="gl-text u-s-m-b-30">Por criar uma conta em nossa loja você consegue processar seus pedidos mais rápido, guardar endereços de entrega, ver e acompanhar pedidos da sua conta e mais.</span>
                                            <div class="u-s-m-b-15">
    
                                                <a class="l-f-o__create-link btn--e-transparent-brand-b-2" href="{{route('register')}}">CRIAR UMA CONTA</a></div>
                                            <h1 class="gl-h1">LOGIN</h1>
    
                                            <span class="gl-text u-s-m-b-30">Se ja tem uma conta conosco, por favor faça login.</span>
                                            <x-auth-session-status class="mb-4" :status="session('status')" />
                                            <form method="POST" action="{{ route('login') }}" class="l-f-o__form">
                                                @csrf
                                                <div class="u-s-m-b-30">
    
                                                    <label class="gl-label" for="login-email">E-MAIL *</label>
    
                                                    <input required class="input-text input-text--primary-style" type="text" id="login-email" name="USUARIO_EMAIL" placeholder="Digite o E-mail"></div>
                                                <div class="u-s-m-b-30">
    
                                                    <label class="gl-label" for="login-password">SENHA *</label>
    
                                                    <input required class="input-text input-text--primary-style" type="password" id="login-password" name="USUARIO_SENHA" placeholder="Digite a Senha"></div>
                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">
    
                                                        <button class="btn btn--e-transparent-brand-b-2" type="submit">LOGIN</button></div>
                                                  
                                                </div>
                                                <div class="block mt-4">
                                                    <label for="remember_me" class="inline-flex items-center">
                                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                                        <span class="ml-2 text-sm text-gray-600">{{ __('Relembrar-se') }}</span>
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>

                <!--====== End - Section 2 ======-->
                
</x-guest-layout>
