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
        <h1>Cadastrar Mensagem</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="form.php">
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="Insira seu nome completo"><br><br>
            
            <label>E-mail: </label>
            <input type="email" name="email" placeholder="Digite seu e-mail"><br><br>            
            
            <label>Assunto: </label>
            <input type="text" name="assunto" placeholder="Assunto da mensagem"><br><br>            
            
            <label>Mensagem: </label>
            <textarea name="mensagem" rows="3" cols="50"></textarea><br><br>
            
            <input name="SendCadCont" type="submit" value="Cadastrar">
        </form>
    </body>
</html>
