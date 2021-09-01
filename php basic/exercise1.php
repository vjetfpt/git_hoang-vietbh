<?php
function checkVaildString($string)
{
	$string = " " . $string;
	$check1 = strpos($string, "book");
	$check2 = strpos($string, "restaurant");
	if ($check1 && !$check2 || !$check1 && $check2) {
		$count = substr_count($string, '.');
		echo "Chuỗi hợp lệ. chuỗi bao gồm $count câu!";
	} else {
		echo "Chuỗi không hợp lệ";
	}
}
checkVaildString("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.");
