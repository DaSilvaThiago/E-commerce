<li class="has-dropdown" data-tooltip="tooltip" data-placement="left"
    title="@auth
{{ Auth::user()->USUARIO_NOME }} 
                                            @else
                                                Perfil @endauth">

    <a>
        <span class="material-icons">
            account_circle
        </span></a>

    <!--====== Dropdown ======-->

    <span class="js-menu-toggle"></span>
    @if (Route::has('login'))
        <ul style="width:120px">
            @auth
                <li>
                    <a href="dashboard.html"><span class="material-icons icon_account">
                            person
                        </span>

                        <span>Conta</span></a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                            {{ __('Sair') }}
                        </x-dropdown-link>
                    </form>
                </li>
            @else
                <li>

                    <a href="{{ route('login') }}"><span class="material-icons icon_account">
                            lock
                        </span>

                        <span>Entrar</span></a>
                </li>

                @if (Route::has('register'))
                    <li>

                        <a href="{{ route('register') }}"><span class="material-icons icon_account">
                                person_add
                            </span>

                            <span>Registrar</span></a>
                    </li>
                @endif
            @endauth
        </ul>
    @endif
    <!--====== End - Dropdown ======-->
</li>
