<?php
  // Strings to test
  $strings = array('Hello World', 'hello world', 'hEllo World');

  // Loop through strings to validate and print message
  foreach($strings as $string) {
    $valid = testForUppercase($string);
    printMessage($valid, $string);
  }

  function testForUppercase($string)
  {
    // Regex to check if first character is an uppercase character.
    $regex = '/^[A-Z]/';

    // Test regex against string
    $isTrue = (preg_match($regex, $string)) ? true : false;

    // return $isTrue
    return $isTrue;
  }

  function printMessage($valid, $string)
  {
    // Print appropriate message for validation
    if ($valid) {
      echo 'The first letter of "' . $string . '" is uppercase.<br />';
    } else {
      echo 'The first letter of "' . $string . '" is NOT uppercase.<br />';
    }
  }
?>
