<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
<div>
    <h2>Operator</h2>
    <?php
    $var1=12;
    $var2=13;
    //arithmetic operator
    echo $var1+$var2;
    echo "<br>";
    echo $var1-$var2;
    echo "<br>";
    echo $var1/$var2;
    echo "<br>";
    echo $var1*$var2;
    echo "<br>";

    //assignment operator
    $var1+=1;
    echo $var1;
    echo "<br>";

    $var1-=1;
    echo $var1;
    echo "<br>";

    $var1/=2;
    echo $var1;
    echo "<br>";

    $var1*=12;
    echo $var1;
    echo "<br>";


    //logical operator
    var_dump((true)||(true));//or
    echo "<br>";
    var_dump((false) && (false));//and
    echo "<br>";
    var_dump(!true);//not
    echo "<br>";
    var_dump((true) xor (false));//exclusive or

    //comparision operator
    $v=1;
    $v1=2;
    var_dump($v==$v1);//true if both are true
     echo "<br>";
    var_dump($v!=$v1);//true if not equal
     echo "<br>";
    var_dump($v>=$v1);//true if v is greater or equal to v1
     echo "<br>";
    var_dump($v<=$v1);//true if v1 is greater or equal to v;
     echo "<br>";

     //increment decrement
     $variable1=12;
    echo $variable1++;
     echo "<br>";
    echo $variable1; //post increment 
     echo "<br>";
    echo $variable1--;
     echo "<br>";
    echo $variable1;//post decrement
     echo "<br>";
    echo ++$variable1;//pre increment
     echo "<br>";
    echo --$variable1;//pre decrement
     echo "<br>";
    //string concatination operator
   $str="raju";
   $str2="khanal";
   echo $str."  ".$str2;
    echo "<br>";
   echo "my name is $str and my sur name is $str2";
    echo "<br>";
    ?>
</div>
    
</body>
</html>