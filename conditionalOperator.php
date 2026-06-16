<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Operator</title>
</head>
<body>
    <?php
$name="raju";
$surname="khanal";
//if-else-if
if($name=="raju" &&$surname=="khanal"){
    echo "Login";
}
elseif($name=="raju"&&$surname=="Khanal"){
    echo "Hello";
}
else{
    echo "Something went wrong";
}
//ternary operator
echo $name=="raju"?"Login":"access-denied";
//switch statement
switch($name){
    case "raju":
        echo "login";
        break;
    case "hello":
         echo "access denied";
         break;
   default:
        echo "something went wrong";
}


?>
</body>
</html>