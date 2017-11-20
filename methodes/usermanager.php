<?php
class UserManager{
    private $_bdd;
    public function __construct($_bdd)
    {
        $this->_bdd = $_bdd;
    }
    public function getUser($user,$password){
        $passwordmd5 = MD5($password);
            $req = $this->_bdd->prepare('SELECT * FROM user WHERE user = :user AND password = :password');
            $req->execute(array(
                'user' => $user,
                'password' => $passwordmd5));
            $donnees = $req->fetch();
            $user = new User($donnees);
            return $user;
    }
    public function getBdd()
    {
        return $this->_bdd;
    }
    public function setBdd($_bdd)
    {
        $this->_bdd = $_bdd;
        return $this;
    }
}



?>