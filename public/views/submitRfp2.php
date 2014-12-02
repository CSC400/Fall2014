<?php
	include "../classes/db_conn.php";
	
	$conn = dbconn();
	$collection = new MongoCollection($conn, 'rfps');

	$contact = $_POST['inputFirst']." ".$_POST['inputLast'];
	$email = $_POST['inputEmail'];
	$phone = $_POST['inputPhone'];
	$address = $_POST['inputAddress'].", ".$_POST['inputCity'].", ".$_POST['inputState'].", ".$_POST['inputZipCode'];
	$rooms = $_POST['inputTotalClassrooms'];
	$seats = $_POST['inputTotalSeats'];
	$height = $_POST['inputClassHeight'];
	$width = $_POST['inputClassWidth'];
	$length = $_POST['inputClassLength'];
	$style = $_POST['inputClassroomStyle'];
	$podium = $_POST['inputInstructPodium'];
	$projection = $_POST['inputProjectionSystem'];
	$media = $_POST['inputMultimedia'];
	$audio = $_POST['inputAudioQuality'];
	$maxbudget = $_POST['inputBudget'];
	$compdate = $_POST['inputCompDate'];
	$summary = $_POST['inputSummary'];
	
	// var_dump($contact);
	
	$infoArray = array('contact'=>$contact, 'rfpnum'=>25552, 'email'=>$email, 'phone'=>$phone, 'address'=>$address, 'purpose'=>$style, 'projection'=>$projection, 'multimedia'=>$media, 'audio'=>$audio, 'classnum'=>$rooms, 'seats'=>$seats, 'height'=>$height, 'width'=>$width, 'length'=>$length, 'podium'=>$podium, 'budget'=>$maxbudget, 'compdate'=>$compdate, 'summary'=>$summary);
	var_dump($infoArray);

	echo "\n This is the value stored in in style: "; var_dump($style);
	echo "\n This is the value stored in audio: ";
	var_dump($audio);

	try{
		$collection->insert ($infoArray);
		header("Location: clientLanding.html");
	} 
	catch(MongoException $e){
		error_log($e."\n", 3, "../log-errors.log");
	}
	
?>
