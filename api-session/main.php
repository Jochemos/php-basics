<?php

  session_start();

  if(isset($_POST['login']) and isset($_POST['pass'])){

    $_SESSION['user'] = $_POST['login'];

  }

?>

<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" href="styles.css"> </head>

<body>

<?php
if(!isset($_SESSION['user'])) {
?>

  <h3>Login session:</h3>

  <div>
    <form action="main.php" method="post">
        <p>Login:</p>
        <input type="text" name="login" id="">
        <p>Password:</p>
        <input type="password" name="pass" id="">
        <input type="submit" value="Login">
    </form>

  </div>

<?php
}

if(isset($_SESSION['user'])){
  echo "Welcome " . $_SESSION['user'] . " !";
  echo '<br><br><a href="logout.php">LOGOUT</a>';
}else{
  echo '<h4>Member is not logged</h4>';
}

?>

</body>
</html>
