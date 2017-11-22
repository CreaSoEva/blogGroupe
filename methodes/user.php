<?php 
class User{
	private $_id_client;
	private $_user;
	private $_password;
	private $_email;

    public function __construct($donnees){
        $this->_id_client = $donnees['id_client'];
        $this->_user = $donnees['user'];
        $this->_password = $donnees['password'];
        $this->_email = $donnees['email'];
    }
    public function getIdClient(){
        return $this->_id_client;
    }

    public function setIdClient($_id_client){
        $this->_id_client = $_id_client;

        return $this;
    }

    public function getUser(){
        return $this->_user;
    }
    public function setUser($_user){
        $this->_user = $_user;

        return $this;
    }

    public function getPassword(){
        return $this->_password;
    }

    public function setPassword($_password){
        $this->_password = $_password;

        return $this;
    }

    public function getEmail(){
        return $this->_email;
    }

    public function setEmail($_email){
        $this->_email = $_email;

        return $this;
    }
}
?>