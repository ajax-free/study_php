<?php
// 2c.Написать функцию которая выводит на экран простые числа (в математике числа называются простыми которые целочисленно делятся только на себя и на единицу) в заданном диапазоне. Диапазон передается в функцию в качестве массива. Так же вывести на экран отдельным блоком все составные числа (не простые).

$range = [2,5,8,13,19,22,1,38,45,99,45,0,111,56,59,127];

function simple($v){
	// перебираем возможные делители от 2 до sqrt(n)
	for($x=2; $x<=sqrt($v); $x++){ 
		// составное
		if($v%$x==0) 
			return false;
	}
	// простое
	return true;
}

foreach ($range as $value) {
	if($value != 0 && $value != 1){
		if(simple($value)){
			$sd[] = $value;
		} else {
			$cd[] = $value;
		}
	}
}

echo "Простые числа: ".implode(",",$sd)."<br />";
echo "Составные числа: ".implode(",",$cd)."<br />";


?>