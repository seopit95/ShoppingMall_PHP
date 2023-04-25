<?php
  $con = mysqli_connect("localhost", "root", "123456") or die("접속실패");

  $database_flag = false;
  $sql = "show databases";
  $result_set = mysqli_query($con, $sql) or die("show databases FAIL".mysqli_error($con));

  while($row = mysqli_fetch_array($result_set)){
    if($row[0] == "malldb"){
      $database_flag = true;
      break;
    }
  }

  if($database_flag == false){
    $sql = "create database if not exists malldb";
    $result_set = mysqli_query($con, $sql) or die("create database FAIL".mysqli_error($con));
    if($result_set == true){
      echo "<script>alert('create database SUCCESS.')</script>";
    }
  }

  $dbcon = mysqli_select_db($con, "malldb") or die("select database FAIL".mysqli_error($con));
  if($dbcon == false){
    echo "<script>alert('database select FAIL')</script> ";
  }

?>