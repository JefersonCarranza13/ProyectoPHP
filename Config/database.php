<?php


class Database{
    public static function conectar(){
        $conexion = new mysqli('localhost','root',"", 'tienda2');    
        $conexion->query("set names 'utf-8' ");
    }
}