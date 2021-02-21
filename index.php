<?php


 
 require_once('./autoload.php');

 $url="http://localhost/1_php/c_masterPHP/e_Proyecto_carrito/front-end/";
 
 require_once('./views/layout/header.php');


//AQUI MOSTRAREMOS EL CONTENIDO O CUERPO: que ira cambiando segun el controlador y su metodo

 
if(isset($_GET['controler'])){
      /* Para URL tipo :
     http://localhost/1_php/c_masterPHP/e_Proyecto_carrito/?controler=producto
    */
 
     $nameController=ucwords($_GET['controler']).'Controller'; 

 
    if(class_exists($nameController)){
               
                $controlador=new $nameController();//CREANDO CONTROLADOR
             
            
                if(isset($_GET['metodo'])){
                /*Para url tipo :
                 http://localhost/1_php/c_masterPHP/e_Proyecto_carrito/?controler=producto&metodo=index
               */  
                $metodo="ctr".ucwords($_GET['metodo']).ucwords($_GET['controler']);
                //echo $metodo."<br>";
                 //die();
                     if(method_exists($controlador,$metodo)){

                       if ($_GET['metodo']!='register') {
                        require_once('./views/layout/main.php');
                      }
                       
                      $controlador->$metodo();// LLAMANDO AL METODO
                      //y mostrar su contenido

                      if ($_GET['metodo']!='register') {
                       require_once('./views/layout/sidebar.php');
                      }
                            }else{
                                  /*Para url tipo :
                                    http://localhost/1_php/c_masterPHP/e_Proyecto_carrito/?controler=producto&METODONOEXISTE=index
                                      */ 
                                echo "<h1 style='color:red'>ERROR 404 , pagina NOT FOUND - method</h1>";
                        }
                }else{
                    /*Para url tipo :
                    http://localhost/1_php/c_masterPHP/e_Proyecto_carrito/?controler=producto 
                   */ 
                    
                   
                    if(count($_GET)==1){
                      require_once('./views/layout/main.php');
                       $metodo="ctrIndex".$_GET['controler'];
                       $controlador->$metodo(); //METODO POR DEFECTO- que invocara una la vista ndex de ese controlador
                     require_once('./views/layout/sidebar.php');
             
                      }else{
                        /*Para url tipo :
                            http://localhost/1_php/c_masterPHP/e_Proyecto_carrito/?controler=producto&PARAMETRODESCONOCIDO=index
                          */ 
                        echo "<h3 style='color:red'>ERROR 505 - Parameter ' ". array_keys($_GET)[1]." '  undefined</h3>";
                        exit();
                    } 
                 
                }

    }else{
        echo "<h1 style='color:red'>ERROR 404 , pagina NOT FOUND - class</h1>";
        exit();
    }
    
  
}else{
  require_once('./views/layout/main.php');
   /*Para url tipo 
     http://localhost/1_php/c_masterPHP/e_Proyecto_carrito
   */
     $productoControl=new ProductoController();//CREANDO CONTROLADOR
     $productoControl->ctrIndexProducto(); //METODO POR DEFECTO- que invocara una vista

/* Arrancando Pagina de Inicio */
//  require('./front-end/index.php');
require_once('./views/layout/sidebar.php');
 
}


require_once('./views/layout/footer.php');

?>


