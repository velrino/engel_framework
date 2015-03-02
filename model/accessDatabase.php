
<?php

$server = 'localhost';
$user = 'root';
function open_database_connection(){
  $conexao = @mysql_connect($server, 'root', '123');
  mysql_select_db('project_pizzaria', $conexao);

  return $conexao;
}

 function close_database_connection($conexao){

  mysql_close($conexao);

 }




/* EXIBIR CLIENTE VIA ID [PENDENTE]
 function get_client($id_cliente)
 {
  $conexao = open_database_connection();

  $id = mysql_real_escape_string($id_cliente);

 $query = 'SELECT nome_cliente FROM cliente WHERE id_cliente = '.$id;

  $result = mysql_query($query);
    $row = mysql_fetch_assoc($result);

  close_database_connection($conexao);

  return $row;
 }