<?php
    include "db_conn.php";

    function authUser($username,$password){
        $conn = dbconn();
        $collection = new MongoCollection($conn, 'users');
        $where=array( '$and' => array( array('username' =>$username), array('password'=>$password) ) );
        $cursor = $collection->find($where);

        if(($cursor->count()) > 0){
            return "success";
        }else{
            return "failed";
        }
    }

?>