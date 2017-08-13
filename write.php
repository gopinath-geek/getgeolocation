<?php
  $lat = $_GET['lat'];
  $long = $_GET['long'];
  $current_time = date("l jS \of F Y h:i:s A");

  $content_to_write = array("time"=>$current_time, "lat"=>$lat, "long"=>$long);
  $file = 'user_log.txt';
  // Open the file to get existing content
  $old_text = file_get_contents($file);
  // Append a new person to the file
  $old_text .= "$content_to_write\n";
  // Write the contents back to the file
  file_put_contents($file, $old_text);

  print_r($content_to_write);
  echo "Okay";
?>
