function addressSearch(){
  new daum.Postcode({
    oncomplete: function(data){
      $('[name=address1').val(data.zonecode); //우편번호 5자리
      $('[name=address2').val(data.address);
      $('[name=address3').val(data.buildingName);
    }
  }).open();
}

function blankCheck(){
  if(!document.register_form.id.value){
    swal('회원가입 실패', '아이디를 입력해주세요', 'warning');
    document.register_form.id.value.focus();
    return;
  }else if(!document.register_form.password1.value){
    swal('회원가입 실패', '비밀번호를 입력해주세요', 'warning');
    document.register_form.password1.value.focus();
    return;
  }else if(!document.register_form.password2.value){
    swal('회원가입 실패', '비밀번호를 입력해주세요', 'warning');
    document.register_form.password2.value.focus();
    return;
  }else if(document.register_form.password1 != document.register_form.password2){
    swal('회원가입 실패', '비밀번호가 일치하지 않습니다', 'warning');
    document.register_form.password2.value.focus();
    return;
  }else if(!document.register_form.name.value){
    swal('회원가입 실패', '이름을 입력해주세요', 'warning');
    document.register_form.name.value.focus();
    return;
  }else if(!document.register_form.phone1.value){
    swal('회원가입 실패', '연락처를 입력해주세요', 'warning');
    document.register_form.phone1.value.focus();
    return;
  }else if(!document.register_form.phone2.value){
    swal('회원가입 실패', '연락처를 입력해주세요', 'warning');
    document.register_form.phone2.value.focus();
    return;
  }else if(!document.register_form.phone3.value){
    swal('회원가입 실패', '연락처를 입력해주세요', 'warning');
    document.register_form.phone3.value.focus();
    return;
  }else if(!document.register_form.address1.value){
    swal('회원가입 실패', '우편번호를 입력해주세요', 'warning');
    document.register_form.address1.value.focus();
    return;
  }else if(!document.register_form.address2.value){
    swal('회원가입 실패', '주소를 입력해주세요', 'warning');
    document.register_form.address2.value.focus();
    return;
  }else if(!document.register_form.address3.value){
    swal('회원가입 실패', '상세주소를 입력해주세요', 'warning');
    document.register_form.address3.value.focus();
    return;
  }else if(!document.register_form.email1.value){
    swal('회원가입 실패', '이메일을 입력해주세요', 'warning');
    document.register_form.email1.value.focus();
    return;
  }else if(document.register_form.email2.value == "이메일 선택"){
    swal('회원가입 실패', '이메일을 선택해주세요', 'warning');
    document.register_form.email2.value.focus();
    return;
  }
  document.register_form.submit();
}