@foreach ($produtos as $produto)
    <h2>{{ $produto->PRODUTO_NOME }}</h2>
    <p>{{ $produto->PRODUTO_DESC }}</p>
    <p>Price: ${{ $produto->PRODUTO_PRECO }}</p>
    <p>Discount: {{ $produto->PRODUTO_DESCONTO }}</p>
    @dd($produto->categoria->CATEGORIA_NOME)
    <h3>Primary Image:</h3>
    @php
        $primaryImage = $produto->produtoImagens->first();
    @endphp

    @if ($primaryImage)
        <img src="{{$primaryImage->IMAGEM_URL}}" alt="">
    @else
        <p>No image available for this product.</p>
    @endif
@endforeach








{{-- @foreach ($produtos as $produto)
    <h2>{{ $produto->PRODUTO_NOME }}</h2>
    <p>{{ $produto->PRODUTO_DESC }}</p>
    <p>Price: ${{ $produto->PRODUTO_PRECO }}</p>
    <p>Discount: {{ $produto->PRODUTO_DESCONTO }}</p>

    <h3>Images:</h3>
    <ul>
        @foreach ($produto->produtoImagens as $image)
            <li>
                <img src="{{$image->IMAGEM_URL}}" alt="">
            </li>
        @endforeach
    </ul>
@endforeach --}}


