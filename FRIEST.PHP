<?php // we know that the php are starting with this symbol
echo "hellow every one";
?>
<?php 
echo "MY NAME IS SHIVAM SINGH ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "the is the html files <br>";
    echo 567;
    $a = "my name is shivam singh";
    echo $a;
    $num = "shivm singh";
    echo $num ;
    echo "<h1>" . $num ."</h1>" ;
    echo "my name is :" . $num;
    echo "<h1>this the name" . $num . "</h1>";
    $number = 456;
    $number2 = 567;
    echo "$number+$number2";
    $number34 = $number + $number2;
    echo "$number34";
    //deta type of the php language
    $x = "hellow world"; //this is the string deta type 
    echo "$x";
    $y = 45; // this is the integer deta type
    echo "$y";
    $z = 30.55; // this is the flot value
    echo "$z" . "<br>";
    $cut = true;
    var_dump($cut);
    //NOW WE TRY THE NULL DETA TYPE
    $X = null;
    $x = " here we are the test";
    
     
    var_dump($x);
    //next lacture
    //now we learn the consent variable
    // define("name",value,case insenstive)
    // a defult value of case insentive are false
    define("nughm",500);
    //we can't  use $ sign when we take the variable
    //content variable are the globle variable
   echo nughm; 
   $summ = nughm + 70;
   echo $summ ."<br>";
   //arhmatic oprators





    ?>
    <?php
    $a = 10;
    $b = 20;
    // now we are using the arthmatic opretors
    $c = "<p> this is the value of the c <p>". $a + $b ."<br>";
    $d = "this is the vale od the d".$b - $a."<br>";
    $e = "this is thee value of the e " . $a * $b."<br>";
    $f = "this iths the value of the f".$b/$a."<br>";
    $g = "this is the value of the g".$b%$a."<br>";
    echo $c,$d,$e,$f,$g."<br>"; 
    // now we are chacking the the increment opretore
    $a++;  // frist retun the value then the increment
    ++$a ; // its means frist incement of the value the return
    $b--;
    echo $a."<br>", $b."<br>";
    // now we are using the 
    $a = 10;
    $b = 20; 
    $i = $b ** $a;
    echo $i."<br>";
    // now we are adding then the multiplaying of the value 
    $j = ($a + $b)*2 ;
    echo $j."<br>"; 
    // now we are learn the assiment opretors
    $mp = 100;
    $np = 10;
    //now we are using the assiment oprators
    $mp += $np ;
    echo $mp."<br>" ;
    // now we are using the subtraction assiment opretore
    $dg = 40;
    $fg = 10;
    $dg *= $fg;
    echo $dg."<br>";
    // now we are the compresion oprators
    $sh = 45;
    $it = 45;
    // now we are using the 
    echo $sh == $it ;
    echo $sh != $it ;
    echo $sh >= $it ;
    echo $sh <= $it ;
    // now we are usingthe if statement
    $jh = 67 ;
    $hj = 50  ;

   if ($jh == $hj) {
    echo "now the value of the grater";
   }
   if ($jh > $hj ) {
     echo " now the value is the  write<br>";
   } else {
     echo " value are the not equall <br> ";
   }
   // now here we learn the logical oprators 
   // heare we are using or opartor 
   $age = 20;
   if ($age >=18 && $age <=60) {
     echo "you are the eligible of this form <br>";
   }
   $age = 40;
   if ($age >=18 and $age <=60) {
     echo "you are the eligible of this form <br>";
   }
   // hear you are using or oprator
   $age = 80;
   if ($age >=18 || $age <=60) {
     echo "you are the eligible of this form <br>";
   }
   $age = 80;
   if ($age >=18 or $age <=60) {
     echo "you are the eligible of this form <br>";
   }
   
   $age = 15;
   if (!($age >=18 )) {
     echo "this is the working of the not opratore <br>";
      
   }
   // now we are using thwe xor oprator
   $age = 56;
   if ($age <= 18 xor $age >=18) {
    echo "one codation are true the print true if both condaton are ture the print flase<br>";
   }
   // now we are learning the if else statement
    $lp = 25;
    if ($lp > 50) {
        echo "this tis hte gater then the 50";
    } else {
        echo "this is value of the less then 50<br> ";
    }
    $name  = "shivam singh";
    $gender = "male";
    if ($gender == "male") {
        echo "MR ." . $name;

    }
    else {
        echo "MRS :". $name;

    }
    //now we learn if else if statements
    $gender = "male";

    if ($gender == "male") {
        echo "this is the male condidate<br>";
    }
    elseif ($gender == "femail") {
        echo "this is the femail condiadte<br>";
    } 
    else {
        echo "this is the tensjendre";
    } 
    // now we chack the gread system of he if else statement 
   $mark = 8;
    if (100 >= $mark && 80 <= $mark) {
        echo "grade mark";
    }
    elseif (79 >= $mark && 60 <= $mark) {
        echo " this is the paaingh with frist division mark";
    } 
    elseif (59 >= $mark && 40 <= $mark) {
        echo "this is passingh with the ssecond divisiom mark";

    }
    elseif (39 >= $mark && 33 <= $mark) {
        echo "passingh with the thired division mark";

    }
    elseif (100 <= $mark) {
        echo "this is the not the proper mark plese enter the proper mark";

    }
    else {
        echo "you are the fail!<br>";
    } 
