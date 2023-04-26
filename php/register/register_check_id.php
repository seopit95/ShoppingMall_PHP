<?php
  include_once('../../db/db_connect.php');

  $message = $id = "";
  $id = $_GET["id"];

  if(isset($_GET["id"])){
    $id = mysqli_real_escape_string($con, $_GET["id"]);

    if(empty($id)){
      header("location: register_form.php?error=아이디를 입력해주세요");
      exit;
    }else{
      $sql = "select * from members where id = '$id'";
      $result_set = mysqli_query($con, $sql);

      if(mysqli_num_rows($result_set) == 1){
        header("location: register_form.php?error=이미 사용중인 아이디입니다.");
        exit;
      }else{
        header("location: register_form.php?success='{$id}'는 사용 가능한 아이디입니다.");
        exit;
      }
      mysqli_close($con);
    }
  }
?>