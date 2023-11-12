<script>
    $(document).on('click', '.ProductsDetailModal', function(e) {
        let nome = $(this).data('nome');
        let desc = $(this).data('desc');
        let preco = $(this).data('preco');
        let produtoId = $(this).data('idprod');
        let userId = $(this).data('usuario');
        let desconto = $(this).data('desconto');
        let fotos = $(this).data('fotos');
        let categoria = $(this).data('categoria');
        let estoque = $(this).data('estoque');

        $('#js-product-detail-modal').empty();
        $('#js-product-detail-modal-thumbnail').empty();

        $('#USUARIO_ID').val(userId);
        $('#PRODUTO_ID').val(produtoId);
        let valorComDesconto = preco-desconto;
        let porcentagem = ((valorComDesconto-preco)/preco)*100
        $('.categoria_produto').text(categoria);
        $('.nome_produto').text(nome);
        $('.descricao_produto').text(desc);
        $('.preco_produto').text("R$" + valorComDesconto.toFixed(2));
        $('.desconto_produto').text("(" + Math.round(porcentagem) + "% OFF)");
        $('.valor_desconto').text("R$" + preco);
        $('.reviews').text(Math.floor(Math.random()* 500 + 1)+" Avaliações");
        
        if (estoque <= 0) {
            $('.estoque_produto').css("display", "none");
            $('.estoque_fim').text("Produto Esgotado");
        } else if (estoque <= 20) {
            $('.estoque_produto').text("Apenas " + estoque + " em estoque");
            $('.estoque_fim').css("display", "none");
        } else{
            $('.estoque_produto').text(estoque + " em estoque");
            $('.estoque_fim').css("display", "none");
        }

        //imagens principais
        let modalBody = $('#js-product-detail-modal');
        $.each(fotos, function(index, foto) {
            let imgElement = $('<div><img class="u-img-fluid" src="' + foto.IMAGEM_URL + '" alt="' + nome + '"></div>');
            modalBody.append(imgElement);
        });
        //imagens do carrossel
        let modalCarousel = $('#js-product-detail-modal-thumbnail');
        if (fotos.length == 1) {
            for (let i = 0; i < 3; i++) {
                let imgElement = $('<div><img class="u-img-fluid" src="" alt=""></div>');                
            }        
            modalCarousel.append(imgElement);
        }
        $.each(fotos, function(index, foto) {
            
                let imgElement = $('<div><img class="u-img-fluid" src=" ' + foto.IMAGEM_URL + ' " alt="' + nome + '"></div>');
        
            modalCarousel.append(imgElement);
        });
    });
</script>
