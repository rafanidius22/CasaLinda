//Funcao adiciona uma nova linha na tabela
function adcproduto(tabProdutos) {
  var tabela = document.getElementById(tabProdutos);
  var numeroLinhas = tabela.rows.length;
  var linha = tabela.insertRow(numeroLinhas);
  var celula1 = linha.insertCell(0);
  var celula2 = linha.insertCell(1);
  var celula3 = linha.insertCell(2);
  var celula4 = linha.insertCell(3);
  var celula5 = linha.insertCell(4);
  var celula6 = linha.insertCell(5);
  var celula7 = linha.insertCell(6);
  celula1.innerHTML = getElementById("codigoproduto");
  celula2.innerHTML = getElementById("prod");
  celula3.innerHTML = getElementById("desc");
  celula4.innerHTML = getElementById("cat");
  celula5.innerHTML = getElementById("fornec");
  celula6.innerHTML = getElementById("precoE");
  celula7.innerHTML = getElementById("precoS");
}

// funcao remove uma linha da tabela
function removeLinha(linha) {
  var i = linha.parentNode.parentNode.rowIndex+1;
  document.getElementById("tabProdutos").deleteRow(-1);
}
