<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataType</title>
</head>
<body>
    <h2>Data type</h2>
    <?php
    $str="hello";//string
    $int=123445567788;//integer
    $float=1.1; //float
    $isTrue=true;// boolean
    $colors=array("ram","shyam","geeta");//array
    echo $colors[0];
    
    class students{
        public $name="raju";
        

    }
    $s=new students();
    echo $s->name;//objects 

    //multi-dimensional array
    $name=array(
        array("raju",18),
        array("shyam",20),
        array("hey",100000)
    );
    echo $name[0][1];//output-raju
// array of object

$users=[
    (object)["id"=>1,"name"=>"raju","age"=>100],
    (object)["id"=>2,"name"=>"khanal","age"=>20000]
];
foreach($users as $user){
    echo $user->id."-".$user->name."-".$user->age."<br>";
}

    ?>

</body>
</html>