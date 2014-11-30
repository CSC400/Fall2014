<?php
class User{
	 include('Database.php');
	private static $userID, $userpwd;

	public function __construct(){}

	// public function __construct($user, $pwd){
	// 	return "success1";
	// 	self::login($user, $pwd);
	// 	return "success2";
	// }



	public function getUser(){
		return self::$user;
	}


	public function login($user, $password){


		//Obtain mongo db handler
		try{
			$dbh = getDB();
			//return "successfully connect to the database";
			$userCollection = $dbh->selectDb("users");
			return "successfully collected documents in the database";
		}catch(Exception $e){
			return "Attempt to connect failed";
		}

		//Pull Users Information from database
		//$userCollection = $dbh->selectDb("users");

		//$userCollection->users->find();
	}


	private function initializeUser($userInfo){
		self::$userID = $userInfo["userID"];
		self::$contactName = $userInfo["contactName"];
		self::$email = $userInfo["email"];

	}

	//Session related stuff
	public static function getID(){
		return self::$userID;
	}

	public static function isLoggedIn(){
		return self::$loggedIn;
	}

	//Account related stuff
	public static function getContactName(){
		return self::$contactName;
	}
	public static function getEmail(){
		return self::$email;
	}



	private function setUser($user, $password){
		self::$user = $user;
		self::$pwd = $password;
	}

}