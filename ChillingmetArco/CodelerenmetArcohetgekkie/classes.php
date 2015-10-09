<?php
	class Reservation {
	public id;
	public name=;

	public function __construct($id, $name){
	this->id =$id;
	}
	}

	new reservation($id)
	echo $id;


	 // Hier wordt er verbinding gemaakt met de database
	 $servername = "localhost";
	 $username = "root";
	 $password = "usbw";
	 $database = "";
	
	 // Create connection
	 $conn = new mysqli($servername, $username, $password, $database);
	
	 // Check connection
	 if ($conn->connect_error) {
	 	die("Connection failed: " . $conn->connect_error);
	 } 
?>