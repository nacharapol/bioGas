<?php
session_start();

if(isset($_POST['do_login'])){
 
 $email=$_POST['email'];
 $pass=$_POST['password'];
 //$select_data=mysql_query("select * from user where email='$email' and password='$pass'");
 //if($row=mysql_fetch_array($select_data))
        if($email=='admin' && $pass=='admin'){
        //$_SESSION['email']=$row['email'];
        echo "success";
        }else{
        echo "fail";
        }
 exit();
}
?>