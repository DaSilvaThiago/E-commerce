<x-guest-layout>
    <form class="l-f-o__form" method="POST" action="{{route('usuarios.store')}}">
        @csrf
        <div class="u-s-m-b-30">
            <label class="gl-label" for="reg-fname">NOME *</label>
            <input class="input-text input-text--primary-style" name="USUARIO_NOME" type="text" id="reg-fname" placeholder="Nome Completo">
        </div>
        
        <div class="u-s-m-b-30">
            <label class="gl-label" for="reg-email">E-MAIL *</label>
            <input class="input-text input-text--primary-style" type="text" id="reg-email" placeholder="Digite o E-Mail" name="USUARIO_EMAIL">
        </div>

        <div class="u-s-m-b-30">
            <label class="gl-label" for="reg-password">SENHA *</label>
            <input class="input-text input-text--primary-style" type="text" id="reg-password" placeholder="Digite a Senha" name="USUARIO_SENHA">
        </div>
        
        <div class="u-s-m-b-30">
            <label class="gl-label" for="reg-password">CPF *</label>
            <input class="input-text input-text--primary-style" type="text" id="reg-password" placeholder="Digite o CPF" name="USUARIO_CPF">
        </div>
            
        <div class="u-s-m-b-15">    
            <button class="btn btn--e-transparent-brand-b-2" type="submit">CRIAR</button>
        </div>

        <a class="gl-link" href="{{route('produtos.index')}}">Voltar para a loja</a>
    </form>
</x-guest-layout>
