<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOP in PHP</title>
</head>
<body>
    <?php
   //for loop-entry control loop
   for($i=0;$i<=10;$i++){
    echo $i ."<br>";
   }
   //while loop-entry control loop
   $var=12;
   while($var>=1){
    echo $var."<br>";
    $var--;
   }
   //do while loop run atleast once -exit control loop
   $var1=100;
  do{
    echo $var1."<br>";
    $var1--;
  }while($var1!=0);
 // for each loop -used for accessing each element of array 
  $arr=["raju","khanal"];
  foreach($arr as $ar){
echo $ar."<br>";
  }
    
  

?>
</body>
</html>