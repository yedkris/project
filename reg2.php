<?php		
 include 'conect.php';
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Pet Club | Contacts</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<script src="js/jquery.js"></script>
<script src="js/forms.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
jQuery(document).ready(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<header>
  <div class="container_12">
    <div class="grid_12">
        <h1><a href="main.php"><img src="images/puppy-available.png" alt="" width="100" height="66"></a> </h1>
      <div class="menu_block">
        <nav>
          <ul class="sf-menu">
            <li class="current"><a href="main.php">Home</a></li>
            <li class="with_ul"><a href="">About Us</a>
              
            </li>
            <li><a href="reg.php">SignUp</a></li>
            <li><a href="contactus.php">contact</a></li>
            <li><a href="login.php">login</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div class="content pt1">
  <div class="container_12">
    <div class="grid_6">
      
    </div>
    <div class="grid_5 prefix_1">
      <h2 class="ic1"> User Registration</h2>
      <form  method="POST" enctype="multipart/form-data">
     <table align="center"> 
         <tr><td> User Name:</td>
             <td><input type="text" name="txtname"required>
             </td>
         </tr>
         <tr></tr> <tr></tr>
 <tr><td> Address:</td>
     <td><textarea name="txtaddress" required>
             </textarea></td>
         </tr>
         
        
         
           <tr>
             <td> e-mail:</td>
             <td><input type="text" name="txtemail" required>
             </td> </tr>
           
            <tr> 
                 <td> Phone:</td>
                 <td><input type="text" name="txtphn" required>
                 </td></tr>
                 
             <tr> 
                          <td> Username:</td>
                          <td> <input type="text" name="txtuser"required>
                          </td>
                      </tr>
                      <tr>
                          <td> Password:</td>
                          <td> <input type="password" name="txtpass"required>
                          </td>
                      </tr>
                      
                      <tr><td> <input type="submit" name="submit" value="submit">
                                <h2 class="ic1">Click login </h2>

                      </tr>
                      
                      
               </table>
     </form>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
      <p>Pet Club &copy; 2017 | <a href="#">Privacy Policy</a> | Design by: <a href="http://www.templatemonster.com/">YKS</a></p>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>

                       <?php
if(isset($_POST['submit']))
{   
    $nm=$_POST['txtname'];
     $ad=$_POST['txtaddress'];
      
     //  $mai=$_POST['txtemail'];


$mai = test_input($_POST["txtemail"]);
if (!filter_var($mai, FILTER_VALIDATE_EMAIL)) {
 echo "Invalid email format"; 
}

       $ph=$_POST['txtphn'];
       $usern=$_POST['txtuser']; 
        $passw=$_POST['txtpass'];
         
        
               mysql_query("INSERT INTO  reg(name,address,email,phone,user_name,passwd) values('$nm','$ad','$mai','$ph','$usern','$passw')");
   mysql_query("INSERT INTO  login_tb(user_name,password,usertype) VALUES ('$usern','$passw','user')");
  
        }
        ?>