<?php 

function sobiranje($a, $b){
	return $a + $b;
}

function _test_sobiranje($data){
	foreach ($data as $d) {
		$res = sobiranje($d['a'], $d['b']);

		if($res == $d['expected']){
			echo '<span style="color: green;">Success!</span><br/>';
		} else {
			echo '<span style="color: red;">Fail!</span><br/>';
		}
	}
}

$data = [
	[
		'a' => 2,
		'b' => 3,
		'expected' => 5
	],
	[
		'a' => 3,
		'b' => 8,
		'expected' => 11
	],
	[
		'a' => 5,
		'b' => 32,
		'expected' => 37
	],
	[
		'a' => 172,
		'b' => 45,
		'expected' => 217
	],
	[
		'a' => 25,
		'b' => 21,
		'expected' => 46
	],
	[
		'a' => 90,
		'b' => 3,
		'expected' => 93
	],
	[
		'a' => 12,
		'b' => 31,
		'expected' => 43
	],
	[
		'a' => 4,
		'b' => 3,
		'expected' => 7
	],
	[
		'a' => 1,
		'b' => 1,
		'expected' => 2
	],
	[
		'a' => -2,
		'b' => 3,
		'expected' => 1
	]
];

_test_sobiranje($data);

?>