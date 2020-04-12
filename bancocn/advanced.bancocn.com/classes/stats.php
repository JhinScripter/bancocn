<?php

  $ip = $_SERVER['REMOTE_ADDR'];

  if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip= $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  $results= mysql_query("SELECT * FROM stats where ip='".$ip."'");
  if ($results) {
      $row = mysql_fetch_assoc($results);
      if ($row['ip'])
        mysql_query("UPDATE stats set count=count+1 where ip='".$ip."'");
      else 
        mysql_query("INSERT INTO stats (ip, count) VALUES ('".$ip."',1);");
  }
?>
