<?php
include 'connect.php';

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
	  <div class="form-check mb-3">
	    <label class="form-check-label">
	      <input class="form-check-input" type="checkbox" name="remember"> Remember me
	    </label>
	  </div>
	  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>




<div class="container mt-3">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Email id</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

    	<?php 
           foreach($dataAarray as $val){
    	?>
      <tr>
        <td><?php echo $val['sno']?></td>
        <td><?php echo $val['email']?></td>
        <td><?php echo $val['password']?></td>
        <td> <a href="update.php?ids=<?php echo $val['sno'];?>"><button type="button" class="btn btn-primary btn-sm">Update</button></a></td>
        <td> <a href="connect.php?id=<?php echo $val['sno'];?>"><button class="btn btn-danger btn-sm" >Delete</button></a></td>
      </tr>
     
<?php  } ?>

    </tbody>
  </table>
</div>


	
</div>
</body>
</html>



