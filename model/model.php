<?php

class Indexe{
  public function __construct(){

/*
    require_once 'controller/controller.php';
   

    $clientes = get_all_clients();

     require 'view/view_client.php'; */


     $url = $this->view_clients();

  }

    public function view_clients(){

      if(isset($_GET['ver']))
        {
         require_once 'controller/controller.php';
   

          $clientes = get_all_clients();

          require 'view/view_client.php';
        }
  
}

}
/* PENDENTE
class Create{
  
  public function create_client(){


  }
}
*/