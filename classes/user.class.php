<?php
    include_once "./classes/dbConnection.class.php";


    class User extends DBConnection {
        function newuser($username, $password){
            $con = new dbConnection();

            $sql = $con->connect()->query("INSERT INTO users (username, password) VALUES('$username', '$password');");
            return $sql;
        }

        function getusers(){
            $con = new dbConnection();

            $sql = $con->connect()->query("SELECT * FROM users");
            return $sql;
        }

        function getdata($username){
            $con = new dbConnection();

            $sql = $con->connect()->query("SELECT * FROM users WHERE username='$username'");
            return $sql;
        }
    }

    
?>