<?php

  require_once("../exames.php?operation=insert");

  $conexao = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

  if ($conexao->connect_errno) {
    die("Falha de conexão!");
  } else {
    //echo "Conexão realizada com sucesso!";
    //echo $conexao->host_info;
  }
