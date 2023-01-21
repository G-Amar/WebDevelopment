<?php
$x = $_POST['num1'];
$y = $_POST['num2'];

if(($x<3 || $x>12) || ($y<3 || $y>12)){
  echo "<h2 style=\"color:red; font-family:sans-serif;\">";
  echo "The numbers must be between 3 and 12 inclusive, Resubmit form with valid values!</h2>";
  echo "<a href=\"https://www.cs.ryerson.ca/~a44gupta/lab08.php\">Go Back</a>";
}
else{
  echo "<table style=\"border: 3px solid red;font-family:Century Gothic;border-radius:10px; text-align:center;\">";
  for($i = 1; $i <= $x; $i++){
    echo "<tr>";
    for($j = 1; $j <= $y; $j++){
      $prod = $i*$j;
      echo "<td style=\"border: 1px solid blue; background-color:yellow; font-size:2em;spacing:3px; padding:3px;border-radius:10px;\">$prod</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}
?>