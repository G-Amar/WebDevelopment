<!DOCTYPE html>
<!--
  Can reach this page using:
  https://www.cs.ryerson.ca/~a44gupta/lab08.php
-->

<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
  <style>
    body{
      font-family:sans-serif;
    }
    img{
      height:300px;
      width:400px;
    }

  </style>
</head>
<body>
  <h2> Greetings </h2>
  <?php
  //cookies get set for next visit, by next visit user will have visited twice
  if(isset($_COOKIE['hit']))
      setcookie("hit",$_COOKIE['hit'] + 1);
  else
      setcookie("hit",2);

  $time = date("G");
  if($time >= 6 && $time<12){
    $tod = 'morning';
    $color = "cyan";
  }
  elseif ($time >= 12 && $time<18){
    $tod = 'afternoon';
    $color = "red";
  }
  elseif ($time >= 18 && $time<21){
    $tod = 'evening';
    $color = "yellow";
  }
  else{
    $tod = 'night';
    $color = "white";
  }

  echo "<div style=\"background-image:url($tod.jpg);background-size:cover;height:300px;width:400px;\">";
  echo "<span style=\"position:relative;color:$color;top:130px;left:40px;font-size:3em;\">Good $tod</span>";
  echo "</div>";

  $num = $_GET["image"];
  switch($num){
    case '1':
      $img = "moonwitch.gif";
      $name = "Image is moonwitch.gif";
      break;
    case '2':
      $img = "orangewitch.gif";
      $name = "Image is orangewitch.gif";
      break;
    case '3':
      $img = "skeldance.gif";
      $name = "Image is skeldance.gif";
      break;
    default:
      $img = "Invalid_value_for_Query_String_(?image=[1_2_or_3])";
      $name = "";
  }
  echo "<figure style=\"position:absolute; text-align:center; top:10px; right:10px; opacity:0.5;\">";
  echo "<img src=$img alt=$img>";
  echo "<figcaption>$name</figcaption>";
  echo "</figure>";


  if(isset($_COOKIE['hit']))
      echo "<p style=\"text-align:right;position:fixed; bottom:0px; right:10px; color:maroon\"> Hit Counter: " . $_COOKIE["hit"] . "</p>";
  else
      echo "<p style=\"text-align:right;position:fixed; bottom:0px; right:10px; color:maroon\"> Hit Counter: 1</p>";
  
  ?>
  <br>
  <h2>Multiplication Table</h2>
  <form target="_blank" action="https://www.cs.ryerson.ca/~a44gupta/lab08b.php" method="post">
    First Number: <input type="number" name="num1"><br>
    Second Number: <input type="number" name="num2"><br><br>
    <input type="submit">
  </form>
  
</body>
</html>
