function adicionarAoCarrinho(produtoId, quantidade = 1) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "adicionar.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                alert(xhr.responseText);
                // Atualizar a interface do carrinho, se necessário
            } else {
                alert("Erro ao adicionar produto ao carrinho.");
            }
        }
    };

    xhr.send("produto_id=" + produtoId + "&quantidade=" + quantidade);
}

function removerDoCarrinho(produtoId) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "remover.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                alert(xhr.responseText);
                // Atualizar a interface do carrinho, se necessário
            } else {
                alert("Erro ao remover produto do carrinho.");
            }
        }
    };

    xhr.send("produto_id=" + produtoId);
}
