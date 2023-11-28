<div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
    <div class="dash__pad-1">

        <span class="dash__text u-s-m-b-16">Olá, {{ $user->USUARIO_NOME }}</span>
        <ul class="dash__f-list">
            <li>

                <a href="{{route('dashboard', $user->USUARIO_ID)}}">Gerenciar Perfil</a>
            </li>
            <li>

                <a href="{{route('profile.edit', $user->USUARIO_ID)}}">Meu Perfil</a>
            </li>
            <li>

                <a href="{{route('profile.address', $user->USUARIO_ID)}}">Endereços</a>
            </li>
            <li>

                <a href="dash-my-order.html">Meus Pedidos</a>
            </li>
        </ul>
    </div>
</div>
<div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
    <div class="dash__pad-1">
        <ul class="dash__w-list">
            <li>
                <div class="dash__w-wrap">

                    <span class="dash__w-icon dash__w-icon-style-1"><i
                            class="fas fa-cart-arrow-down"></i></span>

                    <span class="dash__w-text">{{$orders->count()}}</span>

                    <span class="dash__w-name">Pedidos Feitos</span>
                </div>
            </li>
            <li>
                <div class="dash__w-wrap">

                    <span class="dash__w-icon dash__w-icon-style-2"><i
                            class="fas fa-times"></i></span>

                    <span class="dash__w-text">0</span>

                    <span class="dash__w-name">Cancel Orders</span>
                </div>
            </li>
        </ul>
    </div>
</div>