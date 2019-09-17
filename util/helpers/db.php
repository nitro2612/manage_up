<?php

class db
{
    private $host;  // Link, where the database is hosted
    private $db_name;  // Name of the database
    private $user;  // Username
    private $pwd ;  // Password

    public function __construct()
    {
        $this->host = 'localhost';
        $this->db_name = 'manageup';
        $this->user = 'admin';
        $this->pwd = 'admin';
    }

    public function getConnection()
    {
        return new mysqli($this->host, $this->user, $this->pwd, $this->db_name);
    }

}

?>