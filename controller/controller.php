<?php

class View_AllCLients{



  public function __construct(){

/*
    require_once 'controller/controller.php';


    $clientes = get_all_clients();

     require 'view/view_client.php'; */
     $controller = require_once 'model/accessDatabase.php';
     $select = require_once 'model/selectDatabase.php';
     $create = require_once 'model/createDatabase.php';


        require_once 'model/teste.php';
        $teste = new Pai_Santo();

     $url = $this->view_clients();
     $url = $this->create_clients();

  }

    public function view_clients(){

      if(isset($_GET['ver']))
        {

          $clientes = get_all_clients();

          require 'view/view_client.php';
        }
      }


      public function create_clients(){


        $nomeClient = $_POST["name"];

      if(isset($_GET['criar']))
        {


         require 'view/create_client.php';

         if(!empty($_POST["name"])){
            echo 'COROAAAA';
                $clientes = create_client();
            }

            else

                { echo 'TESTE';}
        }
      }


}

/* PENDENTE
class Create{

  public function create_client(){


  }
}
*/
