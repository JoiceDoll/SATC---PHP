<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Formulario de Contato</title>
    </head>

    <body>

    <style>
body{font-family:Arial,Helvetica; margin:0; padding:0;background-color:#244d61}
.content{display:flex; justify-content:center; background-color:#fff; height:500px;}
.form{display:flex;flex-direction:column; margin-top:40px;}
.contato{width: 100%; max-width:500px;}
.SendCadCont{background-color:#244d61; color:#fff;}
h1{color:#244d61; text-align:center;}

    </style>
    <div class="content">
        <div class="contato">
        <h1>Cadastrar Mensagem</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form class="form" method="POST" action="form.php">
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="Insira seu nome completo"><br><br>
            
            <label>E-mail: </label>
            <input type="email" name="email" placeholder="Digite seu e-mail"><br><br>            
            
            <label>Assunto: </label>
            <input type="text" name="assunto" placeholder="Assunto da mensagem"><br><br>            
            
            <label>Mensagem: </label>
            <textarea name="mensagem" rows="3" cols="50"></textarea><br><br>
            
            <input class="SendCadCont" name="SendCadCont" type="submit" value="Cadastrar">
        </form>
    </div>
    </div>
    </body>
</html>
