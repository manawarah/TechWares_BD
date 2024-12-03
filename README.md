# README - Projeto E-commerce de Produtos de Informática

Este é um projeto de e-commerce para a venda de produtos de informática, como hardware, periféricos, computadores, monitores, cadeiras, mesas gamer, notebooks e videogames. 
O objetivo principal é permitir que os usuários realizem compras de forma simples, com navegação intuitiva e uma interface de usuário moderna.

## Tecnologias Utilizadas

- **HTML**: Estrutura básica das páginas do site, contendo as seções de navegação, produtos e footer.
- **CSS**: Estilização das páginas, com layouts responsivos e componentes visualmente atraentes, como filtros de produtos e promoções.
- **PHP**: Linguagem de programação para interação dinâmica com o banco de dados, incluindo login de usuário, visualização de produtos e gerenciamento do carrinho de compras.
- **JavaScript**: Responsável por interações dinâmicas do cliente, como a atualização de produtos no carrinho e o filtro de pesquisa.
- **MySQL**: Banco de dados para armazenar informações de produtos, usuários, carrinho de compras e histórico de compras.

## Funcionalidades do Site

1. **Cadastro e Login de Usuário**: O usuário pode criar uma conta ou fazer login com seu e-mail para acessar funcionalidades exclusivas, como o carrinho de compras e favoritos.
   
2. **Visualização de Produtos**: O site exibe uma lista de produtos com imagens, descrições e preços, permitindo que os usuários visualizem e escolham produtos facilmente.

3. **Carrinho de Compras**: Os usuários podem adicionar produtos ao carrinho, visualizar detalhes e quantidades, além de remover itens caso desejem. A quantidade de itens no carrinho pode ser atualizada conforme a necessidade.

4. **Promoções e Novidades**: O site oferece seções com promoções, como a "Queima de Estoque", para atrair os clientes com descontos especiais.

5. **Busca e Filtros**: A barra de pesquisa e os filtros de categorias permitem que os usuários encontrem rapidamente o que procuram, como hardware, periféricos, computadores, etc.

6. **Área de Atendimento e Favoritos**: Usuários logados podem acessar a área de atendimento ao cliente, além de salvar seus produtos favoritos para compras futuras.

7. **Rodapé com Informações Adicionais**: Contém links para redes sociais, formas de pagamento, e outras informações úteis sobre o e-commerce.

## Estrutura de Diretórios

```
/database
    |-- conexao.php (Conexão com o banco de dados)
    
/login
    |-- login.php (Página de login do usuário)
    |-- cadastro.php (Página de cadastro de novo usuário)
    
/carrinho
    |-- carrinho.php (Página de visualização do carrinho)
    
/cliente
    |-- cliente.php (Página de atendimento ao cliente)
    
/preview
    |-- preview.php (Página de detalhes de cada produto)
    
/assets
    |-- Imagens e recursos estáticos
    
/styles
    |-- styles.css (Estilos gerais)
    |-- defaults.css (Estilos reutilizáveis)
    
/fontawesome
    |-- Font Awesome (Ícones)
```

## Como Rodar o Projeto

1. Certifique-se de ter um servidor local (como XAMPP ou WAMP) com suporte a PHP e MySQL.
2. Importe o banco de dados utilizando o arquivo SQL fornecido.
3. Abra o projeto no navegador e acesse as páginas para testar as funcionalidades.

## Notas

- O sistema de login está baseado em sessões para manter o usuário autenticado durante sua navegação.
- Os produtos são carregados dinamicamente a partir do banco de dados MySQL.
- O código utiliza validação simples para adicionar/remover produtos ao carrinho.

---
