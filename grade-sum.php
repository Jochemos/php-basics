<!DOCTYPE html>
<html>
<head>
<style>
html {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.5rem;
}
form {
  display: flex;
  flex-direction: column;
  align-items: center;
}
form input {
  text-align: center;
  width: 15vw;
  height: 3vw;
}
</style>
</head>
<body>

<h2>average grade:</h2>

<form action="index.php" method="get">
    <input type="text" name="num" id="">
    <input type="submit" value="OK">
</form>
<br>


<?php
  if(isset($_GET['num']) and !empty($_GET['num'])){
    $values = $_GET['num'];
    $valArr = explode(",", $values);

    $sum = 0;
    $i = 0;

    if(is_array($valArr)){
      foreach($valArr as $item){
        if(is_numeric($item) and $item >= 1 and $item <= 6){
          $sum += $item;
          $i++;
        }
      }
    }
    if($i > 0){
      echo "Result is: " . round($sum / $i, 2);
    }else{
      echo "Lack of grades...";
    }

  }else{
    echo "Insert values, please !";
  }
?>

</body>
</html>
