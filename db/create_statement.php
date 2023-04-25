<?php
  include_once $_SERVER['DOCUMENT_ROOT']."/shoppingmall/db/db_connect.php";
  include_once $_SERVER['DOCUMENT_ROOT']."/shoppingmall/db/create_table.php";

  create_table($con, "members");
?>