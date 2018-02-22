<?php
	echo "Joe Palella Week 4 Homework<br><br>";

	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	echo "<br><br>";

	$date=str_replace("-", "/", $date);
	echo "2) \$date with - repalced with $date<br>";

	$temp = strcmp($date, $tar);
	echo "3) \$date compared to \$tar: ";
	if ($temp>0) {
		echo "The Future<br>";
	}else if ($temp<0) {
		echo "The Past<br>";
	}else {
		echo "The Oops<br>";
	}

	$firstSpot = strpos($date, "/");
	$secondSpot= strpos($date, "/", $firstSpot+1);
	echo '4) Positions of "/" in $date: '.$firstSpot." ".$secondSpot."<br>";

	$testarray = explode("/", $date);
	echo "5) Number of Words in \$date: ".sizeof($testarray)."<br>";

	echo "6) Length of \$date String: ".strlen($date)."<br>";
	
	$firstLetter = substr($date, 0,1);
	echo "7) ASCII value of first char in \$date string: ".ord($firstLetter)."<br>";

	$last2Letter = substr($date, $secondSpot+1);
	echo "8) Last two Chars in \$date: ".$last2Letter."<br>";
	
	echo "9) Date Array: ";
	print_r($testarray);
	echo "<br>";

	echo "10) Leap Years <br>";
	foreach ($year as $singleyear) {
		echo $singleyear;
		if($singleyear%4==0 && ($singleyear%100!=0 || $singleyear%400==0)){
			echo ": True | ";
		}else{
			echo ": False | ";

		}
	}
?>