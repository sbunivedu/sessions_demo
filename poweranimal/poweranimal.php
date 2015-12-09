<?php
session_start();
$image_names = ['bird', 'cow', 'dog', 'frog', 'panda', 'penguine'];
//randomly pick an animal name
$image_name = $image_names[rand(0, count($image_names)-1)];
$image_url = 'images/'.$image_name.'.png';
$count = 0;

//for debugging
print_r($_SESSION);

//the client is already in a session
if (isset($_SESSION['image_name'])){
  $image_url = $_SESSION['image_name'];
  //read and increment visit count
  $count=$_SESSION['count']+1;
  $_SESSION['count'] = $count;
}else{
  //start this client in a session
  $_SESSION['image_name'] = $image_url;
  //initialize visit count
  $count = 1;
  $_SESSION['count'] = $count;
}
?>

<div>
<img src="<?=$image_url?>"/>
</div>
<div>
  You have visited this page <?=$count?> time<?=($count>1? 's' : '')?>.
</div>
  