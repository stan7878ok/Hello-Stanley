<?php
function is_leap_year($year)
{
	if ($year % 4 == 0) {
		if ($year % 100 != 0 || ($year % 100 == 0 && $year % 400 == 0)) {
			return true;
		}
	}
	return false;
}

echo "<h1>Web Programming Form Task 4 - Leap Year </h1>";
$input = $_GET["year"];

if (is_numeric($input)) {
	$is_leap = is_leap_year($input);
	if ($is_leap) {
		echo "this is a leap year";
	} else {
		echo "This is not a leap year";
	}
} else {
	echo "Please enter a valid year.";
}
