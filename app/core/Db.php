<?php

class Db{
    private $server = //server ;
    private $username = //username ;
    private $passwordq = //password ;
    private $db_name = //db_name;

    public function connect(){
        $conn = mysqli_connect($this->localhost,$this->username,$this->password,$->db_name);
    }

}