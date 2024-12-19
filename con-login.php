<?php
use LDAP\Result;
session_start();
include "config.php";

if (isset($_POST['email']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)){
        header("Location: index.php?error=Email Name is required");
        exit();
    }else if(empty($password)){
        header("Location: index.php?error=Password is reguired");
        exit();
    }else{
        $sql = "SELECT * FROM login WHERE email='$email' AND password ='$password'";

        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['id_user'] = $row['id_user'];
                header("Location: index.php");
                exit();
            }else{
                header("Location: login.php?error=Incorect Email or password");
                exit();
            }
        }else{
            header("Location: login.php?error=Incorect Email or password");
            exit();
        }
    }

}else{
    header("Location:login.php");
    exit();
}