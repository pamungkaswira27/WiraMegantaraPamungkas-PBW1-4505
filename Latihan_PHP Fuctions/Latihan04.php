<?php
	
	function isPrime($number)
	{
		if ($number == 1)
			return false;

		if ($number == 2)
			return true;

		$div = sqrt($number);
		$div = floor($div);

		for ($i = 2; $i <= $div; ++$i)
		{
			if ($number % $i == 0)
				break;
		}

		if ($div == $i - 1)
			return true;
		else
			return false;
	}

	function checkPrimeNumber($min, $max)
	{
		if ($min >= $max)
		{
			echo "Min value should less than max value !";
			return;
		}

		$count = 0;
		for ($min; $min <= $max; $min++)
		{
			if (isPrime($min))
			{
				echo "$min ";
				$count++;
			}
		}

		echo "<br>Found $count prime number";
	}

	checkPrimeNumber(1, 11);