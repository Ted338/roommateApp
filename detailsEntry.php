<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="rmapp";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn){
		die("Connection Failed: " .mysqli_connect_error());
}

if(isset($_POST['save']))
	{
	$student_id=$_POST['student_id'];
	$student_namef=$_POST['student_namef'];
	$student_namel=$_POST['student_namel'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$location_home=$_POST['location_home'];
	$location_campus=$_POST['location_campus'];
	$clean=$_POST['clean'];
	$clean_scale=$_POST['clean_scale'];
	$music_taste=$_POST['music_taste'];
	$music_scale=$_POST['music_scale'];
	$schedule=$_POST['schedule'];
	$schedule_scale=$_POST['schedule_scale'];
	$guests=$_POST['guests'];
	$guests_scale=$_POST['guests_scale'];
	$pets=$_POST['pets'];
	$pets_scale=$_POST['pets_scale'];
	
	
	$sql_query = "INSERT INTO student (student_id, 
									   student_namef, 
									   student_namel, 
									   age, 
									   gender, 
									   location_home, 
									   location_campus, 
									   clean, 
									   clean_scale, 
									   music_taste, 
									   music_scale, 
									   schedule, 
									   schedule_scale, 
									   guests, 
									   guests_scale, 
									   pets, 
									   pets_scale)
			VALUES ('$student_id', 
					'$student_namef', 
					'$student_namel', 
					'$age', 
					'$gender', 
					'$location_home', 
					'$location_campus', 
					'$clean', 
					'$clean_scale', 
					'$music_taste', 
					'$music_scale', 
					'$schedule', 
					'$schedule_scale', 
					'$guests', 
					'$guests_scale', 
					'$pets', 
					'$pets_scale')";
	
	if (mysqli_query($conn, $sql_query))
	{
		echo "New entry submitted";
	}
	else
	{
		echo "Error " .$sql. "" .mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>