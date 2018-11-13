    <?php


   
      $g=$_GET['id'];
      echo $g;
      $a=1;
           
          mysql_query("update  reg2 set status='$a' where id='$g'");           
         header('location:view2.php');  
    
    

?>