//now we are the reading the switch case
$days = 4; 
   switch ($days) {
    case '1':
        echo "today is the monday";
        break;
    case '2':
            echo "today is the tuesday";
            break;
     case '3':
                echo "today is the wednesday";
                break;
    case '4':
                    echo "today is the friday<br>";
    break;
    default:
        echo " no days of ";
        break;
    }
        // second type switch case we are writing
        $month = 1;
    switch ($month) {
        case 1:
            echo "january<br>";
                break;
        case 2:
            echo "february";
                break;
                
        case 3:
            echo "march";
                break; 
        case 4:
            echo "aprail";
                break;
        case 5:
            echo " may";
                break;
                
        default:
            echo "enter code are not valide code";
            break;
    }
    // now we write the condational switch statement 
    $agee = 8;
    switch ($agee) {
        case (5 <= $agee && 10 >= $agee):
            echo "<h1>now you are apply the form of 5th class</h1><br>" . $agee . "<br>";
                break;  // heare we the write the code  of the of the switch statement
        case 2:
            echo "february";
                break;
                
        case 3:
            echo "march";
                break; 
        case 4:
            echo "aprail";
                break;
        case 5:
            echo " may";
                break;
                
        default:
            echo "enter code are not valide code";
            break;
    }
    // now we are the ternary oparatore 
    // now we taking the variable 
    $tri = 56;
    ($tri >= 50)? $tri = "you are the write choice<br>" : $tri = " you are the worng choice" ;
    echo " $tri";
   // now we write the second method 
   $tipi = 76;
   $tripi = ($tipi <= 100)? "you are the write<br>" : "you are the worng";
    echo "$tripi" ;
    // now we learn the next lacture
    // string opratore we ae using
    $collage = "veer bahadur singh purvanchal university";
    $department =  "unsit" .$collage ;
    echo $department ;
    $department .= " this is the engineering coolage";
    echo $department ; 
    // now we are the adding the contination again 
    $department .= " i am read in this enginnering collage<br>";
    echo $department ;
    //now we learn the while loop 
    $a = 5;
    while ($a <= 10) {
        echo "my name is shivam singh<br>";
        $a++;
    }
    // now we write this code on the second type
    $a = 6 ; 
    while ($a <= 10) {
        echo "father name is satyendra kumar singh<br>";

         $a = $a + 1;
    }
    // now again we righ the new method of while 
    $a = 6 ;
    echo "<ul>";
    while ($a>= 1) {
        echo  "<li>".$a ." my mother name is sarita singh<br> " ;
        $a--; // noe we leran decriment oprator

    }
    echo "</ul>";
    // now ew write the next lession 
    // now we leran the do while loop 
      $a = 5;
      do {
        echo $a .") my sister name is lovely<br>";
        $a++;
      } while ($a <= 10); 
      // now we write the table of 2
      $s = 1;
      while ($s <= 10) {
        $m = $s*2 ."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp " ;
        $m .= $s*3 ."&nbsp &nbsp &nbsp &nbsp";
        $m .= $s*4 ."&nbsp &nbsp &nbsp &nbsp";
        $m .= $s*5 ."&nbsp &nbsp &nbsp &nbsp";
        $m .= $s*6 ."&nbsp &nbsp &nbsp &nbsp";
        $m .= $s*7 ."&nbsp &nbsp &nbsp &nbsp";
        $m .= $s*8 ."&nbsp &nbsp &nbsp &nbsp";
        $m .= $s*9 ."&nbsp &nbsp &nbsp &nbsp";
        $m .= $s*10 . "<br>";
        $s++;
        echo $m;
      }
      //now we are printig the table
      $b = 1;
      while ($b <= 10) {
        $a = 1;
        do {
            $j = $b*$a ;
            echo $j . "<br>";
            $a++;
            
        } while ($a <= 10);
          
        $b++;

      }
      // now we learn the for loop 
      for ($i=1; $i < 10 ; $i = $i+2) { 
        echo $i . ")now we are incriment the two value<br>" ; 
      }
      // now we are learnig the nested loop
      // now we are printing multiply
      for ($i=1; $i <=10 ; $i++) { 
        for ($j=1; $j <=10 ; $j++) { 
            $m = $i*$j ;
            echo  $m . " "; 
        }
        echo "<br>" ;
      }
      // now are the next lession 
      for ($i=0; $i < 10 ; $i++) { 
        //if we want to print table
        // and schip 4 word
        if ($i == 4) {
            continue ;
        }
        echo $i ."<br>";
      }
      // now we write the break statement 
      // if we same thing 
      for ($i=0; $i <10 ; $i++) { 
        if ($i == 4) {
            break ;
        }
        echo $i . ") this is the brack element <br>";
      }
      // noe we are read goto statemnt
     
      $a = 1;
       while ($a <= 10) {
        echo "stisfide the condation ";
        $a++;
        goto abc;
       }
       abc:
      echo "this is the goto statement<br>";
      //now we are the learning the function in the php
      function shivam(){
        echo "my name is the shivam sigh <br>";
        echo " my father name is satyendra kumar singh <br>";
        echo " may mather name is the sarita singh<br>";
      }
      shivam();// this is the calling of  the fuction 
      // FUNCTION with parameter
      function sum  ($a , $b){
        echo $a + $b ."<br>";

    }
    // now we are calling the function with the paramiter
    sum (10 , 20);
    // now again we write the passingh the parameters
    function shivamee($father,$mother,$sister){
        echo  "my father name is " . $father . "<br>";
        echo  "my mother name is ".$mother . "<br>"; 
        echo  "mu sister name is ";

    }
    // now we are the calling the function with the parameres 
    shivamee( "satyendra kumar singh","sarita singh","lovely singh" );
    //now we the tutorial we are reading 
    // we are using just like the defalut value
    function tri($fristmatk = 700 , $secondmark = 678){ // here we make the next fuction 
            echo " tripri find the mark in the frist semester exam " . $fristmatk . "<br>";
            echo " tripti fond the second semester mark " . $secondmark ."<br>";
    } 

    // now we calling the function 
    tri(500);
    // now we are writing this functon eith the differnt method 
     // no we are the learn the function with the return value
     function summ($a , $b , $c){
      $g = ($a+$b)*$c ;
      return $g  . "<br>";


     }
     // now we are the calling the return function 
     echo summ(7,6,8);
     $ety = summ(7,6,8);
     echo $ety;
     
     

     // now we are use the this function in other arument return value
     function per($t){
       
     $sat = ((int)$t/6) ;
     return $sat;
    }
    // now we are the calling funtion and use the frist function value as a argument 
   echo per($ety);
   $z = per($ety);
   echo $z;
   // now we are read the function by the refrence
   function testing($shivaa){
        
       $shivaa += 56 ;
       
        
   }
    $xyz = 70;
    testing($xyz);
    echo $xyz ;
   

    
    
    // now here we see the diffrence argument by refrences 

  function testing1(&$shivaa3){
       
       $shivaa3 .= "is the my name";
  }
   $xyz1 = "shivam ";
   testing1($xyz1);
   echo "$xyz1";
   // second example 
   
   
   
   
   
   
   
   
   
   
   function frist1($nu){
         $nu += 10 ;

   }
   $number45 = 70 ;
   frist1($number45);
   echo $number45 . "<br>";
   // call by refrence it is the update value of the 
   
    function sgiva(&$five){
      $five += 10;
    }
    $lt = 75;
    sgiva($lt);
    echo $lt  ."<br>";




    // now we the learn the variable function 
    function triptiii($jha){
        echo "this is name of the college";
    }
    $trsi = "triptiii" ;
     $trsi(10);
     // we are also use without argument



     // now we are using the second type
     $fiy = function ($name)
            {
                echo "your name is " . $name ;

            };
       // now we are the calling the function 
       $fiy("shivam");





       // now we are the using the recursive function
       function printvalue($numberx){
       
      
         if ($numberx <= 5) {
            echo $numberx . "<br>" ;
         
         printvalue($numberx + 1);
         }
      }
        printvalue(1);
       


        // now we are the write the factorial of the function 
       
         function facto($nn){
               echo $nn . "*" ;
         if ($nn == 0 ) {
            return 1 ;
         } else {
            return ($nn * facto($nn-1));
            
         }
        }
          echo "=" . facto(6);   
   
   
   


       

    
      
      
      





    ?>
</body>
</html> 