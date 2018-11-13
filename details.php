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
          <li class="current"><a href="userhome.php">Home</a></li>
            
            <li><a href="">contact</a></li>
            <li><a href="view.php">view </a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="details1.php?"><img src="images/cart.png" alt="" width="42" height="42"></a></li>
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
                                    
                                    
                                        <table>
                                            <ol>
            <?php
            
             $k = $_GET['myNumber'];
            $sql=mysql_query("select * from reg1 where category='$k'");
            while($ar=mysql_fetch_array($sql))
            {
              $b=$ar['Breed'];  
               
              $j=$ar['color'];  
               $c=$ar['id'];
              $g=$ar['Age'];
             $h=$ar['photo'];
            $i=$ar['price'];
             $ah=$ar['category'];
              ?> 
           <br>
           </ol>
            
                                            
                                            <tr> <td><br></br><b>category:<?php echo $ah;?></b></td></tr>
                                            
               <tr><td width="100"><img src="upload/<?php echo $h; ?>"width="300" height="300"/></td></tr>
             
              
          <tr><td><strong>prize:<FONT COLOR="ORANGE" size="4"><?php echo $i;?> Rs</FONT></strong></td></tr>
           <tr><td>><strong>Breed:<FONT COLOR="black" size="4"><?php echo $b;?> </FONT></strong></td></tr>
            <tr><td>><strong>Color:<FONT COLOR="black" size="4"><?php echo $j;?> </FONT></strong></td></tr>
          <tr><td><strong>Age:<FONT COLOR="black" size="4"><?php echo $g;?> </FONT></strong></td></tr>
        <td><a href="cart.php?id=<?php echo $c;?>"><font size="6" color="blue" align="center">Add to cart</font></a> </td>
          <tr><td>-------------------------------------------------</td></tr>                                 
               <?php
            }
            ?>
                                            
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

                       