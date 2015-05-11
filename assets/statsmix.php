<?php

try {
  require "StatsMix.php";
  StatsMix::set_api_key("82ac65255b01596b8fc4");
  StatsMix::track("Tinderlay", 1);
  if(StatsMix::get_error()){
    echo "<p>Error: " . StatsMix::get_error() . "</p>";
  }
  // display the XML or JSON response
  echo StatsMix::get_response();
  // for metadata, pass an array with the key 'meta' like this:
  StatsMix::track("Tinderlay", 1, array('meta' => array('Food' => 'Ice Cream', 'Calories' => 500)));
} 
catch (Exception $e) {
  // handle exceptions here; the library methods all throw StatsMixException
}

?>