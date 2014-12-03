<?php
    // include "db_conn.php";

    $vconn = dbconn();
    $vcollection = new MongoCollection($vconn, 'rfps');

    function getVendorResponsesCursor () {
        global $vcollection;
        $where=array("contact"=> $_SESSION["username"]);
        $cursor=$vcollection->find(array("contact"=> $where));
        return $cursor;
    }



    function getSingleRfp($RfpNum){
        global $vcollection;

        if(isset($RfpNum)){

            //$RfpNum = $_POST["RfpNum"];


            $where = array("RfpNum"=>$RfpNum);
            $rfp_cursor = $vcollection->find($where);

            //Get first result
            $rfp = $rfp_cursor->getNext();

            //Get readable format for booleans
            $hq = ($rfp["hqAudio"]==true ? "Yes" : "No");
            $stadium = ( $rfp["stadium"]==true ? "Yes" : "No");
        }
    }

    function put_Rfp_In_Array($rfp_cursor){
        $allRfps = [];
        foreach($rfp_cursor as $rfp){
            $allRfps[] = $rfp;
        }
        return $allRfps;
    }

    function submit_Rfp($rfp_array){
        global $vcollection;

        $rfp = $vcollection->find(array("RfpNum"=>$RfpNum));

        $sumDesc =  $rfp_array["sumDesc"];
        $cost =     $rfp_array["propCost"];
        $title =    $rfp_array["propTitle"];

        //Put all vendor partners in an array
        $vPartners = [];
        foreach($rfp_array as $key => $val){
            if(strpos($key, "vP") !== false){
                if($val != ( "" || null ) ){

                    array_push($vPartners, $val);
                }
            }
        }

        //Le Response
        $Vresponse = array(
            //"responseN"=> will db insert?
            "Rfpnum"=>$rfp_array["RfpNum"],
            "title"=>$title,
            "userID"=>$_SESSION["userID"],
            "desc"=>$sumDesc,
            "vendorPartners"=>$vPartners,
            "filePath"=>"/pdf/Stuff.pdf",
            "cost"=>$cost
            );

        $db = Database::getDB();
        $response_vcollection = new MongovCollection($vconn, 'rfps');
        $response_vcollection->insert($Vresponse);

    }


?>