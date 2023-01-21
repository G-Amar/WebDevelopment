<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP MySQL</title>
  <style>
    table{
      border: 1px solid black;
      font-family: Century Gothic;
      border-radius:10px; 
      text-align:center;
      font-size: 1.5em;
    }
    th{
      background-color:beige;
    }
    td{
      background-color:yellow;
      border: 1px solid purple;
      border-radius:10px; 
    }
  </style>
</head>
<body>
  <?php
  $hostname = "";
  $username = "";
  $password = "";
  $database = "";
  
  // create a connection
  $connect = mysqli_connect($hostname, $username, $password, $database);

  // Check connection
  if($connect){
    //print "Connection to Database Established Successfully<br><br>";
  }else{
    print "Connection to Database Failed <br>";
    exit();
  }

  $sql = "SELECT * FROM photograph ORDER BY date_taken DESC";
  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<th>Picture #</th>";
    echo "<th>Subject</th>";
    echo "<th>Location</th>";
    echo "<th>Date Taken</th>";
    echo "<th>Picture URL</th>";
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>".$row[picture_number]."</td>";
      echo "<td>".$row[subject]."</td>";
      echo "<td>".$row[location]."</td>";
      echo "<td>".$row[date_taken]."</td>";
      echo "<td>".$row[picture_url]."</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "No entries in the table.";
  }

  mysqli_close($connect);
  ?>

</body>
</html>
