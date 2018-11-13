<?php
 error_reporting(0);
 $con=mysql_connect("localhost","root","");
 if(!$con)
 {
 echo"not connected";
 }
 else
 {
 mysql_select_db("petshop_db",$con);
 }
 ?>