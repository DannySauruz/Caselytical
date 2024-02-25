<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


?>


<!DOCTYPE html>
<html>
<head>
 <title>PROFILE</title>
 <link rel="stylesheet" type="text/css" href="css/loginNregister.css">
</head>
<body>
      <h1> Hello, <?php echo $_SESSION['name']; ?></h1>
	  <nav class="ProfileLogged-nav">  
	    <a href="change-password.php">Change Password</a>
	    <a href="Logout.php">Logout</a>
	    <a href="indexLogged.php">Main Page</a>
	    <br>
	    
	    <!--
	    <form action="insert_product.php" method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea><br>

    <label for="price">Price:</label>
    <input type="text" id="price" name="price"><br>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image"><br>

    <input type="submit" value="Submit">
</form>    
      -->
	  </nav>
	
</body>
</html>

<?php
}else{
	header("Location: Logout.php");
	exit();
}
 ?>