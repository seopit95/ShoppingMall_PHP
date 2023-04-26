<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mall</title>
  <link rel="stylesheet" href="../../css/header.css">
  <link rel="stylesheet" href="../../css/register.css">
  <script src="../../js/register.js"></script>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <section>
    <?php include '../header.php' ?>
    <div class="register_container">
      <form action="../login/login_form.php" name="register_form" method="POST">
        <h2>회원가입</h2>
        <div class="form">
          <div class="col1">아이디<font color="red">*</font></div>
          <div class="col2"><input type="text" placeholder='아이디' name="id" id="id">    </div><span><input type="button" value="중복확인" id="idcheck"></span>
        </div>
        <div class="form">
          <div class="col1">비밀번호<font color="red">*</font></div>
          <div class="col2"><input type="password" name="password1" placeholder='비밀번호' id="password"></div>
        </div>
        <div class="form">
          <div class="col1">비밀번호 확인<font color="red">*</font></div>
          <div class="col2"><input type="password" name="password2" placeholder='비밀번호 확인' id="password"></div>
        </div>
        <div class="form">
          <div class="col1">이름<font color="red">*</font></div>
          <div class="col2"><input type="text" name="name" placeholder='이름' id="name"></div>
        </div>
        <div class="form">
          <div class="col1">연락처<font color="red">*</font></div>
          <div class="col2"><input type="text" maxlength='3' name="phone1" placeholder='010' id="phone"></div>&nbsp;-&nbsp;
          <span class="col2"><input type="text" maxlength='4' name="phone2" placeholder='1234' id="phone"></span>&nbsp;-&nbsp;
          <span class="col2"><input type="text" maxlength='4' name="phone3" placeholder='5678' id="phone"></span>
        </div>
        <div class="form">
          <div class="col1">우편번호<font color="red">*</font></div>
          <div class="col2"><input type="text" name="address1" id="address"></div><span><button type="button" id="search" onclick="addressSearch();">검색</button></span>
        </div>
        <div class="col2"><input type="text" name="address2" id="address2" placeholder="기본주소" readonly></div><br>
        <div class="col2"><input type="text" name="address3" id="address2" placeholder="상세주소"></div><br>
        <div class="form">
          <div class="col1">이메일</div>
          <div class="col2"><input type="email" name="email1" id="email"></div>&nbsp;@&nbsp;
          <select name="email2">
            <option value="이메일 선택">이메일 선택</option>
            <option value="naver.com">naver.com</option>
            <option value="nate.com">nate.com</option>
            <option value="google.com">gmail.com</option>
            <option value="daum.net">daum.net</option>
          </select>
        </div>
        <div class="button">
          <input type="button" value="회원가입" onclick="blankCheck();"><br>
          <a href="../login/login_form.php">이미 가입한 계정이 있으신가요?</a>
        </div>
      </form>
    </div>
  </section>  
</body>
</html>