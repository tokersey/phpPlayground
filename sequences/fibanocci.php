<?php

function getFib($n)
{
    // return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
    return round(((5 ** .5 + 1) / 2) ** $n / 5 ** .5);
}

for ($i=0; $i<10; $i++){
  print_r(getFib($i) . ", ");
}

?>