<?php
    include('../PHP_MYSQL/connection_bd.php');
    session_start();

    $login_errado = $_SESSION['errado_login'];
    $enviado = $_SESSION['enviado'];
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../ASSETS/login.css">
        <script src="../ASSETS/js.js"></script>
        <title>Login Usuário</title>    
    </head>

    <body>
        <div class="grid-container">            
                    
            <div class="grid-main"> 
                <form class="box" action="../PAGES/home.html" method="post"><br><br>
                        <legend>Login</legend><br><br><br><br>
                        <input type="email" name="email" placeholder="E-mail"  required>
                        <br>
                        <input type="password" name="senha" placeholder="Senha"  required>
                        <br>
                        
                        <!-- <?php if($login_errado == true){ ?>
                            <a class ="errado" >Senha ou e-mail inválido</a>    
                        <?php } ?> -->

                        <br><br>
                        <input type="submit" name="submit" value="Entrar" >
                        <p><a class = "recuperar_senha" onclick="openForm()">Esqueceu a sua senha?</a></p> <!-- onclick="openForm()" ABRE O POP-UP -->
                </form>
                <img src="../IMG/logo.png">
            </div>

        
            <!-- pop-up recuperação de senha
            <div class="form-popup" id="myForm">
                <form action="../PHP_MYSQL/action_page.php" class="form-container" method="POST">
                <img class="x" src="../IMG/x.png" alt="" onclick="closeForm()"></a> <br><br>
                <a class="tutorial">Digite o e-mail da conta para enviarmos o link de recuperação de senha</a> <br><br>
                    
                <input type="text" placeholder="E-mail da conta" name="email" required>
            
                <button type="submit" class="btn">Enviar link</button>
                </form>
            </div>
                    
            <script>
                function openForm() {
                    document.getElementById("myForm").style.display = "block";
                }
                    
                function closeForm() {
                    document.getElementById("myForm").style.display = "none";
                }
            </script>
            fim pop-up recuperação de senha -->

                <?php if($enviado == "certo"){ ?>
            <!--    <script>
                        alert("E-mail enviado com sucesso, verifique sua caixa de entrada.");
                    </script>
                <?php } elseif($enviado == "errado"){ ?>
                    <script>
                        alert("Falha ao enviar o e-mail verifique se o escreveu corretamente.");
                    </script>  -->
                <?php } ?>
            </div>
        </div>
    </body>
</html>