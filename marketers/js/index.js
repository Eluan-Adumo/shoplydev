// function emailValidation(emailText){
// 	var emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
// 	if(emailText.match(emailReg)){
// 		return true;
// 	}else{
// 		return false;
// 	}
// }

function signUpMarketer(){
  
  let marketerName = document.querySelector('#fullname').value;
  let marketerEmail = document.querySelector('#Email').value;
  let marketerDob = document.querySelector('#birth-date').value;
  let marketerPhone = document.querySelector('#phone').value;

  if (marketerName.length < 6 || marketerEmail.length < 6 || marketerDob.length < 6 || marketerPhone.length < 6){
    alert ("Please fill in the form");
  } else{
    $.ajax ({
      type: "POST",
      url : "backend/authenticate.php",
      data: {
        "m_name": marketerName, "m_email": marketerEmail, "m_dob": marketerDob, "m_phone": marketerPhone
      }, 
      beforeSend: function(){

      },
      error: function(message){
        alert(message);
      },
      success: function(message){
        if (message == "success"){
          window.location.href = "../marketers-dashboard.php";
        }else{
          alert(message);
        }
        
      }
    });
  }
}

function loginMarketer(){
  
  let marketerLoginEmail = document.querySelector('#Email').value;
  let marketerLoginDob = document.querySelector('#birth-date').value;

  if (marketerLoginEmail.length < 2 || marketerLoginDob.length < 2){
    alert ("please fill up the form");
  } else{
    $.ajax ({
      type: "POST",
      url : "../backend/login.php",
      data : {
        "m_login_email": marketerLoginEmail, "m_login_dob": marketerLoginDob
      },
      beforeSend: function(){

      },
      error: function(message){
        alert(message);
      },
      success: function(message){
        if(message == "success"){
          window.location.href = "../marketers-dashboard.php";
        }else{
          window.location.href = "../marketers-signup.php";
          // alert(message);
        }
      }

    });
  }
}