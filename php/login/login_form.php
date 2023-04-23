<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mall</title>
  <link rel="stylesheet" href="../../css/header.css">
  <link rel="stylesheet" href="../../css/login.css">
</head>
<body>
  <section>
    <?php include "../header.php" ?>
    <div class="login_container">
      <form class="login_box" name="login_form" method="POST" action="./login_server.php">
        <h2>로그인</h2>
        <div class="form">
          <div class="col1">ID</div>
          <div class="col2">
            <?php
              if(isset($_GET["id"])){
                $id = $_GET["id"];
                echo "<input type='text' placeholder='아이디' name='id' value={$id}>";
              }else{
                echo "<input type='text' placeholder='아이디' name='id'>";
              }
            ?>
          </div>
        </div>

        <div class="form">
          <div class="col1">PW</div>
          <div class="col2">
          <input type='password' placeholder='비밀번호' name='pass'>
          </div>
        </div>
        <div class="button">
          <input type="button" onclick="" value="LOGIN">
        </div>  
        <a href="../register/register_form.php">회원이 아니신가요?</a>
      </form> 
    </div>
  </section>
</body>
</html>