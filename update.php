<?php
include 'connect.php';

if(isset($_POST['update'])){


 	$ids = $_GET['ids'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$updates = "UPDATE `table1` SET sno= $ids, email='$email', password='$password' where sno= $ids";
	

	$query = mysqli_query($connect,$updates);
	header("location:index.php");
}

?>



<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<h1> form submit</h1>
<div class="container">
	<form action="" method="POST">
	  <div class="mb-3 mt-3">
	    <label for="email" class="form-label">Email:</label>
	    <input type="email" class="form-control" placeholder="Enter email" name="email">
	  </div>
	  <div class="mb-3">
	    <label for="pwd" class="form-label">Password:</label>
	    <input type="password" class="form-control" placeholder="Enter password" name="password">
	  </div>
	  <!-- <input type ="text" value ="<?php echo $_REQUEST['ids']?>"  name ="ourId"> -->
	 
	  <a href="update.php?id=<?php echo $val['sno'];?>"><button type="submit" class="btn btn-primary" name="update">Update</button></a>
	</form>





	
</div>
</body>
</html>



