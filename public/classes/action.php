<?php

    include "db_conn.php";
    include "vendor_functions.php";
    include "user_functions.php";

    // $_POST["action"]   = "vlogin";
    // $_POST["username"] = "Francisco_Betancourt";
    // $_POST["password"] = "2legit2quit";

    $action = $_POST["action"];

    // $conn = dbconn();
    // $collection = new MongoCollection($conn, 'users');

    //$_POST["action"] = "logout";

    //
    // $action = "vlogin";
    // echo $action."\n";

    switch ($action) {

        case "vlogin":
            $attemptLogin = authUser($_POST["username"],$_POST["password"]);

            if ($attemptLogin  == "login_success"){
                setSessionVariables($_POST["username"]);
                echo $_SESSION["usertype"];
                header("Location: ../views/home.php");
                break;
            }else{
                logout();
                header("Location: ../views/loginV.html");
                break;
            }
            break;
        case "logout":
            logout();
            break;

        case "submitResponse":
            echo "YAY!!!";
            submit_Rfp();
            break;

        case "viewSingleRfp":
            echo "YAY!!!";
            getSingleRfp();
            break;

        case "account":
            echo "YAY!!!";
            $cursor = getUserCursor($_SESSION["username"]);
            getUserAccountInfo($cursor);
            header("Location: ../views/account.php");
            break;

        case "home":
            header("Location: ../views/home.php");
            break;
        case "viewRfps":
            put_Rfp_In_Array();
            header("Location: ../views/rfps.php");
            break;
        default:
            break;
    }

            #... Navigation of Vendor Response Pages

?>