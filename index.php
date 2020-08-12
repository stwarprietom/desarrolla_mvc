<?php

require_once "modelos/basededatos.php";
     
   // var_dump($_GET['controlador']);    
    if (!isset($_GET['c'])) {
        # code...   
        require_once "controladores/inicio.controlador.php";
        $controlador = new InicioControlador();
        call_user_func(array($controlador,"Inicio"));
    } else {
       $controlador = $_GET['c'];
       require_once "controladores/$controlador.controlador.php";
       $controlador = ucwords($controlador)."Controlador";
       $controlador = new $controlador;
       $accion = isset($_GET['a']) ?  $_GET['a'] : "Inicio";
       call_user_func(array($controlador,$accion));
    }
?>