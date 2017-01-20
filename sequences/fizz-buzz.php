<?php
  $output = "";

  for($i=1; $i<100; $i++){

    if($i % 3 === 0) {
      $output .= 'Fizz '; 
    }

    if(strstr($i, '3')) {
      $output .= 'Fizz ';
    }

    if($i % 5 === 0) {
      $output .= 'Buzz ';
    }

    if(strstr($i, '5')) {
      $output .= 'Buzz ';
    }

    if($i % 5 && $i % 3 && !strstr($i, '5') &&  !strstr($i, '3')) {
      $output .= $i . ' ';
    }
  }

  echo $output;
?>