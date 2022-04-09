<?php 

	$string = array(
		"Saya adalah Abdullah",
		"Saya punya seekor kucing yang sangat lucu",
		"Setiap hari ku ajak dia bermain"
	);

	$string[0] = str_replace("Abdullah", "Abdurrahman", $string[0]);
	$string[1] = str_replace("kucing", "bebek", $string[1]);
	$string[1] = str_replace("lucu", "gemuk", $string[1]);
	$string[2] = str_replace("bermain", "berenang", $string[2]);

	foreach ($string as $str)
	{
		echo $str . "<br>";
	}