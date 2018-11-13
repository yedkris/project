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
            <li class="current"><a href="adminhome.php">Home</a></li>
            
              
           
           <li><a href="view1.php">View</a></li>
            <li><a href="reg1.php">Pet Registration</a></li>
            <li><a href="logout.php">Logout</a></li>
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
      <h2 class="ic1"> Pet Registration</h2>
      <form  method="POST" enctype="multipart/form-data">
     <table align="center"> 
         <tr><td> breed</td>
             <td><input type="text" name="txtbreed"required pattern="[A-Z,a-z]{3,}">
             </td>
         </tr>
         <tr></tr> <tr></tr>
 <tr><td> color</td>
             <td><input type="text" name="txtcolor"required pattern="[A-Z,a-z]{3,}">
             </td>
         </tr>
         
        
         
           <tr>
             <td> Age:</td>
             <td><input type="text" name="txtage"required pattern="[0-9]{1,2}">
             </td> </tr>
           
            <tr> 
                 <td> Price:</td>
                 <td><input type="text" name="txtprice"required pattern="[0-9]{1,}">
                 </td></tr>
        <tr>  
            
        <select name="txtcat">
  <option value="Cat">Cat</option>
  <option value="Dog">Dog</option>
  <option value="Bird">Bird</option>
 
</select>
  </tr>                
             
                      <tr><td> <input type="submit" name="submit" value="submit">
                               

                      </tr>
                      
                      
                <div class="col-sm-6"><br>
                                                          <label><font color=black >Upload Image</font></label>
                                                                                <input type="file"  name="fileToUpload" required>
									</div>
               </table>
     </form>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
      <p>Pet Club &copy; 2017 | <a href="#">Privacy Policy</a> | Design by: YKS<a href=""></a></p>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>

                       <?php
if(isset($_POST['submit']))
{   
    $nm=$_POST['txtbreed'];
     $ad=$_POST['txtcolor'];
      
       $mai=$_POST['txtage'];
       $ph=$_POST['txtprice'];
       $pp=$_POST['txtcat'];
        
        echo $_FILES['fileToUpload']['tmp_name'];
        $upldr=$_FILES["fileToUpload"]["name"];
       echo $upldr;
           move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"upload/".$upldr);
       mysql_query("INSERT INTO  reg1(Breed,color,Age,price,photo,category,status) values('$nm','$ad','$mai','$ph','$upldr','$pp','0')");
 
  
        }
        ?>