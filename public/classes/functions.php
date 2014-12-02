<?php
    session_start();
    session_regenerate_id();

    include "db_conn.php";

    $conn = dbconn();
    $collection = new MongoCollection($conn, 'users');

    function authUser($username,$password){
        $where=array( '$and' => array( array('username' =>$username), array('password'=>$password) ) );
        $cursor = $collection->find($where);

        if(($cursor->count()) > 0){
            return "success";
        }else{
            return "failed";
        }
    }

    function userType (){
        if (isset($_SESSION["userID"])){
            $username = $_SESSION["userID"];
            $where=array( '$and'=>array( array('username'=>$username)));
            try{
                $cursor=$collection->find($where);
                return "test";
            }catch(MongoException $e){
                error_log("\n UserType Query Error".$e."\n", 3, "../log-errors.log");
            }

        }
    }

?>