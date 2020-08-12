<?php
class BasedeDatos{

    const servidor="localhost";
    const usuariobd="root";
    const clave="";
    const nombrebd="inventariomvc";

    public static function Conectar(){
        try {

            $conexion = new PDO("mysql:host=".self::servidor.";dbname=".self::nombrebd.";charset=utf8",self::usuariobd,self::clave);
            //code...
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conexion;       
        } catch (PDOException $e) {

            return "fallo ".$e->getMassage();
            //throw $th;
        }


    }
     

}