<?php
	$servername = "localhost";
	$username = "root";
	$password = "usbw";
	$dbname = "btmain";
	$port = "3308";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname, $port);
	// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		function data ($date){
			$M = new DateTime($date);
			echo $M->format( 'd' );
			echo " ";
			$M = new DateTime($date);
			$mm =$M->format( 'm' );
			if($mm==1){
				echo "Jan";
			}elseif($mm==2){
				echo "Fev";
			}elseif($mm==3){
				echo "Mar";
			}elseif($mm==4){
				echo "Abr";
			}elseif($mm==5){
				echo "Mai";
			}elseif($mm==6){
				echo "Jun";
			}elseif($mm==7){
				echo "Jul";
			}elseif($mm==8){
				echo "Ago";
			}elseif($mm==9){
				echo "Set";
			}elseif($mm==10){
				echo "Out";
			}elseif($mm==11){
				echo "Nov";
			}elseif($mm==12){
				echo "Dez";
			}
			$M = new DateTime($date);
			echo $M->format( ' y' );
		}
		function pessoa(){
			
		}
?>