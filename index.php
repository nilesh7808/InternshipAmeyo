<!DOCTYPE html>
<html lang="en">
<head>
	<title>home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="index.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" id="nav_bg">
  <div class="container-fluid">
    
    <img id="imgs" src="ameyoimage.png">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" id="home" aria-current="page" href="index.html">Home</a>
        </li>

        <?php
        	session_start();
        	if($_SESSION['loggedin'] == true)
        	{

        		<li class="nav-item">
	          		<a class="nav-link active" style="color: white; font-family: sans-serif, monospace; font-weight: 400; display: block;font-size: 20px;">"Welcome,".' ".$fname." '</a>
	        	</li>

	        	<li class="nav-item" id="reg">
	          		<a class="nav-link active" href="logout.php" style="color: white; font-family: sans-serif, monospace; display: block;font-size: 20px;">logout</a>
	        	</li>

	        }

        	else
        	{
	         	<li class="nav-item">
	          		<a class="nav-link active" href="login.php" style="color: white; font-family: sans-serif, monospace; font-weight: 400; display: block;font-size: 20px;">Login</a>
	        	</li>

		        <li class="nav-item" id="reg">
		          <a class="nav-link active" href="signup.html" style="color: white; font-family: sans-serif, monospace; display: block;font-size: 20px;">New User?</a>
		        </li>
		    }

        ?>

       
      </ul>
      
    </div>
  </div>
</nav>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>