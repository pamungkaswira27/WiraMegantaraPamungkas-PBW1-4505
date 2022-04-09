<?php

	$string = "D3 Rekayasa Perangkat Lunak Aplikasi";

	$str1	= substr($string, 3);
	$str2	= substr($string, -8);
	$str3	= substr($string, 3, 24);

	echo $str1 . "<br>" . $str2 . "<br>" . $str3;