<?php

  if(isset($_POST['val'])) {
    setcookie('val', $_POST['val'], time() + 3600);
  }

?>

<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" href="styles.css"> </head>
<body>

<h2>Cookies:</h2>

<div>
  <form action="cookies.php" method="post">
      <h4>Insert value, which you want to remember</h4>
      <input type="text" name="val" id="">
      <input type="submit" value="Enter value">
  </form>
</div>

<div>
  <h5>

    <?php
      if(isset($_COOKIE['val'])){

        $delete = '<a href="delete-cookies.php"> click </a>';

        echo "save the cookie is: " . '<br><br>';
        echo $_COOKIE['val'] . '<br><br>';
        echo "If you want delete this" . $delete;

      }else{
        echo '<h3>emptied</h3> <p>(you must reload page after insert)</p>';
      }
    ?>

  </h5>
</div>

</body>
</html>
