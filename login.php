<?php
include 'conect.php';
session_start();
ob_start();
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
            <li class="with_ul"><a href="aboutus.php">About Us</a>
              
            </li>
            <li><a href="reg.php">SignUp</a></li>
          <!--  <li><a href="">contact</a></li>-->
            <li><a href="login.php">Login</a></li>
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
      <br>
      <div class="map">
        <figure class="img_inner">
        </figure>
        <address>
        <dl>
          <dt>
            <p>Pet Shop<br>
              MCK<br>
              KL</p>
          </dt>
          <dd><span>Telephone:</span>+91 9544046976</dd>
        </dl>
        </address>
      </div>
    </div>
      <form method="post">
    <div class="grid_5 prefix_1">
      <h2 class="ic1">Login Form</h2>
     
        <div class="success_wrapper">
          <div class="success"><br>
            <strong></strong> </div>
        </div>
<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			
				<!-- Nav tabs -->
				

				<!-- Tab panes -->
				
					
                                <div class="title h6"><b>LOGIN</b></div>
						
							<div class="row">
                                                            
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="form-group label-floating">
                                                                            <label class="control-label"><font color=black><pre>User name     </pre></font></label>
										<input class="form-control" placeholder="" type="text" style="border-color:gray" name="txtuser" value="" required>
									</div>
								</div>
								
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="form-group label-floating">
                                                                            <label class="control-label"><font color=black><pre>Password</pre></font></label>
										<input class="form-control" placeholder="" type="password" style="border-color:gray" name="txtpass" value="" required>
									
                                                                        </div>
									
 <input type="submit" name="submit"  class="btn btn-purple btn-lg full-width">
									
								</div>
                                                               
							</div>
						
					</div>
          
    </div>
</form>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
      <p>Pet Club &copy; 2017 | <a href="#">Privacy Policy</a> | Design by: <a href="YKS">YKS</a></p>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>

<?php
if(isset($_POST['submit']))
{   
   
      $us=$_POST['txtuser'];
       $ps=$_POST['txtpass'];
        
                 
                      
        $sql=mysql_query("select * from login_tb where user_name='$us' and password='$ps'");
        $ar=mysql_fetch_array($sql);
        if($ar)
        {
         $_SESSION['id']=$ar['id'];
                     $_SESSION['username']=$ar['username'];
                      $_SESSION['password']=$ar['password'];
                       $_SESSION['usertype']=$ar['usertype'];
                       if($ar['usertype']=='admin')
                       {
                           header('location:adminhome.php');
                       }
                   
if($ar['usertype']=='user')
                       {
                           header('location:userhome.php');
                       }

                  
                 
                     
                     
                 }
//  
        //echo "sahg";
//      echo $ar;    
    
}