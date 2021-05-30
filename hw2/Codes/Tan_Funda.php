<!DOCTYPE html>
<html>
<body>

<?php

//For
//String
$string = "apple";
for ($i = 0; $i < 5; $i++)
	echo "$string[$i]";

//Array
$array = array(1, 2, 3, 4, 5);
for ($i = 0; $i < 5; $i++)
	echo "$array[$i]";

//For-each
//Array
foreach ($array as $x)
    echo "$x";

//Associative Array
$names = array("Ali"=>"0", "Veli"=>"1");
foreach ($names as $x)
    echo "$x";

//While
//String
$i = 0;
while($i < 5){
	echo "$string[$i]";
    $i++;
}

//Array
$i = 0;
while($i < 5){
	echo "$array[$i]";
    $i++;
}

//Do-While
//String
$i = 0;
do{
	echo "$string[$i]";
    $i++;
}while($i < 5);

//Array
$i = 0;
do{
	echo "$array[$i]";
    $i++;
}while($i < 5);

//The way that next item accessed
//For
//Loop condition is tested before the execution of for loop
//String
$string = "apple";
for ($i = 0; $i < 5; $i++){
	echo "$string[$i]";
    echo "Inside for loop";
    $i = 10;
}

//Array
$array = array(1, 2, 3, 4, 5);
for ($i = 0; $i < 5; $i++){
	echo "$array[$i]";
    echo "Inside for loop two";
    $i = 10;
}

//While
//Loop condition is tested before the execution of while loop
//String
$i = 0;
while($i < 5){
	echo "$string[$i]";
    echo "Inside while loop";
    $i = 10;
}

//Array
$i = 0;
while($i < 5){
	echo "$array[$i]";
    echo "Inside while loop two";
    $i = 10;
}

//Do-While
//Loop condition is tested after the execution of while loop
//String
$i = 0;
do{
	echo "$string[$i]";
    $i = 10;
    echo "Inside do while loop";
}while($i < 5);

//Array
$i = 0;
do{
	echo "$array[$i]";
    $i = 10;
    echo "Inside do while loop two";
}while($i < 5);
?>

</body>
</html>
