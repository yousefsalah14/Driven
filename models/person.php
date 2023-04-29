<?php
 abstract class Person {
    private $username;
    private $name;
    private $password;
    private $phone;
    


    public function getUsername(){
            return $this->username;
        }
    public function getName(){
            return $this->name;
        }
    public function getPassword(){
            return $this->password;
        }
    public function getPhone(){
        return $this->phone;
        }
    public function setUsername($uname){
            $this->username=$uname;
        }
    public function setName($name){
            $this->username=$name;
        }
    public function settPassword($pass){
            $this->password=$pass;
        }
    public function setPhone($pho){
                $this->username=$pho;
        }

}