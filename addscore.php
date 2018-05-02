<!DOCTYPE html>
<htnl>
<head>
  <meta charset="utf-8">
  <title>Gutiar Wars - Add high Score</title>
  <link rel="stylesheet type=text/css" href=css/p6.css />
</head>
<body>
  <h2>Guitar Wars - Add high Score</h2>
<?php
require_once('appvars.php');
require_once('connectvars.php');

if*(isset($_POST['submit'])){

  $name=$_POST['name'];
  $score=$_POST['score'];
  $screenshot=$_FILES['screenshot']['name'];
  $screenshot_type=$_FILES['screenshot']['type'];
  $screenshot_size=$_FILES['screenshot']['size'];
if(!empty($name)&&!empty($score)&&!empty($screenshot_type)){
  if((($screenshot_type=="image/gif")||($screenshot_type=="image/jpeg")||($screenshot_type=='image/png')&&($screenshot_size >0)&&($screenshot_size<=GW_MAXFIELDSIZE)){
    if($ $_FILES['screenshot']['error']==0){
      $target = GW_UPLOADPATH.$screenshot;
      if(move_uploaded_files($_FILES['screenshot']['tmp'].$target)){
        $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

        $query="INSERT INTO guitarwars VALUES (0,NOW(),'$name','$score', '$screenshot')";
        mysqli_query($dbc,$query);

        echo'<p>Thanks for adding your new high score! It will be reviewed and addes to the high score list as soon as possible</p>';
        echo'<p><strong>Name:</strong>'.$name.'<br>';
        echo
      }
    }

  })

}
}



?>
