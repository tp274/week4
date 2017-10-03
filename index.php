<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";
$date = str_replace("-","/",$date);
echo "new date :". $date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
print("<br>");

$comparisionResult = strcmp($date,$tar);
if($comparisionResult > 0){
echo "The future <br>";
}
else if ($comparisionResult < 0){
echo 'The past';
}
else {
echo "Oops";
}

$slashChar   = '/';
$pos = strpos($date, $slashChar,0);
echo "First occurrence : ". $pos." ".strpos($date,$slashChar,$pos+1) . "<br>";

echo "The word count of \$date : ". str_word_count($date) . "<br>";
echo "The string length of \$date :" .strlen($date) . "<br>";

$string = "Hello";
$firstCharacter = $string[0];
echo "The first character of Input String :" .$string." is ".$firstCharacter." and ASCII Value is  ". ord($firstCharacter)."<br>";

echo "The Last two characters in \$date : " .substr($date,-2)."<br>";
echo "\$date split by separator : ";
print_r(explode("/",$date));

print("<br>");

foreach ($year as $value){

switch(true){

case (($value % 400) == 0) :
echo "True ";
break;

case (($value % 100) == 0):
echo "False ";
break;

case (($value % 4) == 0):
echo "True ";
break;

default :
echo "False ";
break;
}

}

