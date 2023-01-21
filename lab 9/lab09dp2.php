<?php
$hostname = "localhost";
$username = "a44gupta";
$password = "JeadifEl";
$database = "a44gupta";

// create a connection
$connect = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if($connect){
  //print "Connection to Database Established Successfully<br><br>";
}else{
  print "Connection to Database Failed <br>";
  exit();
}

$loc = $_POST['location'];
$start = $_POST['start'];
$end = $_POST['end'];

//echo "$loc<br>$start<br>$end<br>";

$sql = "SELECT * FROM photograph WHERE location = '$loc' AND date_taken >= '$start' AND date_taken <= '$end'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<div align='center' style='float:left;text-align:center;margin:5px 13px 15px 13px;width:45%;font-family:sans-serif;'>";
    echo "<figure>";
    echo "<img src=" . $row[picture_url] . " alt=" . $row[subject] . " style='border: 1px solid black;border-radius: 20px;width:100%;height: auto;'>";
    echo "<figcaption>" . $row[subject] . " in " . $row[location] . "</figcaption>";
    echo "</figure>";
    echo "</div>";
  }
} else {
  echo "No pictures in database match.";
}

mysqli_close($connect);

?>