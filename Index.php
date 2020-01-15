<?php
$a = [];
$bilangan = 89;

for($i=1;$i <= $bilangan; $i++){
	if($bilangan % $i == 0){
	array_push($a, $i);
	}
}
echo $bilangan." bisa dibagi dengan ";
foreach($a as $b){

echo $b.",";
}

echo "<br>";
if(count($a) > 2){
echo $bilangan." BUKAN BILANGAN PRIMA";
}else{
echo $bilangan." ADALAH BILANGAN PRIMA";
}
