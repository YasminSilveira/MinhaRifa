<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Sorteio online</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
     <h1>CESTA DE AJUDA!</h1> 
      <h3> Nessa rifa nós iremos sortear uma linda cesta, com variedades dos melhores
            chocolates, e uma quantia de R$1,000 reais. </h3>
      <h4> Para participar é fácil! Basta você escolher os números e colocar seus dados. </h4>
      
    <h4></h4>
  <body>
      <p>Nome: <input type="text" ></p>
      <p>Endereço: <input type="text"></p>
      <p>Telefone: <input type="text"></p>
    <p>Entre com o valor minimo: <input type="number"  name="minimo" id="minimo"></p>
    <p>Entre com o valor maximo: <input type="number" name="maximo" id="maximo"></p>
    <button onclick="sorteio()">Sortear</button>
    <h1 id="resultado"></h1>
   <script src="script.js"></script>

  </body>
 <footer>
    <h4> Data do sorteio: 29/04/2021</h4>
    <p> Observações: Para mais dúvidas, ligar para: (51)9999-0900.</p>
</footer>
</html>