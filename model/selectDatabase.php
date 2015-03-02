<?php

function get_all_clients()
  {
    $conexao = open_database_connection();

    $result = mysql_query("SELECT id_cliente, nome_cliente, telefone_cliente, endereco_cliente , numero_cliente, outras_info FROM cliente");

    $posts = array();
    while ($row = mysql_fetch_assoc($result)) {
        $posts[] = $row;
    }

  close_database_connection($conexao);

  return $posts;
}