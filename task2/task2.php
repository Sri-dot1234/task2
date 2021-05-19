
<?php   //1.leap year

 $year = 2000;

    
    if ($year % 4 == 0){
        print(" Leap Year");
    }
   
    else if ($year % 400 == 0){

        print("Leap Year");
    }
         
    else{
        print("Not a Leap Year");
    }

echo "<br>";

   // 2.program to concatenate strings

    echo "Tajmahal is beatifull palce"."hello world"."<br>";


   //3. program for given number is even or odd number


$n = 11;
if($n % 2 == 0){
   echo "Even"; 
}
   
    else{
     echo "Odd"."<br>";  
    }
    

    
   


//5.program to check given character is Vowel and consonant by using switch

     
    $character = 'u';  
    switch ($character)  
    {     
        case 'a':   
            echo "Given character is vowel";  
            break;  
        case 'e':   
            echo "Given character is vowel";  
            break;  
        case 'i':   
            echo "Given character is vowel";  
            break;  
        case 'o':   
            echo "Given character is vowel";  
            break;    
        case 'u':   
            echo "Given character is vowel"."<br>";  
            break;  
         default:   
            echo "Given character is consonant"."<br>";  
            break;  
    }  




    //6. program for array with all the php trainees and print 5th member name

    $a=array('srivani','keerthana','apoorva','chandra','venky' );
    echo $a[4];
    echo "<br>";


    //7. program for array with name and email address and print your email id

    $arr=array( array("name"=>"srivani" ,"email"=>"srivanivallal@gmail.com"), 
                 array("name"=>"kerrthana","email"=>"keerthana@gmail.com" ));
    print_r($arr[0]["email"]);
    echo "<br>";


    //8.program for array with frontend and backend languages and with their frameworks and print them differently
   $FL=array("html","css","javascript","jquery","boootstrap","php","mysqli","wordpress","codeignter");

foreach($FL as $item){
    echo  $item . "<br>";
}

//9.program for appending the strings
 $str1="srivani";
 $str1.="bhavani";
echo $str1;
echo "<br>";

//10. program to if variable is equals to then print some code
   $b=10;
if ($a > $b) {
  echo "a greater b";
  echo "<br>";
  $b = $a;
}

//4.program for student marks that show the fail,>70 then A grade,60 to 70 B grade, less than 60 C garde? 

$marks = array(25, 65, 46, 98, 78, 65);
$max = sizeof($marks) * 100;
$total = 0;

for ($i = 0; $i < sizeof($marks); $i++) 
{
    $total =$total+ $marks[$i];
}
$percentage=(($total) / $max) * 100;


if ($percentage >= 70)
{
   echo " grade 'A'";
}
else if ($percentage >= 60 && $percentage <=70)
    {
       echo  " grade 'B'"."<br>";
    }

if ($percentage<= 60)
{
   echo " grade 'C'";
}

?>    




   