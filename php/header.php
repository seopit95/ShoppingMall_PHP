<?php
  session_start();
  $userid = $username = $userpoint = $usergrader = "";

  if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
  }else{
    $userid = "";
  }

  if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
  }else{
    $username = "";
  }

  if(isset($_SESSION['userpoint'])){
    $userpoint = $_SESSION['userpoint'];
  }else{
    $userpoint = "";
  }

  if(isset($_SESSION['usergrade'])){
    $usergrade = $_SESSION['usergrade'];
  }else{
    $usergrade = "";
  }
?>
<div class="header_container">
  <div class="top">
    <div class="brand">
      <h1>
        <a href="http://<?=$_SERVER['HTTP_HOST'];?>/mall/php/index.php">MALL</a>
      </h1>
    </div>

    <ul class="log_container">
      <div class="log">
        <?php
          if(!$userid){
        ?>
        <li>
          <a href="http://<?=$_SERVER['HTTP_HOST'];?>/mall/php/login/login_form.php">LOGIN</a>
        </li>
        <li>&nbsp;</li>
        <li>
          <a href="http://<?=$_SERVER['HTTP_HOST'];?>/mall/php/register/register_form.php">JOIN</a>
        </li>
        <?php
          }else{
            $log_info = $userid."(".$usename.")님 환영합니다.<br>";
            $log_info .= "등급: {$usergrade} / 포인트: {$userpoint}";
        ?>
        <li><?=$log_info?></li>
        <?php 
          }
        ?>
      </div>
    </ul>
  </div>
  <div class="menu_container">
    <h2>CATEGORY</h2>
    <ul class="menu">
      <li><a href="">Out</a></li>
      <li><a href="">Top</a></li>
      <li><a href="">Bottom</a></li>
      <li><a href="">Shoes</a></li>
    </ul>
  </div>
</div>