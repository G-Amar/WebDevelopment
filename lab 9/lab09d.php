<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP MySQL Form</title>
  <style>
    body{
      font-family:sans-serif;
    }
  </style>
</head>
<body>
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

  $sql = "SELECT * FROM photograph ORDER BY date_taken ASC";
  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $places[$row[location]] = null; 
      $dates[$row[date_taken]] = null; 
    }
    echo "<h3>Pick a location and Start Date and End Date to filter images</h3>";

    echo "<form action='https://webdev.scs.ryerson.ca/~a44gupta/lab09dp2.php' method='post'>";
    echo "<span>Location: </span>";
    echo "<select name='location'>";
    foreach($places as $loc => $useless){
      echo "<option value=\"$loc\">$loc</option>";
    }
    echo "</select><br><br>";
    
    echo "<span>Start Date: </span>";
    echo "<select name='start'>";
    foreach($dates as $date => $useless){
      echo "<option value='$date'>$date</option>";
    }
    echo "</select><br><br>";

    echo "<span>End Date: </span>";
    echo "<select name='end'>";
    foreach($dates as $date => $useless){
      echo "<option value='$date'>$date</option>";
    }
    echo "</select><br><br>";

    echo "<input type='submit' name='submit' value='Submit Form'>";
    echo "</form>";

  } else {
    echo "No pictures in database.";
  }

  mysqli_close($connect);
  ?>

</body>
</html>
