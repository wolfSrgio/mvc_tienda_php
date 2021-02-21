<?php

 class UsuarioController{


      public function ctrIndexUsuario()
      {
         echo "Funcion index del controlador USUARIO";
      }

      public function ctrRegisterUsuario()
      {
         require_once('./views/usuario/register.php');
      }
      public function ctrSaveUsuario()//guardar el registro
      {
        if($_POST){
           var_dump($_POST);
            }
         }
 }