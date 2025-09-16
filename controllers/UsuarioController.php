<?php

//Aca mostramos todas las acciones que puede hacer un controlador//

class UsuarioController{

    public function MostrarTodos(){

    require_once "models/UsuarioModel.php";


    $usuario = new Usuario();

    $todos_los_usuario = $usuario ->conseguirTodos();

    require_once "views/Mostrar-todos.php";
    }
    }