<?php
    // noe ew are the macke the arry for the store the multiple value
    $a = array(10,20,30);
    echo $a[1] , "<br>";
    // array using the string
    $colour = array("red","blue","gree","yellow");
    echo $colour[0]."<br>";
    echo $colour[1]."<br>";
    echo $colour[2]."<br>";
    $g = ["yellow","mango" , 20 ,"water malon ", 30];
    
    print_r($g) . "<br>";
    // now we sre the using proper formate 
    echo "<pre>";
    print_r($g) ;
    echo "</pre>";
    // now we are the makin the thire making the array
    $arr[0] = "mango";
    $arr[1] = "orange";
    $arr[2] = "apple";
    $arr[3] = "patato";
    $arr[4] = "water malone";
    // noww we are the testing the 
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
// using the print method for loop
 for ($i=0; $i <=3 ; $i++) { 
    echo $colour[$i]. "<br>";
 }
 // if we are the using the orderd list
 echo "<ul>";
 for ($i=0; $i <=3 ; $i++) { 
    echo "<li>" . $colour[$i]. "</li>"  . "<br>";
 }
  echo "</ul>";  






  // now we are making the asociate arry 
   $df =  array("bill" => 34 , "pani" => 10 ,"apple" => 45);
   echo $df["bill"]."<br>";
   echo $df["pani"] ."<br>";
   echo $df ["apple"] . "<br>";

   // also we write the arry in the [] in tjhis form 
   // this array print 
   $dff =  ["bill" => 34 , "pani" => 10 ,"apple" => 45];

   $dff["pani"] = 20;
   echo $dff["bill"]."<br>";
   echo $dff["pani"] ."<br>";
   echo $dff ["apple"] . "<br>";




   // now wwwe are the chaking the arry 
    echo "<pre>";
    print_r($dff);
    echo "<pre>";
    echo "<pre>";
    var_dump($dff);
    echo "<pre>";

    // now hear the change the vlaue 
    // now we are the learn the for loop for each loop
    
    // now we are the making the index arry
    $colo = array("red" , "green " ," blue" , "yellow ", "orange");
    foreach ($colo as $value) {
      echo $value . "<br>";
    }

    // now we are the making the asocisatev value
    $age = array("mohal" => 43 , "manshi" => 43 ,"simaran" => 43, "sunil" => 45);
    foreach ($age as $key => $value) {
      echo "<h> the name of the condiadate is $key and theare age is $value<p><br>";
   }
   

   
   



   // now we learn the multidimation arry 
   $com = [
      [1,"mahesh","manager", 2500],
   [2,"suresh","uiux", 250],
   [3,"anil","desigener", 20500],
   [4,"aman","doveloper", 255600],
   [5,"ambikesh","tester", 25060]
   ];

 // frist method of using printig the arry
   echo $com[0][0];
   echo $com[0][1];
   echo $com[0][2];
   echo $com[0][3]."<br>";
    
   // now we are the print 
   for ($i=0; $i<4 ; $i++) { 
   echo "<br>";
      for ($j=0; $j<4; $j++) { 
         echo $com[$i][$j] ."&nbsp;" ;
      }
      echo "<br>";
   }

// now we are hte printing thre for  ech loop

echo "<table border = '1px' cellpadding = '5px' cellspacing = '0px'>";
// if wwe want to make table heading
echo "<tr><th>s no</th>
<th>name</th>
<th>deginartion</th>
<th>sallary</th></tr>";
 foreach ($com as $valu) {
   echo "<tr>";
  
   foreach ($valu as $val) {
      echo "<td>".$val ."</td>";
   }
   echo "</tr>";
   
 }
 echo "</table>";


 // now we atr the multidimesional asociatve arry
 $collegemark = [
     "krishana" => [
      "physicas" => 45 ,
       "chemsitry" => 78 ,
        "biology" => 89
      ],
   "shuriti" => [
      "physicas" => 48 ,
       "chemsitry" => 35,
        "biology" => 9
      ],
  "manshi" => ["physicas" => 480 , "chemsitry" => 305 , "biology" => 59]
 ];


print_r($collegemark) ;

// now we are the printing the for each loop
 foreach ($collegemark as $key => $v1) {
   echo  "<br>". $key ;
   foreach ($v1 as $v2) {
      echo "&nbsp;".  $v2 ;
   }


 }

 // now we are the write the tabular form
 echo "<table border = '3px'>";
 foreach ($collegemark as $key => $v1) {
   echo "<tr>
   <td> $key </td>";
   foreach ($v1 as $v2) {
      echo  "<td> $v2 </td>";
   }
   echo "<tr>";


 }
 echo "</table>";

 //for ecah loop using the list function 

 $emp = [
   [
      1 , "krishana" , "manger" , 5040
   ],
   [2 , "mamata" , "poen" , 5980],
   [3 , "garima" , "branch manager" , 5340],
   [4 , "itisha" , "casiar" , 5780],
   [5 , "chadani" , "helper" , 5860]
   
];

