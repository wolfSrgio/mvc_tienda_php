<?php

class Conexion{

    public static function inizia(){

       $conex=new mysqli('localhost','root','','m_obj_tienda_master');
       $conex->query("SET NAMES 'utf8'");

       return $conex;
    }
}