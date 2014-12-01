<?php
	include "../classes/db_conn.php";
	
	#function submitRFP(){
		$conn = dbconn();
		$collection = new MongoCollection($conn, 'rfps');
	
		$contact = $_POST['firstName']+ " " + $_POST['lastName'];
		$email = $_POST['emailAddress'];
		$phone = $_POST['phoneNumber'];
		$address = $_POST['streetAddress'];
		$city = $_POST['city'];
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
		
		
		try{
			$collection->insert (array('Contact'=>$contact, 'RFP#'=>25552, 'Purpose'=>$style, 'Projection'=>$projection,
										'Number of Rooms'=>$rooms, 'Stadium'=>$podium, 'Budget in $'=>$maxbudget, 'Completion Date'=>$compdate));
		} 
		catch(MongoException $e){
			error_log($e."\n", 3, "../log-errors.log");
		}
	#}
	
?>
