<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP MySQL Ontario Pics</title>
  <style>
    figure{
      font-family:sans-serif;
    }
    img{
      border: 1px solid black;
      border-radius: 20px;
      width:100%;
      height: auto;
    }
    .picture{
      float:left;
      text-align:center;
      margin:5px 13px 15px 13px;
      width:45%;
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

  $sql = "SELECT * FROM photograph WHERE location = \"Ontario\"";
  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<div class='picture' align='center'>";
      echo "<figure>";
      echo "<img src=" . $row[picture_url] . " alt=" . $row[subject] . ">";
      echo "<figcaption>" . $row[subject] . " in " . $row[location] . "</figcaption>";
      echo "</figure>";
      echo "</div>";
    }
  } else {
    echo "No pictures in Ontario.";
  }

  mysqli_close($connect);
  ?>

</body>
</html>
