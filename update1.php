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
        <h1><a href="adminhome.php"><img src="images/puppy-available.png" alt="" width="100" height="66"></a> </h1>
      <div class="menu_block">
        <nav>
          <ul class="sf-menu">
            <li class="current"><a href="adminhome.php">Home</a></li>
            
              
           
           <li><a href="view1.php">view</a></li>
            <li><a href="reg1.php">pet registration</a></li>
            <li><a href="logout.php">logout</a></li>
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
   <div class="container">
	<div class="row">
		
			
<div style="border:1px black">
				<div class="ui-block">
				<div class="ui-block-title">
                                    
                                   <form method="post">
					 
                                        <table>
                                            <ol>
            <?php
             $s = $_GET['id'];
            $sql=mysql_query("select * from reg1 where id='$s'");
            while($ar=mysql_fetch_array($sql))
            {
                $b=$ar['id'];  
              $b=$ar['Breed'];  
              $j=$ar['color'];  
              $c=$ar['id'];
       $g=$ar['Age'];
             $h=$ar['photo'];
            $i=$ar['price'];
             $ah=$ar['category'];
              ?> 
           </ol>
          <ol>
            <?php
            }
            ?>
          </ol>
            
           
                
                 <tr>
                <td>
                        Breed
                    </td>
                    <td>
                        <input type="Text" name="txtev" value="<?php echo $b;?>"  >
                        
                    </td>
                </tr>
                <tr>
                <td>
                        Color
                    </td>
                    <td>
                        <input type="Text" name="txtevi" value="<?php echo $j;?>" >
                        
                    </td>
                </tr>
                
                
                
                
                    
                
                
                
                 <tr>
                    
                <td>
                        Age
                    </td>
                    <td>
                     
                         <input type="Text" name="txtp" value="<?php echo $g;?>" >
                    </td>
                </tr>
                
             
                
                 <tr>
                    <td>
                       price
                    </td>
                    <td>
                        <input type="text" name="txtcndt" value="<?php echo $i;?>">
                        
                    </td>
                    </tr>
                    
                    
                   
                    
                     <tr>
                    
                  
                        <td><input type="submit" name="submit1" value="delete" style="border-color:orange"></td>
                    <td>
                        <input type="submit" name="submit12" value="update" style="border-color:orange">
                        
                    </td>
                     </tr>
            </table>
        </form> 
          
                                            
                                        </table>
                                    
                                    
                                </div>
  </div>
</div>            
              </div>
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

if(isset($_POST["submit12"]))
{   
   
      $b=$ar['id'];  
               
    $hi=$_POST['txtev'];
     $jk=$_POST['txtevi'];
       $lk=$_POST['txtp'];
       $lm=$_POST['txtcndt'];
           
          mysql_query("update  reg1 set Breed='$hi',color='$jk',Age='$lk',price='$lm' where id='$s'");           
         header('location:view1.php');  
    
    
}
elseif(isset($_POST["submit1"]))
{
     $s = $_GET['id'];
     mysql_query("delete from reg1 where id='$s'");
  header('location:view1.php');
}
?>                   