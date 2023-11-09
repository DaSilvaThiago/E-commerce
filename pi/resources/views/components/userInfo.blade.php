<li class="has-dropdown" data-tooltip="tooltip" data-placement="left"title="@auth{{ Auth::user()->USUARIO_NOME }}@else Perfil @endauth">
    <a><i class="far fa-user-circle"></i></a>

    <!--====== Dropdown ======-->

    <span class="js-menu-toggle"></span>
    @if (Route::has('login'))
        <ul style="width:120px">
            @auth
                <li>

                    <a href="#"><i class="fas fa-user-circle u-s-m-r-6"></i>

                        <span>Perfil</span></a></li>
                <li>
                    <a href="#"><i class="fas fa-lock-open u-s-m-r-6"></i>
                    <span>Sair</span></a></li>
            @else
            <li>
                <a href="#"><i class="fas fa-lock u-s-m-r-6"></i>

                    <span>Entrar</span></a></li>
                @if (Route::has('register'))
                <li>

                    <a href="#"><i class="fas fa-user-plus u-s-m-r-6"></i>

                        <span>Registrar-se</span></a></li>
                @endif
            @endauth
        </ul>
    @endif

    <!--====== End - Dropdown ======-->

</li>
