<?php

// now we learn the global and local variable
 $a = 34 ;
 function ram(){
 echo " my roll number is "  ;
  global $a ;
  echo $a;
 }
 //now we the calling the function here
 ram();  


 
?>