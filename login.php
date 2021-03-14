<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <center>
	<h1>Hi There, You can access page after Login.</h1>
    <div class="container">
      <div class="col">

        <form action="login" method="post">
          <label for="user">Enter Username</label><br><br>
          <input type="username" name="username" placeholder="Enter Registered Username" required><br><br>
          <label for="psw">Enter Password</label><br><br>
          <input type="password" name="password" placeholder="Enter Password" required><br><br>
          <input class="btn"type="submit" name="submit" value="Login"><br>
        </form>

      </div>
    </div>

    <div>
  </center>
    </div>

  </body>
</html>
