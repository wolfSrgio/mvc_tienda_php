<?php


 
 require_once('./autoload.php');


if(isset($_GET['controler'])){
 
     $nameController=ucwords($_GET['controler']).'Controller';
    // echo "<br>".$nameController."<br>";
    // die();
    if(class_exists($nameController)){
               
                $controlador=new $nameController();//CREANDO CONTROLADOR
             

                if(isset($_GET['metodo'])){
                    
                $metodo="ctr".ucwords($_GET['metodo']).ucwords($_GET['controler']);
                //echo $metodo."<br>";
                 //die();
                     if(method_exists($controlador,$metodo)){
                            $controlador->$metodo();// LLAMANDO AL METODO
                            }else{
                                echo "<h1 style='color:red'>ERROR 404 , pagina NOT FOUND - method</h1>";
                        }
                }else{
                    $metodo="ctrIndex".$_GET['controler'];
                    $controlador->$metodo(); //METODO POR DEFECTO- que invocara una vista
                }

    }else{
        echo "<h1 style='color:red'>ERROR 404 , pagina NOT FOUND - class</h1>";
        exit();
    }
    
  
}else{
//  require_once('./controllers/Usuario_Controller.php');
//     $userControl=new UsuarioController();//CREANDO CONTROLADOR
//     $userControl->controllerMostrartodosUsuario(); //METODO POR DEFECTO- que invocara una vista

/* Arrancando Pagina de Inicio */
 require('./front-end/index.php');
}



?>


