<?php

/**
 * @author Gildodias
 * @copyright 2017
 */


  require_once("procedimentos.php");

  $sql = "SELECT id, nome FROM procedimentos";
  $resultado = $conexao->query($sql);

?>