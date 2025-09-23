<?php
require_once 'config/database.php';

class Usuario {

    public $db;
    public function _construct(){

        $this->db =Database::conectar() ;
    
}
    public $idusuario;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $rol;
    public $imagen;

    function getid_usuario(){
        return $this->idusuario;
    }
    function getnombre(){
        return $this->nombre;
    }
    function getapellido(){
        return $this->apellido;
    }
    function getemail(){
        return $this->email;
    }
    function getpassword(){
        return $this->password;
    }
    function getrol(){
        return $this->rol;
    }
    function getimagen(){
        return $this->imagen;
    }
    function setid_usuario($id_usuario){
        $this->idusuario = $id_usuario;
    }
    function setnombre($nombre){
        $this->nombre = $nombre;
    }   
    function setapellido($apellido){
        $this->apellido = $apellido;
    }
    function setemail($email){
        $this->email = $email;
    }
    function setpassword($password){
        $this->password = $password;
    }
    function setrol($rol){
        $this->rol = $rol;
    }   
    function setimagen($imagen){
        $this->imagen = $imagen;
    }  
  //metodo que consulten cosas a la bdats
public function conseguirTodos(){
    
    echo "imprimiendo todos los usuarios...";
}

    public function crear(  ){
        
        echo "Crear Usuarios...";
    }
    


}