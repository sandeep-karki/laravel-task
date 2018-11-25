  var name=1;
  var phone=1;
  var email=1;
  var address=1;
  var nationality=1;
  var dob=1;
  var edu=1;

  pat_name=/^[a-z A-Z]+$/;
  pat_phone = /^\d{10}$/;
  pat_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  pat_address = /^[a-z A-Z]+$/;
  pat_nationlity = /^[a-z A-Z]+$/;
  // pat_dob =^(0[1-9]|1[012])[-/.](0[1-9]|[12][0-9]|3[01])[-/.](19|20)\\d\\d$;
  pat_edu = /^[a-z A-Z]+$/;

  function nameValidation(val) {
    if (val != "") {
      if (pat_name.test(val)) {
        document.getElementById('nameERR').innerHTML = "";
        name = 1;
      }else{
        document.getElementById('nameERR').innerHTML = "Invalid Name";
        name = 0;
      }
    }
    if (name==1 && phone == 1 && email==1 && address==1 && nationality==1 && dob==1 && edu==1) {
      $('#showBtn').fadeIn('slow');
    }else{
      $('#showBtn').hide();
    }
  }
  function emailValidation(val) {
    if (val != "") {
      if (pat_email.test(val)) {
        document.getElementById('emailERR').innerHTML = "";
        email = 1;
      }else{
        document.getElementById('emailERR').innerHTML = "invalid email";
        email = 0;
      }
    }

    if (name==1 && phone == 1 && email==1 && address==1 && nationality==1 && dob==1 && edu==1) {
      $('#showBtn').fadeIn('slow');
    }else{
      $('#showBtn').hide();
    }
  }
  function phoneValidation(val) {
    if (val != "") {
      if (pat_phone.test(val)) {
        document.getElementById('phoneERR').innerHTML = "";
        phone = 1;
      }else{
        document.getElementById('phoneERR').innerHTML = "Invalid Phone";
        phone = 0;
      }
    }
    if (name==1 && phone == 1 && email==1 && address==1 && nationality==1 && dob==1 && edu==1) {
      $('#showBtn').fadeIn('slow');
    }else{
      $('#showBtn').hide();
    }
  }
  
  function addressValidation(val) {
    if (val != "") {
      if (pat_address.test(val)) {
        document.getElementById('addressERR').innerHTML = "";
        address = 1;
      }else{
        document.getElementById('addressERR').innerHTML = "Invalid Address";
        address = 0;
      }
    }
    if (name==1 && phone == 1 && email==1 && address==1 && nationality==1 && dob==1 && edu==1) {
      $('#showBtn').fadeIn('slow');
    }else{
      $('#showBtn').hide();
    }
  }
  function nationalityValidation(val) {
    if (val != "") {
      if (pat_nationlity.test(val)) {
        document.getElementById('nationalityERR').innerHTML = "";
        nationality = 1;
      }else{
        document.getElementById('nationalityERR').innerHTML = "Invalid Nationality";
        nationality = 0;
      }
    }
    if (name==1 && phone == 1 && email==1 && address==1 && nationality==1 && dob==1 && edu==1) {
      $('#showBtn').fadeIn('slow');
    }else{
      $('#showBtn').hide();
    }
  }
  function dobValidation(val) {
    if (val != "") {
      if (pat_dob.test(val)) {
        document.getElementById('dobERR').innerHTML = "";
        dob = 1;
      }else{
        document.getElementById('dobERR').innerHTML = "Invalid Date Of Birth";
        dob = 0;
      }
    }
    if (name==1 && phone == 1 && email==1 && address==1 && nationality==1 && dob==1 && edu==1) {
      $('#showBtn').fadeIn('slow');
    }else{
      $('#showBtn').hide();
    }
  }
  function eduValidation(val) {
    if (val != "") {
      if (pat_edu.test(val)) {
        document.getElementById('eduERR').innerHTML = "";
        edu = 1;
      }else{
        document.getElementById('eduERR').innerHTML = "Invalid Education";
        edu = 0;
      }
    }
    if (name==1 && phone == 1 && email==1 && address==1 && nationality==1 && dob==1 && edu==1) {
      $('#showBtn').fadeIn('slow');
    }else{
      $('#showBtn').hide();
    }
  }
  function showHide() {
    var radiobtn1 = document.getElementById('radio_mail');
    var hiddenemail = document.getElementById('emailsection');

    var radiobtn2 = document.getElementById('radio_phone');
    var hiddenphone = document.getElementById('phonesection');

    var radiobtn3 = document.getElementById('radio_none');

    if (radiobtn1.checked) {
      hiddenemail.style.display = 'block';
      hiddenphone.style.display = 'none'; 
    }

    if (radiobtn2.checked) {
      hiddenphone.style.display = 'block';
      hiddenemail.style.display = 'none';
    }
    if (radiobtn3.checked) {
      hiddenphone.style.display = 'none';
      hiddenemail.style.display = 'none';
    }

  }