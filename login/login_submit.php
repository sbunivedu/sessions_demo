<?php
session_start();
//store user names
$users = Array('user1'=>'green', "user2"=>'yellow');
$name = $_REQUEST['user'];
//print "name:".$name;

//user is already logged in
if (isset($_SESSION['user'])){
  header('Location: welcome.php');
}elseif(isset($name) && key_exists($name, $users)){
  //log in user by remembering the user name
  $_SESSION['user']=$name;
  //redirect to landing page
  header('Location: welcome.php');
}else{
  header('Location: login.php');
}
?>