<?php
	include "../classes/db_conn.php";

	$conn = dbconn();
	$collection = new MongoCollection($conn, 'rfps');

	$contact = $_POST['firstName']." ".$_POST['lastName'];
	$email = $_POST['emailAddress'];
	$phone = $_POST['phoneNumber'];
	$address = $_POST['streetAddress'].", ".$_POST['city'];
	$rooms = $_POST['numberClassrooms'];
	$seats = $_POST['numberSeats'];
	$height = $_POST['height'];
	$width = $_POST['width'];
	$length = $_POST['length'];
	$style = $_POST['classroomStyle'];
	$podium = $_POST['instructorPodium'];
	$projection = $_POST['projectionSystem'];
	$media = $_POST['mediaSystem'];
	$audio = $_POST['highQualityAudio'];
	$maxbudget = $_POST['maxBudget'];
	$compdate = $_POST['compDate'];
	$summary = $_POST['summary'];

	// var_dump($contact);

	$infoArray = array('contact'=>$contact, 'rfpnum'=>25552, 'email'=>$email, 'phone'=>$phone, 'address'=>$address, 'purpose'=>$style, 'projection'=>$projection, 'multimedia'=>$media, 'audio'=>$audio, 'classnum'=>$rooms, 'seats'=>$seats, 'height'=>$height, 'width'=>$width, 'length'=>$length, 'stadium'=>$podium, 'budget'=>$maxbudget, 'compdate'=>$compdate, 'summary'=>$summary);
	var_dump($infoArray);

	echo "\n This is the value stored in in style: ";
	var_dump($style);
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
