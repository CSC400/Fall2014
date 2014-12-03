<?php
    session_start();
    session_regenerate_id();

    include "functions.php";

    //Francisco_Betancourt  2legit2quit
    // $result = authUser("Francisco_Betancourt","2legit2quit");
    // var_dump($result);

    // echo "\n";
    // echo $_SESSION["username"];

    // echo "\n";

    // $info = userType();
    // var_dump($info);

    // echo "\n";
    authUser("Francisco_Betancourt","2legit2quit");
    setUserType();
    echo $_SESSION["username"];
    echo $_SESSION["type"];

    // $action = "pretend";
    // var_dump(getVendorResponsesCursor("Francisco_Betancourt"));

    // $where=array( '$and' => array( array('username' =>"Francisco_Betancourt"), array('password'=>"2legit2quit") ) );
    // $cursor = $collection->find($where);
    // echo $cursor->count();



?>






