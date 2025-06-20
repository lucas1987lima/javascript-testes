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
  <title>Página inicial</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<script language="javascript" src="funcoes/recebeValores.js"></script>
<body>


<form method="post" action="mostraOqueDigitou.php">

  <div class="container">

   <!-- MENSAGEM DE BOAS VIDAS -->
    <h1>Boas vindas!</h1>
    <p>Vamos personalizar sua saudação usando JavaScript!</p>
    <div class="saudacao" id="mensagemSaudacao">Olá, <?php echo $usuario ?> </div>
 
    
    <button type="button" class="bt-entrar" onclick="mudarNome()">PERSONALIZA SAUDAÇÃO </button> </p>
    <button class="bt-entrar">Vá para DIGITA e ESCREVE AUTOMÁTICO </button> </p>
    <!-- botão do tipo BUTTON pra não acinar o FORM -->
    <a href="index.html"><button type="button" class="bt-limpar">SAIR</button></a>


    <!-- ENVIANDO DADOS DA PÁGINA ANTERIOR PARA A PROXIMA VIA POST -->
    <input class="usuario" type="hidden" id="usuario" name="usuario" value="<?php echo $usuario; ?>">
    <input class="senha" type="hidden" id="senha" name="senha" value="<?php echo $senha; ?>">
    
    
</form>
    
  </div>


    
  <script> 
      //funcao
    function mudarNome(){
      // Declaracao de variavel
        let nome =  "<?php echo $usuario; ?>"
        document.getElementById("mensagemSaudacao").textContent = "OLÁ " + nome + ", SEJA BEM-VINDO"
    }

    

        


  </script>
</body>
</html>
