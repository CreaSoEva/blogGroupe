<?php
class UserManager{
    private $_bdd;
    public function __construct($_bdd)
    {
        $this->_bdd = $_bdd;
    }
    public function getUser($email,$password){
        $passwordmd5 = MD5($password);
            $req = $this->_bdd->prepare('SELECT * FROM user WHERE email = :email AND password = :password');
            $req->execute(array(
                'email' => $email,
                'password' => $passwordmd5));
            $donnees = $req->fetch();
            $user = new User($donnees);
            return $user;
    }

    public function userExists($email) {
        $req = $this->_bdd->prepare('SELECT * FROM user WHERE email= :email');
            $req->execute(array(
                'email' => $email
            ));
            $donnees = $req->fetch();
            if ($donnees != false) {
             $user = new User($donnees);
            return $user;
            }else{
                return false;
            }

    }
    
    public function createUser($user1, $password, $email){
        $req = $this->_bdd->prepare('INSERT INTO user(user, password, email) VALUES(:user, :password, :email)');
            $req->execute(array(
            'user' => $user1,
            'password' => $password,
            'email' => $email));
    }

    public function getBdd(){
        return $this->_bdd;
    }

    public function setBdd($_bdd){
        $this->_bdd = $_bdd;
        return $this;
    }
}



?>