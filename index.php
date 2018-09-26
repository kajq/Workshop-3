<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

ksort($ceu);
foreach($ceu as $x => $x_value) {
    echo "La capital de " . $x . " es " . $x_value;
    echo "<br>";
}

echo "=====================================================================================================================================================";
echo "<br>";

$nums = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65 , 64, 68, 73, 75, 79, 73);
$media = array_sum($nums)/count($nums);
echo "La temperatura promedio es = ".$media;
echo "<br>";
echo "Temperaturas Bajas: ";
sort($nums); 
foreach($nums as $x => $x_value) {
    echo $x_value.", ";
	if ($x == 6){
		break;
	}
}
echo "<br>";

rsort($nums);
echo "Temperautas Altas: ";
foreach($nums as $x => $x_value){
	echo $x_value.", ";
	if ($x == 6){
		break;
	}
}
?>