<?php

$connect = mysqli_connect('localhost','root');
mysqli_select_db($connect,'mydb');


// for insert new records

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$insert = "INSERT INTO `table1`(`sno`, `email`, `password`) VALUES ('','$email','$password')";

	$query = mysqli_query($connect,$insert);

	if($insert)
	{
		 echo "<script>alert('success');</script>";
	}
	
}

//for show data in table 

$show = "SELECT * FROM `table1`";
$query = mysqli_query($connect,$show);
$dataAarray = [];
	while ($res = mysqli_fetch_array($query)) {	
	$dataAarray[] = $res;	
	}


// for delete query

if(isset($_REQUEST['id'])){
$getid = $_GET['id'];
$delete = "DELETE FROM `table1` WHERE sno = $getid";
$query = mysqli_query($connect, $delete);

if($delete)
{
	echo "<script>alert('success deleted');</script>";
    header("location:index.php");

}
	


   }



 

?>

