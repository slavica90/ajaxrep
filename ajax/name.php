<?php
if(isset($_POST['name'])===true && empty($_POST['name'])===false){
  require '../db/connect.php';
  $query=mysql_query("
                      SELECT  `names`.`location`
                      FROM `names`
                      WHERE `names`.`name`='".mysql_real_escape_string(trim($_POST['name']))."'
                      ");
   if (mysql_num_rows($query)!==0){
    echo mysql_result($query, 0, 'location');
  } 
 else {
   echo "Ne postoi takvo ime!"; 
  }
}
