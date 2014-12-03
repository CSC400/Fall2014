<?php
session_start();
session_regenerate_id();
$dbh;

function dbconn(){
    global $dbh;
    try{
        $mongo = new MongoClient("mongodb://devops:csc400@ds039960.mongolab.com:39960/csc400");
        $dbh = $mongo->selectDB('csc400');
        return $dbh;
    }
    catch(MongoException $e){
        error_log($e."\n", 3, "../log-errors.log");
    }
}

// function dbclose(){
//     global $dbh;
//     $dbh=null;
// }


?>