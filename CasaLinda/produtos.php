<?php 
  include("connectDB.php");  
  //include("insercao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <script
      src="https://kit.fontawesome.com/d6fc79058a.js"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="script.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>produtos</title>
  </head>
  <body>
    <div class="tela">
      <div class="cabeçalho">
        <h1 class="texto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produtos</h1>
        <img src="logo.jpeg" alt="logo" class="imagem" />
      </div>
      <div class="painel">
        <h1>Lista De Produtos</h1>
        
        <form action="" method="POST">
          <input type="button" value="Cadastro Produtos" onclick="adcproduto('tabProdutos')" id="botaoCadastro" />
          <input type="submit" value="Busca" id="botaoRemove" />
          <input type="text" id="botaoBusca" name="botaoBusca" />

          <table id="tabProdutos">
            <tr>
              <th>codigo</th>
              <th>produto</th>
              <th>descrição</th>
              <th>categoria</th>
              <th>fornecedor</th>
              <th>preço custo</th>
              <th>preço venda</th>
            </tr>

            <?php
              $sql_code = "SELECT * FROM PRODUTOS";

              if(isset($_POST['botaoBusca'])){
                $pesquisa = $mysqli->real_escape_string($_POST['botaoBusca']);
                $sql_code .= " WHERE codigo LIKE '%$pesquisa%' OR nome LIKE '%$pesquisa%' 
                OR descricao LIKE '%$pesquisa%' OR categoria LIKE '%$pesquisa%' 
                OR fornecedor LIKE '%$pesquisa%' OR preco_custo LIKE '%$pesquisa%' 
                OR preco_venda LIKE '%$pesquisa%'";
              }
              $sql_query = $mysqli->query($sql_code) or die("Erro de busca" . $mysqli->error);
              $qtd = $sql_query->num_rows;
              if($qtd == 0){
                echo "<tr><td colspan = '7'>Nenhum produto encontrado</td></tr>";
              }
            
              while($dados = $sql_query->fetch_assoc()){
                echo " 
                <tr>
                <td>${dados['codigo']}</td>
                <td>${dados['nome']}</td>
                <td>${dados['descricao']}</td>
                <td>${dados['categoria']}</td>
                <td>${dados['fornecedor']}</td>
                <td>${dados['preco_custo']} </td>
                <td>${dados['preco_venda']} </td>
              </tr>";
              }

            ?>

          </table>
        </form>
        <menu class="nav">
          <br /><br /><br /><br /><a class="botoes" href="INDEX.html"
            ><i class="fa-solid fa-house-user fa-2xl"></i></a
          ><br />
          <br /><br /><br /><br /><a class="botoes" href="produtos.php"
            ><i class="fa-solid fa-tag fa-2xl"></i></a
          ><br />
          <br /><br /><br /><br /><a class="botoes" href="movimentacao.php"
            ><i class="fa-solid fa-arrow-right-arrow-left fa-2xl"></i><br
          /></a>
          <br /><br /><br /><br /><a class="botoes" href="estoque.php"
            ><i class="fa-solid fa-boxes-stacked fa-2xl"></i><br
          /></a>
          <br /><br /><br /><br /><a class="botoes" href="vendas.php"
            ><i class="fa-solid fa-cart-shopping fa-2xl"></i><br
          /></a>
          <br /><br /><br /><br /><a class="botoes" href="relatorio.php"
            ><i class="fa-solid fa-file-lines fa-2xl"></i><br
          /></a>
          <br /><br /><br /><br /><a class="botoes" href="configs.php"
            ><i class="fa-solid fa-gear fa-2xl"></i><br
          /></a>
          <br /><br /><br /><br /><br /><br /><br /><br /><a
            class="botoes"
            href="logout.php"
            ><i class="fa-solid fa-right-from-bracket fa-2xl"></i></a
          ><br />
        </menu>
      </div>
    </div>
  </body>
</html>
