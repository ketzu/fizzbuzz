<?php
/* 
 * This is a simple FIzzBuzz. Don't use this in production!
 * If your bussiness required advanced fizzbuzz solutions, feel free to hire me.
 * 
 * Regards, David.
 */
function fizzbuzz($fb) {
	if($fb<1){
		return "";
	}else if($fb % 3 == 0 && $fb % 5 == 0){
		return "FizzBuzz";
	}else if($fb % 3 == 0){
		return "Fizz";
	}else if($fb %5 == 0){
		return "Buzz";
	}else{
		return $fb;
	}	
}