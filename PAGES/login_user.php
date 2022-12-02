<?php
    // include('../PHP_MYSQL/connection_bd.php');
    // session_start();

    // $login_errado = $_SESSION['errado_login'];
    // $enviado = $_SESSION['enviado'];
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../ASSETS/login.css">
        <title>Login Usuário</title>    
    </head>

    <body>
        <div class="grid-container">            
                    
            <div class="grid-main"> 
                <form class="box" action="../PAGES/fatura.html" method="post"><br><br> <!-- depois mudar o action para ../PHP_MYSQL/login.php -->
                        <legend>Login</legend><br><br><br><br>
                        <input type="number" name="matricula" placeholder="Matrícula"  required>
                        <br>
                        <input type="number" name="CPF" placeholder="CPF(Somente números)"  required>
                        <br><br>
                        <input type="submit" name="submit" value="Entrar" >
                        <?php if($login_errado == true){ ?>
                    <!--    <a class ="errado" >Matrícula ou CPF inválido</a> -->
                        <?php } ?>
                        <br>
                    <!--     <input type="submit" name="submit" value="Entrar"> -->
                </form>
            </div>

            <div class="texto">
                <h3>Para incentivar o consumo consciente será adicionado uma taxa na fatura conforme os níveis de seca que acontecem no território catarinense </h3>
                <br><br>
                <p><b style="color:red;">Bandeira Vermelha:</b> Utilizada para quando o consumo da água está em estado crítico devido ao tratamento da água ou 
                pouco volume de chuva acumulado. Será cobrado R$4,00 por metro cúbico consumido.</p>
                <br>
                <p><b style="color:yellow;">Bandeira Amarela:</b> Utilizada para quando o consumo da água está em estado menos favoráveis devido ao tratamento
                da água ou pouco volume de chuva acumulado. Será cobrado R$3,00 por metro</p>
                <br>
                <p><b style="color:blue;">Bandeira Azul:</b> Utilizada para quando o consumo da água está em estado favorável devido ao tratamento
                da água ou grande volume de chuva acumulado. Não será cobrado nenhuma taxa adicional</p>
            </div>
        </div>
    </body>
</html>