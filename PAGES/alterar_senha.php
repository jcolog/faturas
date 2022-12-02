<?php
    include('../PHP_MYSQL/connection_bd.php');
    session_start();

    $incompativel = $_SESSION['incompativel'];

    if ($_SESSION['autorizado'] !== "autorizado") { 
        header('location: ../PAGES/login.php');
        exit();
    }

?>


<!DOCTYPE html>
<html lang="pt-br">

    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../ASSETS/alterar_senha.css">
        <title>Alterar senha</title>

    </head>

    <body>
        <div class="grid-container">            
            <div class="grid-header">
                <img class="header-logo" src="../IMG/logo.png" alt="">
            </div>
            
            <div class="grid-menu">
                <ul>
                    <li><a class="index" href="../index.html">Quem somos</a></li>
                    <li><a class="cadastro" href="register.php">Cadastro</a></li>
                    <li><a class="login" href="login.php">Login</a></li>
                </ul>
            </div>
                    
            <div class="grid-main2"> <br>
                <h1>Recuperação de senha </h1>
                <form class="box" action="../PHP_MYSQL/alterar_senha.php" method="post">
                        <input type="password" name="senha" id="" placeholder="Digite sua nova senha"  required>
                        <input type="password" name="senha2" id="" placeholder="Digite-a novamente"  required>
                        
                        <?php if($incompativel == true){ ?>
                            <a style= " color:red; ">Senhas incompatíveis</a>    
                        <?php } ?>

                        <input type="submit" name="submit" id="" value="Cadastrar nova senha">
                </form>
             </div>



            <div id="grid-footer">
                <p class="p-footer-left">copyright@HeathFirst - All rights reserved</p>
                <a href="https://pt-br.facebook.com/"><img class="r1" src="../IMG/facebook.png" alt=""></a>
                <a href="https://www.instagram.com/?hl=pt-br"><img class="r2" src="../IMG/instagram.png" alt=""></a> 
                <p class="p-footer-right">@HealthFirst</p>
            </div> 
        </div>

        
    </body>
</html>







