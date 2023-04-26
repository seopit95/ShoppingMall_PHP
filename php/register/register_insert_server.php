<?php
  include_once('../../db/db_connect.php');

  $id = $password1 = $password2 = $name = $phone1 = $phone2 = $phone3 = $address1 = $address2 = $address3 = $email1 = $email2 = "";

  if(isset($_POST["id"]) && isset($_POST["password1"]) && isset($_POST["password2"]) && isset($_POST["name"]) && isset($_POST["phone1"]) && isset($_POST["phone2"]) && isset($_POST["phone3"]) && isset($_POST["adrress1"]) && isset($_POST["adrress2"]) && isset($_POST["adrress3"]) && isset($_POST["email1"]) && isset($_POST["email2"])){
    $id = mysqli_real_escape_string($con, $_POST["id"]);
    $password1 = mysqli_real_escape_string($con, $_POST["password1"]);
    $password2 = mysqli_real_escape_string($con, $_POST["password2"]);
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $phone1 = mysqli_real_escape_string($con, $_POST["phone1"]);
    $phone2 = mysqli_real_escape_string($con, $_POST["phone2"]);
    $phone3 = mysqli_real_escape_string($con, $_POST["phone3"]);
    $address1 = mysqli_real_escape_string($con, $_POST["address1"]);
    $address2 = mysqli_real_escape_string($con, $_POST["address2"]);
    $address3 = mysqli_real_escape_string($con, $_POST["address3"]);
    $email1 = mysqli_real_escape_string($con, $_POST["email1"]);
    $email2 = mysqli_real_escape_string($con, $_POST["email2"]);

    $phone = $phone1."-".$phone2."-".$phone3;
    $email = $email1."@".$email2;
    $address = "(".$address1.")".$address2.",".$address3;
    $register_day = date("Y-m-d (H:i:s)");

    $user_info = "id={$id}&password1={$password1}&password2={$password2}&name={$name}&phone1={$phone1}&phone2={$phone2}&phone3={$phone3}&address1={$address1}&address2={$address2}&address3={$address3}&email1={$email1}&email2={$email2}";

    if(empty($id)){
      header("location: register_form.php?error=$user_info");
      exit;
    }else if(empty($password1)){
      header("location: register_form.php?error=$user_info");
      exit;
    }else if(empty($password2)){
      header("location: register_form.php?error=$user_info");
      exit;
    }else if(empty($name)){
      header("location: register_form.php?error=$user_info");
      exit;
    }else if(empty($phone1)){
      header("location: register_form.php?error=$user_info");
      exit;
    }else if(empty($phone2)){
      header("location: register_form.php?error=$user_info");
      exit;
    }else if(empty($phone3)){
      header("location: register_form.php?error=$user_info");
      exit;
    }else if(empty($address1)){
      header("location: register_form.php?error=$user_info");
      exit;
    }else if(empty($adrress2)){
      header("location: register_form.php?error=$user_info");
      exit;
    }else if(empty($address3)){
      header("location: register_form.php?error=$user_info");
      exit;
    }else if(empty($email1)){
      header("location: register_form.php?error=$user_info");
      exit;
    }else if(empty($email2)){
      header("location: register_form.php?error=$user_info");
      exit;
    }else{
      $password1 = password_hash($password1, PASSWORD_DEFAULT);

      $sql = "select * from members where id = '$id'";
      $result_set = mysqli_query($con, $sql);

      if(mysqli_num_rows($result_set) > 0){
        header("location: register_form.php?error=이미 사용중인 아이디입니다.");
        exit;
      }else{
        $sql = "insert into members values ('$id', '$password', '$name', '$phone', '$address', '$email', 1000, '브론즈', '$regist_day');";
        $result_set = mysqli_query($con, $sql);
        mysqli_close($con);

        if($result_set){
          header("locaiton: ../login/login_form.php");
          exit;
        }else{
          alert('회원가입에 실패하였습니다');
          exit;
        }
      }
    }
  }else{
    header("location: register_form.php?error=정확한 정보를 입력해주세요.&$user_info");
    exit;
  }
?>