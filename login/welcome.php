<?php
session_start();
if (isset($_SESSION['user'])){
?>
  <div>
    Welcome <?=$_SESSION['user']?>!
  </div>
  <a href='logout.php'>logout</a>
<?php
}else{
  header('Location: login.php');
}
?>