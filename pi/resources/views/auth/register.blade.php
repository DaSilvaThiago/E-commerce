<x-guest-layout>
    @auth
    <!--====== Header Wrapper ======-->
    <x-headerForAll :dataFromController="$categories" :user="$productsByUser" />
    <!--====== End - Header Wrapper ======-->    
@else
    <x-headerForAll :dataFromController="$categories"  />
@endauth
     
<!--====== App Content ======-->
<div class="app-content">
                <!--====== Section 1 ======-->
                <div class="u-s-p-y-60">

                    <!--====== Section Content ======-->
                    <div class="section__content">
                        <div class="container">
                            <div class="breadcrumb">
                                <div class="breadcrumb__wrap">
                                    <ul class="breadcrumb__list">
                                        <li class="has-separator">
    
                                            <a href="{{route('products.index')}}">Home</a></li>
                                        <li class="is-marked">
                                            
                                            <a href="signup.html">Registrar</a></li>
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
                                        <h1 class="section__heading u-c-secondary">CRIAR UMA CONTA</h1>
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
                                            <h1 class="gl-h1">INFORMAÇÕES PESSOAIS</h1>
                                            <form class="l-f-o__form" method="POST" action="{{route('register')}}">
                                                @csrf
                                                <div class="u-s-m-b-30">
                                                    <label class="gl-label" for="reg-fname">NOME *</label>
                                                    <input required class="input-text input-text--primary-style" name="USUARIO_NOME" type="text" id="reg-fname" placeholder="Nome Completo">
                                                </div>
                                                
                                                <div class="u-s-m-b-30">
                                                    <label class="gl-label" for="reg-email">E-MAIL *</label>
                                                    <input required class="input-text input-text--primary-style" type="text" id="reg-email" placeholder="Digite o E-Mail" name="USUARIO_EMAIL">
                                                </div>
                                        
                                                <div class="u-s-m-b-30">
                                                    <label class="gl-label" for="reg-password">SENHA *</label>
                                                    <input required class="input-text input-text--primary-style" type="password" id="reg-password" placeholder="Digite a Senha" name="USUARIO_SENHA">
                                                </div>
                                                
                                                <div class="u-s-m-b-30">
                                                    <label class="gl-label" for="reg-password">CPF *</label>
                                                    <input required class="input-text input-text--primary-style" type="text" id="reg-password" placeholder="Digite o CPF" name="USUARIO_CPF">
                                                </div>
                                                    
                                                <div class="u-s-m-b-15">    
                                                    <button class="btn btn--e-transparent-brand-b-2" type="submit">CRIAR</button>
                                                </div>
                                        
                                                <a class="gl-link" href="{{route('products.index')}}">Voltar para a loja</a>
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
            </div>
            <!--====== End - App Content ======-->
</x-guest-layout>
