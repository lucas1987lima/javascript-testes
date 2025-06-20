<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $usuario = $_POST["usuario"];
       $senha = $_POST["senha"];

       //echo "usuario: " . $usuario . "<br>";
       //echo "senha: " . $senha;
   }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digita e Mostra</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<script language="javascript" src="funcoes/recebeValores.js"></script>
<body>

<form method="post" action="home.php">

  <div class="container">
    <h1>DIGITE ALGUMA COISA</h1>
    <p>Conforme digita, é preenchido automático</p>


          <!-- CHAMA A FUNCAO  onkeyup="recebeTexto() -->
    DIGITE: <input type="text" name="texto" id="texto" onkeyup="recebeTexto()">
 
    
      <!-- ESCREVE O TEXTO DIGITADO NA VARIAVEL  textoDigitado -->
      <p>Texto digitado: <span id="textoDigitado"></span> </p>

    </p><a href="home.php"><button type="submit" class="bt-limpar">VOLTAR</button></a>
  </div>


    <!-- ENVIANDO DADOS DA PÁGINA ANTERIOR PARA A PROXIMA VIA POST -->
    <input class="usuario" type="hidden" id="usuario" name="usuario" value="<?php echo $usuario; ?>">
    <input class="senha" type="hidden" id="senha" name="senha" value="<?php echo $senha; ?>">


</form>

</body>
</html>
