<?php
include('common/config.php'); 

function getAllUsers(){
	global $conn;
	$query = mysqli_query($conn, "SELECT count(*)  as total FROM client");
	$row = mysqli_fetch_assoc($query);
	$count = $row['total'];
	echo $count;
}


function getAllInterpreter(){
	global $conn;
	$query = mysqli_query($conn, "SELECT count(*)  as total FROM interpreter");
	$row = mysqli_fetch_assoc($query);
	$count = $row['total'];
	echo $count;
}


function getAllJobs(){
	global $conn;
	$query = mysqli_query($conn, "SELECT count(*)  as total FROM jobs");
	$row = mysqli_fetch_assoc($query);
	$count = $row['total'];
	echo $count;
}


function getCompletedJobs(){
	global $conn;
	$query = mysqli_query($conn, "SELECT count(*)  as total FROM jobs where job_status = 'completed'");
	$row = mysqli_fetch_assoc($query);
	$count = $row['total'];
	echo $count;
}


?>