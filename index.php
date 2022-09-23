// Exercise 1 by Eric John Agapen

<?php
	echo "Twinkle, twinkle little star.";
?>

<?php
	$one = "Twinkle ";
	$two = "Star";

	echo $one . $two
?>



// Excercise 2 by Eric John Agapen

<?php
	$a = 10;
	$b = 7;

	echo $a + $b; 	
?>

<?php 
	$a = 10;
	$b = 7;

	echo $a - $b;
?>

<?php 
	$a = 10;
	$b = 7;
	echo $a * $b;
?>

<?php 
	$a = 10;
	$b = 7;

	echo $a / $b;
?>

<?php 
	$a = 10;
	$b = 7;
	echo $a % $b;
?>



//Exercise 3 by Eric John Agapen

<?php
$variable = 8;
echo "Value is now ". $variable. ".\r\n";
echo "Add 2. Value is now " . ($variable+=2) .".\r\n";
echo "Subtract 4. Value is now ".($variable-=4).".\r\n";
echo "Multiply by 5. Value is now " .($variable*=5).".\r\n";
echo "Divide by 3. Value is now " .($variable/=3).".\r\n";
echo "Increment value by one. Value is now " . ($variable+=1).".\r\n";
echo "Decrement value by one. Value is now " . ($variable-=1).".\r\n";
?>


//Exercise 4 by Eric John Agapen

<?php
$name="Harry";
$age = 28;
var_dump($name);
print_r($name);
echo "\n";
var_dump($age);
$name=NULL;
var_dump($name);
?>