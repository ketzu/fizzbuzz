<?php
include '../src/fizzbuzz.php';

$failed = 0;
$succeeded = 0;
$runned = 0;

function testfizzbuzz($expected, $param) {
	$runned += 1;
	if(fizzbuzz($param)!=$expected){
		echo "fizzbuzz(".$param.") != ".$expected;
		$failed += 1;
	}else{
		$succeeded += 1;
	}
}

testfizzbuzz("Hello","");
testfizzbuzz(-4,"");
testfizzbuzz("","");

testfizzbuzz(2,2);
testfizzbuzz(4,4);
testfizzbuzz(7,7);
testfizzbuzz(7,7);
testfizzbuzz(11,11);
testfizzbuzz(34,34);
testfizzbuzz(1452,1452);

testfizzbuzz(3,"Fizz");
testfizzbuzz(6,"Fizz");
testfizzbuzz(9,"Fizz");
testfizzbuzz(12,"Fizz");
testfizzbuzz(18,"Fizz");
testfizzbuzz(71,"Fizz");
testfizzbuzz(99,"Fizz");

testfizzbuzz(5,"Buzz");
testfizzbuzz(10,"Buzz");
testfizzbuzz(20,"Buzz");
testfizzbuzz(25,"Buzz");
testfizzbuzz(35,"Buzz");
testfizzbuzz(40,"Buzz");
testfizzbuzz(505,"Buzz");

testfizzbuzz(15,"FizzBuzz");
testfizzbuzz(30,"FizzBuzz");
testfizzbuzz(45,"FizzBuzz");
testfizzbuzz(60,"FizzBuzz");
testfizzbuzz(90,"FizzBuzz");
testfizzbuzz(1500,"FizzBuzz");

echo "";
echo $runned." total tests executed.";

if($failed > 0) {
	echo $succeeded." test(s) ran successfully.";
	echo $failed." test(s) failed.";
	return -1;
}else{
	echo "All tests succeded.";
	return 0;
}