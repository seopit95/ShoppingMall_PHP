<?php
  function create_table($con, $table_name){
    $flag = false;
    $sql = "show tables from malldb";
    $result_set = mysqli_query($con, $sql) or die("show tables FAIL".mysqli_error($result_set));

    while($row = mysqli_fetch_array($result_set)){
      if($row[0] == $table_name){
        $flag = true;
        break;
      }
    }

    if($flag == false){
      switch($table_name){
        case 'members' :
          $sql = "create table if not exists members(
            num int not null auto_increment,
            id char(15) not null,
            password char(255) not null,
            name char(6) not null,
            phone char(13) not null,
            address char(255) not null,
            email char(80) not null,
            point int,
            grade char(5),
            regist_day char(30),
            constraint pk_members_num primary key(num)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
          break;
        default :
          echo "<script>alert('Can't find tables')</script>";
          break;
      }

      $result_set = mysqli_query($con, $sql) or die("create table FAIL".mysqli_error($result_set));
      if($result_set == true){
        echo "<script>alert('{$table_name} table creation SUCCESS.')</script>";
      }else{
        echo "<script>alert('{$table_name} table creation FAILED.')</script>";
      }
    }
  }
?>