foreach ($emp as list($id , $name ,$degination, $sallary)) {
   echo "$id $name $degination $sallary <br >";
} 

print_r($emp);

// now we are the printing as the table form 
echo "<table border = '3px' cellspacing = '0px'>";
// now we are the write the table heading
 
foreach ($emp as list($id , $name ,$degination, $sallary)) {
   echo "<tr><td>$id</td><td> $name</td><td> $degination</td<td> $sallary </td></tr>";
} 
echo "</table>";
   



// now we are the find the arry count

$food = array("chiken" , "matan" , "aalu" , "chilli");
// now we are the conunt the array
echo count($food);
// now we are the chack the size of the function 
echo sizeof($food ). "<br>";



echo "<p> there use the multi dimensional array and print size of the arry</p>";


// now we are the taking the multidimension array 
$foods = array(
         "vegifeuts" => array("orange" , "graps " , "apple" , "mango"),
         "purefrue" => array("carrot" , "pea" , "pineapple" , "orange")
) ; 


 // now ew are tghe printing the size of arry 


 echo count($foods) . "<br>";

 echo "<p>  HEARE USE ARE THE using the print multidimensional sub array </p><br>";
 
 echo count($foods , 1) . "<br>";
 echo "<p> we are the chack the  multidimensional sub aray </p><br>";
echo count($foods["purefrue"] , 1)."<br>";


//now we the print the array of taking countsizee in for loop

print_r($foods) . "<br>";

echo "<p> now we cont value store another variable and use in the for loop print the multidimensional array</p><br>";
$ln = count($foods);
$mn = count(["purefrue"] , 1);
$lk = count($food);


for ($i=0; $i < $lk ; $i++) { 
   echo $food[$i] . "<br>";
}
echo "<p> i tray the second method for printing </p><br>";

//now we print the multidimensional array with the for loop with the sinle asociatve array
foreach ($foods as $ks => $ver) {

   echo  $ks . " &nbsp;" ;
   foreach ($ver as $s1) {
      echo    $s1 . " &nbsp;" ;
   }
   echo "<br>";
}

echo "<p>  now i will print the balue in ther table form  </p><br>";

//now we print the multidimensional array with the for loop with the sinle asociatve array
echo "<table border = '1px'>";
foreach ($foods as $ks => $ver) {
    echo "<tr>";
   echo "<td>" . $ks ."</td>";
   foreach ($ver as $s1) {
      echo    "<td>" . $s1 . "</td>" ;
   }
   echo "</tr>";
   
}
echo "</table>";



echo "<p> <h3>now we are the using the print_count_value for counting the arry
      <h2>echo array_count_values()</h2>its cant return the any value becuse its return the array</h3> </p><br>" ;
print_r(array_count_values($food)) . "<br>";

echo "<p> <h3> now if the value are ripit in the arry then the value is repeted 
Array
(
    [chiken] => 2  //  example heare the value is the 2
    [matan] => 1
    [aalu] => 1
    [chilli] => 1
)
</h3> </p><br>" ;



 echo "<p><h2> now we learn the search in arrya</h2></p>";



 $shps = array("dhirendra" , "aman", "govind", "priyanka" ,"55", "gaurav" , "harshit" );
 
 
 
 echo in_array("dhirendra" , $shps) ."<br>";
// now we learn the in condation that statement 
if (in_array("dhirendra" , $shps)) {
    echo "we are the search element you are the eligibal for this sechuation <br>";

} else {
   echo "we can't find the learn of the search<br>"; 
}
if (in_array(55 , $shps , true)) {
   echo "we are the search element you are the eligibal for this sechuation ";

} else {
  echo "we can't find the learn of the search<br>"; 
}



 echo "<p><h1> we also search wholw array </h1><h3>im_array work this functiom
 </h3></p><br>";
 echo "<p><h1> we also search wholw array </h1><h3> examplwe
 </h3></p><br>";



 $myfaimaly = array(

           $shivam = array("mil" , "kic" , "shpschukr" , "shpsvaransi" , "coching"),
           $lovely = array( "mil" , "kic" , "shpschukr" , "shpsvaransi" , "coching")
 );
