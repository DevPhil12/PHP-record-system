<?php   
  
  $newfromdate = date('Y-m-d', strtotime($fromdate));
  echo $newfromdate;
  echo '<br>';
  $newtodate = date('Y-m-d', strtotime($todate));
  echo $newtodate;
  echo '<br>';
  $diff=strtotime($newtodate)-strtotime($newfromdate);
  echo $diff;
  echo '<br>';
  
  $days = floor($diff/86400);
  echo $days;
  
  echo '<br>';
  
  
?>