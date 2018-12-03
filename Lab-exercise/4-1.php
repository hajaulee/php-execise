<?php
     echo "hello";
     $ac = array(1,2,32,3,4,4,2,4,3);

     function axc($o, $p){
         return ($o < $p)?-1:1;
     }
     usort($ac, "axc");
     foreach ($ac as $x)
         echo "$x ";