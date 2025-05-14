<?php
session_start();

abstract class Connection
 {

    public $host="LOCALHOST";
    public $user="root";
    public $password="";
    public $db_name="registrationpagewithoop";
    public $conn;

   public function __construct() {
    $this->conn=mysqli_connect($this->host,$this->user,$this->password,$this->db_name);
    
    if(!$this->conn):
        die("Connection Failed : ".mysqli_connect_error());
    endif;
   }


}


class Register extends Connection {

    public function Registration($name,$username,$email,$password,$confirmpassword){
        $duplicate=mysqli_query($this->conn, "SELECT * FROM tbl_user WHERE username='$username' OR email='$email'");

        if(mysqli_num_rows($duplicate)>0) {
            //username or email has already taken
            return 10;
        }
        else {
            //username & email does not exist
            if($password==$confirmpassword) {
                $password=password_hash($password , PASSWORD_DEFAULT);
                $query="INSERT INTO tbl_user VALUES ('','$name','$username','$email','$password')" ;

                if (mysqli_query($this->conn, $query)) 
                {
                    // Registration successful
                    return 1;
                } 
                else {
                    // Query execution failed, output error message
                    die("Error: " . mysqli_error($this->conn));
                }
               
                
            }
            else {
                return 100;
                //password does not match
            }
        }
    }


}

class Login extends Connection {
    public $id;
    public function login($usernameemail,$password) {

        $result=mysqli_query($this->conn,"SELECT * FROM `tbl_user` WHERE username='$usernameemail' OR email='$usernameemail'");

        $row=mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result)>0):
            if(password_verify($password,$row['password'])):
                $this->id=$row['id'];
               return 1;
               //login successfull.
            else:
                return 10;
                // worng password
            endif;
        else:
            return 100;
            //user not registered
        endif;

    }

    public function idUser() {
        return $this->id;
    }
}

class Select extends Connection {
    public function selectUserById($id) {
        $result=mysqli_query($this->conn,"SELECT * FROM tbl_user WHERE id=$id");

        return mysqli_fetch_assoc($result);

    }
}