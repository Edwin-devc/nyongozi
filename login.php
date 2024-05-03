<?php
include 'db_connect.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

        $statement = $conn->prepare($sql);
        $statement->execute();
        $user = $statement->fetchAll(PDO::FETCH_ASSOC);
        if(count($user) > 0) {
            $_SESSION['email'] = $email;
            header('location: index.php');
        } else {
            header('location: sign-in-customer.php');
        }
    } 
    // else if(isset($_POST['register'])) {
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    //     $sql = "INSERT INTO user(email, password) VALUES('$email', '$password')";
    //     $statement = $conn->prepare($sql);
    //     if($statement->execute()) {
    //         header('location: login.php');
    //     }
    // } else if(isset($_POST['forgot'])) {
    //     $email = $_POST['email'];
    //     $sql = "SELECT * FROM user WHERE email = '$email'";
    //     $statement = $conn->prepare($sql);
    //     $statement->execute();
    //     $user = $statement->fetchAll(PDO::FETCH_ASSOC);
    //     if(count($user) > 0) {
    //         $_SESSION['email'] = $email;
    //         header('location: reset.php');
    //     } else {
    //         header('location: login.php');
    //     }
    // } else if(isset($_POST['reset'])) {
    //     $email = $_SESSION['email'];
    //     $password = $_POST['password'];
    //     $sql = "UPDATE user SET password = '$password' WHERE email = '$email'";
    //     $statement = $conn->prepare($sql);
    //     if($statement->execute()) {
    //         header('location: login.php');
    //     }
    // } else if(isset($_POST['logout'])) {
    //     session_destroy();
    //     header('location: login.php');
    // } else if(isset($_POST['login'])) {
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    //     $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    //     if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    // }
    //     $statement = $conn->prepare($sql);
    //     $statement->execute();
    //     $user = $statement->fetchAll(PDO::FETCH_ASSOC);
    //     if(count($user) > 0) {
    //         $_SESSION['email'] = $email;
    //         header('location: index.php');
    //     } else {
    //         header('location: login.php');
    //     }
    // }

?>