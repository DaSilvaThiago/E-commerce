
    <!--====== Dropdown ======-->

    <span class="js-menu-toggle"></span>
    @if (Route::has('login'))
        <ul style="width:120px">
            @auth
                <li>
                    @php
                        $userId = Auth::user()->USUARIO_ID;
                    @endphp
                    <a href="{{route('dashboard', $userId)}}"><i class="fas fa-user-circle u-s-m-r-6"></i>

                        <span>Perfil</span></a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btnToLogOut" type="submit"><i class="fa-solid fa-arrow-right-from-bracket fa-xs" style="color: #000000;"></i>
                            <span id="out-session-btn">Sair</span></button>
                        
                    </form>
                </li>
            @else
            <li>
                <a href="{{route('login')}}"><i class="fas fa-lock u-s-m-r-6"></i>

                    <span>Entrar</span></a></li>
                @if (Route::has('register'))
                <li>

                    <a href="{{route('register')}}"><i class="fas fa-user-plus u-s-m-r-6"></i>

                        <span>Registrar-se</span></a></li>
                @endif
            @endauth
        </ul>
    @endif

    <!--====== End - Dropdown ======-->
