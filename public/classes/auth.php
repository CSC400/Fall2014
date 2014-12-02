<?php
    session_start();
    session_regenerate_id();

    include "functions.php";


    $firstname = $_POST['firstname'];
    $password = $_POST['password'];




   if(isset($_POST['create']))
    {
       if (duplicateUsers($firstname,$dbh)==true){
            echo "User with this username already exists <br>";
            echo "Click on the link to go back to the create user page <br>";
            echo '<a href="create_user.php">User Creation Page</a>';
            session_destroy();
       }
       else{
            newUser($firstname,$password,$dbh);
            echo "User has been successfully created.<br>";
            echo "Click on the line below to go back to the login page <br>";
            echo '<a href="index.php">Login Page</a>';
            session_destroy();
       }
    }

    else if (isset($_POST['clogin'])){
        $log_attempt = authUser($firstname,$password);
        echo $log_attempt.'<br>';

        if ($log_attempt == "success"){
            $_SESSION['username'] = $firstname;
            $_SESSION['role_id'] = 1;
            echo "Success";
            header("Location: ../views/clientLanding.php");
        }
        else{
            session_destroy();
            header("Location: ../views/loginC.php");
        }


    }
    
    else if (isset($_POST['vlogin'])){
        $log_attempt = authUser($firstname,$password);
        echo $log_attempt.'<br>';

        if ($log_attempt == "success"){
            $_SESSION['username'] = $firstname;
            $_SESSION['role_id'] = 1;
            echo "Success";
            header("Location: ../views/clientLanding.php");
        }
        else{
            session_destroy();
            header("Location: ../views/loginC.php");
        }


    }
?>