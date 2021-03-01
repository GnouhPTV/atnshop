<html>
  <head>
    <title> Login </title>
  </head>
  <body>
    <style>
      body {
        background-image: url('background.jpg');
        background-attachment: fixed;
        background-size: 100%100%;
      }
    </style>
    <div>
      <h2 style="color:white;" align="center">Login</h2>
      <form style="color:white;" align="center" method="POST">
        Username:<input type="text" name="userid"> <br>
        Password:&nbsp;<input type="password" name="password"> <br>
        <input type="submit" value="login">
      </form>
    </div>
    <?php
    if(isset($_POST['userid']) && isset($_POST['password']))
    {
      $user = $_POST['userid'];
      $pass= $_POST['password'];
    }
    if($user == "login1" && $pass == "admin"){
      header("location:staff1.php");
    }
    if($user == "login2" && $pass == "admin"){
   header("location:staff2.php");
    }
    if($user == "admin" && $pass == "admin"){
      header("location:boss.php");
    }
    ?>
  </body>
</html>
