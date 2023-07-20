<?php
include_once 'Database.php';

class User extends Database
{
    private $table_name = 'users';
    public $id;
    public $name;
    public $email;
    public $password;

    public function register()
    {
        $query = "INSERT INTO " . $this->table_name . "(name,email,password) VALUES(:name,:email,:password)";
        $stmt = $this->conn->prepare($query);
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        } 
    }

}


?>