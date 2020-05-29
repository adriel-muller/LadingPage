<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">    
    <title>SendEmail</title>
</head>

<body>
    <div class = "texto"> <p> < QUER APRENDER A CODAR COMO UM MESTRE DA PROGRAMAÇÃO? /></br> </br> < INSIRA SEU EMAIL E RECEBA UM E-BOOK EXCLUSIVO! />  </p></div>
    <div class=icon> <img src="./images/icon.png"></div>

    <form action="server/script.php" method="POST">
    <div class = "campo">
        <input type="email" id="email" name="email" placeholder="Insira seu Email!" required="required" autocomplete="off" required>    
    </div>

    <div class="botao"> 
        <input type="submit" name="submit" value="Enviar" class="button">
    </div>
    </form>
    

  
</body>
</html>