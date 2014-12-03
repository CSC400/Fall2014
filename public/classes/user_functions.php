<?php
    // include "db_conn.php";

    $uconn = dbconn();
    $ucollection = new MongoCollection($uconn, 'users');


    function authUser($username,$password){
        global $ucollection;
        $where=array( '$and' => array( array('username' =>$username), array('password'=>$password) ) );
        $cursor = $ucollection->find($where);

        if (countResults($cursor) == "x_gt_0"){
            $_SESSION["loggedin"] = "yes";
            return "login_success";
        }elseif (countResults($cursor) == "x_=_0") {
            # code...
            return "login_failed";
        }else{
            return "re-examine the involved procedures \n";
        }
    }

    function countResults($cursor){
        if(($cursor->count()) > 0){
            return "x_gt_0";
        }else{
            return "x_=_0";
        }
    }

    function getUserCursor($user){
        global $ucollection;
        $cursor= $ucollection->find(array("username"=> $user));
        return $cursor;
    }

    function setSessionVariables($user){
        $_SESSION["username"] = getUserName(getUserCursor($user));
        $_SESSION["usertype"] = getUserType(getUserCursor($user));
    }

    function getUserAccountInfo ($cursor){
        return  $cursor->getNext();
    }

    function getUserID ($cursor){
        foreach ($cursor as $doc) {
                return $doc['oid'];
            }
    }

    function getUserName ($cursor){
        foreach ($cursor as $doc) {
                return $doc['username'];
            }
    }

    function getUserType ($cursor){
        foreach ($cursor as $doc) {
                return $doc['type'];
            }
    }

    function isLoggedin(){
        if( isset( $_SESSION["username"] ) ){

        }else{
            echo "you're logged out";
            header("Location: ../index.html");
        }
    }

    function logout(){
        session_destroy();
        header("Location: ../index.html");
    }

    function venderViewPermission(){
        if (($_SESSION["usertype"] == "Admin") || ($_SESSION["usertype"] == "Vend")){

        }else{
            logout();
        }
    }

    function clientViewPermission(){
        if (($_SESSION["usertype"] == "Admin") || ($_SESSION["usertype"] == "SCSU")){

        }else{
            logout();
        }
    }

    function adminViewPermission(){
        if ($_SESSION["usertype"] == "Admin"){

        }else{
            logout();
        }
    }





?>