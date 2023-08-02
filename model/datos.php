<?php

class datos{
    protected $db;
    private $username;
    private $token;
    private $nombre;
    private $apellido;
    private $email;
    private $pone;
    public function __construct(PDO $connection)
    {
        $this->db = $connection;

    }
    function setUsername($username)
    {
        $this->username = $username;
    }
   
    function setToken($token)
    {
        $this->token = $token;
    }
    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    function setPone($pone)
    {
        $this->pone = $pone;
    }

    function getToken()
    {
        return $this->token;
    }
    function getUsername()
    {
        return $this->username;
    }
    function getNombre()
    {
        return $this->nombre;
    }
    function getApellido()
    {
        return $this->apellido;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getPone()
    {
        return $this->pone;
    }
    function mostrar(){
        $stm = $this->db->prepare("SELECT * FROM users");
        $stm->execute();
        return $stm->fetchAll();
    }
    function addDatosUser(){
        $stm = $this->db->prepare("INSERT INTO  users (username, token) VALUES (:user, :token)");
        $stm->bindValue(':user', $this->username);
        $stm->bindValue(':token', $this->token);
        $stm->execute();
        return $stm->fetchAll();    
    }
    function addDatosProfile(){
        $stm = $this->db->prepare("INSERT INTO profiles (first_name, last_name, last_name, email, id_user, phone)");
    }
}