print_r($myfaimaly) . "<br>";
if (in_array($lovely , $myfaimaly)) {
   echo "find succefuly <br>";

} else {
  echo "can't not find succefuly <br>"; 
}
echo $myfaimaly[0][3]; 
echo "<p> now we learn the array search_function  its return the index of the array and key of the asociaty array</p>";


echo array_search("55" , $shps );
echo "<p> now we will make the asociaty array and print it </p>";
$shps = array("a" => "dhirendra" , "b" =>  "aman", "c" => "govind", "d" => "priyanka" ,"e"  => "55", "f" => "gaurav" , "g" => "harshit" );
echo array_search("55" , $shps );

 echo "<p><h1> now leanr array_replace function and array_replace_recurrsive()</h1><br>";
 // now we are the making tha array





 $ij =   array("mango" , "graps" , "banana" , "orange" , "sugercane" , "pineapple");
 $jk =   array("patao" , "tamato" , "pea");
 $kl =   array("rose" , "lotus");




 // now we the rplace array of the array_replace function 
 // now we will add the new variable amd place the new variable of the all value of the array

 $rt = array_replace($ij , $jk);
 // now we are the chack the array and print using print_r function 
 print_r($rt);


 // now we the replace the threee array and use it 
 $et  = array_replace($ij , $jk , $kl);
 // now we are print the array
 print_r($et);


 echo "<p> if the key value and index number same then change all index number the same value </p>";


 $sj =   array("mango" , "graps" , "banana" , "orange" , "sugercane" , 1 => "pineapple");
 $lr = array_replace($sj , $kl);
 
 // now we the print the array 
 print_r($lr);


 echo "<p> now we will learn the same thind in the asociatve array <br>
 <h1> we see both index are printing </h1> <p>";


 $ijt =   array("mango" , "graps" , "banana" , "orange" , "sugercane" , "pineapple");
 $jkt =   array( "a" => "patao" , "b" => "tamato" , "c" => "pea");
 $stk = array_replace($ijt , $jkt);

 // now we are the chack the print_r function
  print_r($stk);


  echo "<p> we use the multidimensional array <br>
 <h1> array_replace_recurrsive </h1> <p>";
 

  // we write the multidimensionl array 

  $collegemarkss = [
   "a" => [
    "physicas" => 45 ,
     "chemsitry" => 78 ,
      "biology" => 89
    ],
 "b" => [
    "physicas" => 48 ,
     "chemsitry" => 35,
      "biology" => 9
    ]
 ];

 $collegemarktt = [
   "a" => [
    "physicas" => 485 ,
     "chemsitry" => 768 ,
      "biology" => 809
    ],
 "b" => [
    "physicas" => 408 ,
     "chemsitry" => 305,
      
    ]
 ];


 $mkt = array_replace_recursive($collegemarkss , $collegemarktt);
 // now we are the print and chack this function 
 print_r($mkt);


  echo "<h1>array_pop for delete last element </h1>";

// now we are the make one array for the print pop opratin 
$flo = array("rose" ,"lotes" , "jaismin" , "lily");
array_pop($flo);

// now we are the printing 
print_r($flo);


  echo "<h1>array_push for delete last element </h1>";

  array_push($flo , "sunflower" , "whirerose");
  print_r($flo);


echo "<h1> now we are use the array_shift() function </h1>";
array_shift($flo);
// now we are the use the print-r function to chack the array
print_r($flo);

echo "<h1> now we are use the array_unshift() function </h1>";
array_unshift($flo , "sunflower");
print_r($flo);


// now we the learn the next lacturee
echo "<h1> next lecture use for array marging array_merge</h1>";

 $froute =   array("mango" , "graps" , "banana" , "orange" , "sugercane" , "pineapple");
 $froute_1 =   array("a" => "patao" , "b" =>  "tamato" , "c" => "pea");
 $froute_2 =   array("rose" , "lotus");
 echo "<h1> same key vlue are the overlap each other</h1>";

 // now we are the marging the array 
 $froute_4  = array_merge($froute , $froute_2); // we are the marge two are the more paraameter 

print_r($froute_4);

 // now we marge the the asociateve aary with the help of array_marge
$froute_5 = array_merge($froute_1 , $froute_2);


// now we the chack the array 

print_r($froute_5);


echo "<h1> now we are the above aaray in table form </h1>";

$mger = count($froute_4);
echo "$mger" ;
// now we will the make in table form 

echo "<table border = '3px'>";
echo "<tr>";

for ($i=0; $i < $mger ; $i++) { 
   echo "<td> $froute_4[$i]  </td>" ;

}
echo "</tr>";
echo "</table>";


echo "<h1> aarray_marge_combine <br> its use only in index array <br>
argument arry 1 is key and two is the value </h1>";

