<?php


$levels = array(
	1 => array(
		'name' => 'Level 1',
		'desc' => 'this is the first level'
	),
	2 => array(
		'name' => 'Level 2',
		'desc' => 'You are at level 2!'
	),
	3 => array(
		'name' => 'Level 3',
		'desc' => 'this is the final level',
		'points' => array (1 => 1000)
	)
);

$levels[4] = '';

echo '<pre>', print_r($levels, true), '</pre>';
echo $levels[3]['points'][1];

for ($i=0; $levels.length; $i++) {
	echo $levels[$i]['name'] . " ";
}

?>