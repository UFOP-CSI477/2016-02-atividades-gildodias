<?php

    include "conexao.php";
   
    session_start();

    if(!isset($_SESSION['login']) || (!isset($_SESSION['senha']))){
        header("Location: ../index.html");
        exit;
    }else{
        echo "<center>Usuario(a) logado(a). =) </center>";
    }
      
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Painel</title>
        <link rel="stylesheet" type="text/css" href="../css/painel.css" />
    </head>
    
    <body>
        <nav id="menu">
            <ul>
                <li><a href="../exames.php">Marcar/Desmarcar/Exames</a></li><br/><br/>
                <li><a href="../usuarios.php">Cadastrar/Alterar Usuario</a></li><br/><br/>
                <li><a href="../procedimentos.php">Cadastrar/Alterar Procedimentos</a></li><br/><br/>
                <li><a href="../pacientes.php">Cadastrar Pacientes</a></li><br/><br/>
            </ul>
        </nav>
        <p><a href="logout.php"><input type="button" name="botao" id="botao" value="Sair"/></a></p>
    </body>    
</html>