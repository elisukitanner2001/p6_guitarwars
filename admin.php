<!DOCTYPE html>
<htnlxmlns="http://www.w3.org/1999/xhtml"xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8;">
  <title>Gutiar Wars - High Scores</title>
  <link rel="stylesheet type=text/css" href=p6.css />
<!-- <style>
body{
  background-color: #448865;

}
</style> -->
</head>
<body>
  <h2>Guitar Wars - High Scores</h2>
  <p>Welcome, Guitar Warrior, do you have what it takes to crack the High Score list? If so, just <a href="addscore.php"> add your own score</a>. </p>
    <hr>
    <?php
    require_once('appvars.php');
    require_once('connectvars.php');

    $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    $query = "SELECT*FROM guitarwars ORDER BY score DESC, date ASC";
    $mysqli_query($dbc, $query);

    echo '<table>';
    while($row = mysqli_fetch_array($data)) {

      echo '<tr class ="scorerow"><td><strong>'.$row['name'] .'</strong></td>';
      echo '<td>'.$row['date']. '</td>';
      echo '<td>'.$row['score'].'</td>';
      echo '<td><a href="removescore.php?id='.$row[id].'&amp;date='.$row['date'].'&amp;name='.$row['name'].'&amp;score='.$row['score'].'&am'
    }


    ?>
