<h1>Bienvenido a mi web</h1>


<?php

        require_once "controllers/UsuarioController.php";

        $controlador = new UsuarioController();

        $controlador->MostrarTodos();

        $controlador->crear();
        