// we are using above array

$god = array("mahadev" ,"gadesha" ,"shiv" , "parvati" , "durga");
$god_2 = array("hanumanji" , "pavanshut" , "laxmi" ,"kalima" ,"maa");



// now are the marege two array 
 $god_3 = array_combine($god , $god_2);
 print_r($god_3) ;

 echo "<h1> we are the also marge the adding two areey 
 example array1+array2 </h1>";
 echo "<h1> now we are the using the array_marge_recuraive() </h1>";



 $god_3 = array( "a" =>  "mahadev" , "b" => "gadesha" ,"c" => "shiv" , "d" => "parvati" ,"e" => "durga");
$god_4 = array("b" => "hanumanji" ,"f" => "pavanshut" ,  "g" => "laxmi" ,"h" => "kalima" ,"i" => "maa");

 $god_5 = array_merge_recursive($god_3 , $god_4);
 print_r($god_5);
 echo "<h1> if teo key are the same then it cant be replace and make a new sub array in this formate </h1>";


 echo "<h1>  now we are the use the array_slice() functio</h1><br><h3> when we need
  the  array element and creat the new array then use the array_slice function </h3>";
  // now we are the make array and using the array_slice function

  $mishraloj = array("ambikesh" ,"abhikesh" ,"bhanu" ,"ashish" ,"vipin" , "gyanendea");
  // now make the new array using the array slice function 

  // store in the nwe variable
  $abhipatner = array_slice($mishraloj , 1 ,3 );
  // now we are the chacking the array 
  print_r($abhipatner);

  echo "now we are the see tjis is the successful work";


  echo "<h1> in this fuction also use the negative index for the taking valu in the bake side of the aary <br> just we take the example </h1>";
  $abhipatner_1 = array_slice($mishraloj ,-2,3);
  // now print the array using the print r funvtion 
  print_r($abhipatner_1);

  echo "<h1> array slice have the four parmeter fouth pramameter is deside the parent index are not 
  ]<br> it have the pass two value true or flase  true is the prents index and flase is the  new index of the new array  </h1>";



  $abhipatner_2 = array_slice($mishraloj ,2,3,true);
  // now we are the print_r function using the print array


  print_r($abhipatner_2);
  


  echo "<h1> now we are the use the accociatve array  and chack the array slice function </h1>";

// now making the array

$mishraloj_1 = array("a" => "ambikesh" , "b" => "bhanu" ,"12" => "abhishek" , "13" => "ashish");

// now we the use array slice function 
$abhipatner_4 = array_slice($mishraloj_1 , 1,2);
// now are the printing the array 
// now we tjhe use the print_r function and if the printing not systmetic then we are the using the pri function 


print_r($abhipatner_4);

 echo "now if we are the using the forth parameter ture the index value of the his parents ";
 echo " now we are the chack the value";


 $abhipatner_5 = array_slice($mishraloj_1 , 0 ,3 ,true);
 // now we are the printing value using the fourth parameter 

// we are the using the fourth parameter true and printing the value the print_r funvtion 
 print_r($abhipatner_5);

 echo "<h1> we are the see the its succfull work of the take parents index vlaue</h1>";
 


 echo "<h1> now we are the read the array_splice function in which provide the many function </h1>";
 echo "<h1> case 1</h1>";
 echo "<h2> delete any vlaue </h2>";


 // now we make the array for the delete array element 

 $food_1 =   array("chawmin" ,"maggi" ,"chaval" , "dal" ,"sabji" ,"roti");
// now we are the use array splice function 
 

array_splice($food_1 , 4);

// now chack the array after indexing 1 after 1 so all elemint are the delete 
// it fuctiomn no creat the new array for the storing it change the parent array element

print_r($food_1);

// now we are the try agian 
array_splice($food_1 , 3);

// now weare the agian print the array splice function 
print_r($food_1);

echo "<h1> if we are agiam using the array_splice after deleting element then its not work </h1>";

echo "<h1> case 2</h1>";
echo "<h2> when we are the pasing the third argument lenth then its desing what nubmer of element are the deleting</h2>";

$food_2 =   array("chawmin" ,"maggi" ,"chaval" , "dal" ,"sabji" ,"roti" ,"khir");
 
 print_r($food_2);
// now we are use the array_splice with the third argument

echo "<h1>  we are the see the two element are the delete  </h1>";
array_splice($food_2 , 2 ,2);
// now we are the print and aee the after the 2 index and 2 legth are the delete

print_r($food_2);


echo "now we are the see the the dal and chaval are the element are the delete";


 
  
































   ?>