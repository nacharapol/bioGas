<html>
<head>
<link href="login_style.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="jqueryx.js"></script>
<script type="text/javascript">
function do_login()
{
 var email=$("#emailid").val();
 var pass=$("#password").val();
 if(email!="" && pass!="")
 {
  $("#loading_spinner").css({"display":"block"});
  $.ajax
  ({
  type:'post',
  url:'do_login.php',
  data:{
   do_login:"do_login",
   email:email,
   password:pass
  },
  success:function(response) {
  if(response=="success")
  {
    window.location.href="index.html";
  }
  else
  {
    $("#loading_spinner").css({"display":"none"});
    alert("Wrong Details");
  }
  }
  });
 }

 else
 {
  alert("Please Fill All The Details");
 }

 return false;
}
</script>
</head>
<body>
<div id="wrapper">

<div id="login_form">
 
<!---->

 <p id="login_label"><img src="logo-blue.png"></p>
 <form method="post" action="do_login.php" onsubmit="return do_login()">
  <input type="text" name="emailid" id="emailid" placeholder="Username">
  <br>
  <input type="password" name="password" id="password" placeholder="Password">
  <br>
  <input type="submit" name="login" value="เข้าสู่ระบบ" id="login_button">
 </form>
 <p id="loading_spinner"><img src="loader1.gif"></p>
</div>

</div>
</body>
</html>