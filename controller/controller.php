<?php

class View_AllCLients{
  
  public function __construct(){

/*
    require_once 'controller/controller.php';
   

    $clientes = get_all_clients();

     require 'view/view_client.php'; */
     $controller = require_once 'model/model.php';

     $url = $this->view_clients();
     $url = $this->create_clients();

  }

    public function view_clients(){

      if(isset($_GET['ver']))
        {
          $controller;
   

          $clientes = get_all_clients();

          require 'view/view_client.php';
        }
      }


      public function create_clients(){

      if(isset($_GET['criar']))
        {
          
         $controller;
         require 'view/create_client.php'; 

       
          $clientes = create_client();
      

          //echo 'DIMITRI';
        }
      }

  
}

/* PENDENTE
class Create{
  
  public function create_client(){


  }
}
*/
