<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RODAPE TESTE</title>
    <script src="rodape.js"></script>
    <link rel="stylesheet" href="cadastro.css">
    
    
</head>
<body>
    
    <div class="cabecalho">
        <div class="logo" onclick="Aparecer();"> 
            <div class="menu"></div>
            <div class="menu"></div>
            <div class="menu"></div>
        </div>
        <div class="logo"><img src="img/LOGO FUT VILLE.png" width="280px"></div>
        <div class="logo">OI</div>
    </div>


        <div class="lateral" id="lateral">
            <div onclick="Fechar();" class="fechar"><img src=img/x.png width="20px"></div> <br>
            <div class="foto_conta">
                <div class="imagem_conta"></div>
                <div class="nome_imagem"><?php echo( $_SESSION["nome"]); ?></div>
            </div> <br><br>
            <div class="menu_conta">  
            <a href="cadastro.php"> <div class="rodape2">Cadastro</div></a><br>
            <div class="rodape2">Escalação</div><br>
            <div class="rodape2">Competições</div><br>
            <div class="rodape2">Ranking</div><br>
            <div class="rodape2">Notícias</div><br>
            <div class="rodape2">Dashboard</div><br>
            </div>  
        </div>
        
            <div class="organizar">
                <form action="login.php" method="post" class="formu_tam">
                <div class="nome_texto">Conta Futville</div>
                <div class="nome_texto1">Uma só conta para todos os produtos Futville</div>
                <div class="login"> 
             E-mail<br><input name="email" class="caixasenha" type="text"><br>
             Senha<br><input name="senha" class="caixasenha" type="password"><br>
                </div>
                <input name="Entrar" type="submit" class="entrar"></input>
                <div class="cadastra">Não tem conta?<a href="cadastre-se.php">CADASTRE-SE.</a></div>
            </div>
        </form>

        



        
    <div class="rodape">© 2022-2023 FutVille FC - Liga Joinvilense de Futebol</div>
</body>
</html>