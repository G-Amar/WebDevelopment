<?php
$hostname = "";
$username = "";
$password = "";
$database = "";
 
// create a connection
$connect = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if($connect){
  print "Connection to Database Established Successfully<br><br>";
}else{
  print "Connection to Database Failed <br>";
  exit();
}
//remove the entries if they exist
$sql = "DELETE FROM photograph WHERE picture_number>= 1 AND picture_number<=10;";
$sql .= "INSERT INTO photograph
        VALUES (1, \"Banff\", \"Alberta\",\"2022-06-01\", \"pictures/banff.jpg\"); ";
$sql .= "INSERT INTO photograph
        VALUES (2, \"Bird\", \"Alberta\",\"2022-06-10\", \"pictures/bird.jpg\"); ";
$sql .= "INSERT INTO photograph
         VALUES (3, \"Niagara Falls\", \"Ontario\",\"2022-09-04\", \"pictures/niagara.jpg\"); ";
$sql .= "INSERT INTO photograph
         VALUES (4, \"Toronto\", \"Ontario\",\"2022-07-12\", \"pictures/toronto.jpg\"); ";
$sql .= "INSERT INTO photograph
         VALUES (5, \"Vessel\", \"New York\",\"2022-08-12\", \"pictures/vessel.jpg\"); ";
$sql .= "INSERT INTO photograph
         VALUES (6, \"Cherry Blossoms\", \"Ontario\",\"2022-05-10\", \"pictures/cherryblossom.jpg\"); ";
$sql .= "INSERT INTO photograph
         VALUES (7, \"Niagara Night\", \"Ontario\",\"2022-01-12\", \"pictures/nightfalls.jpg\"); ";
$sql .= "INSERT INTO photograph
         VALUES (8, \"Snow mountain\", \"Alberta\",\"2022-06-02\", \"pictures/snow.jpg\"); ";
$sql .= "INSERT INTO photograph
         VALUES (9, \"Bear\", \"Alberta\",\"2022-05-28\", \"pictures/bear.jpg\"); ";
$sql .= "INSERT INTO photograph
         VALUES (10, \"Sunset\", \"Alberta\",\"2022-06-04\", \"pictures/sunset.jpg\"); ";


if (mysqli_multi_query($connect, $sql)) {
  echo "The 10 Pictures have been added.<br>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);
?>
