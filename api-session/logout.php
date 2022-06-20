<?php

  session_start();
  session_destroy();

?>

<div>
<h4>User did logout !</h4>
<a href="main.php">Return to login page</a>
</div>


<html>
<head>
<style>

html {
  width: 100%;
  height: 100%;
  padding-top: 10%;
  display: flex;
  justify-content: center;
  font-size: 1.5rem;
  text-align: center;
}

a {
  text-decoration: none;
  color: #4d79ff;
}

</style>
</head>
</html>
