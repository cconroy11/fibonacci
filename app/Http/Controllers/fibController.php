<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fibController extends Controller
{
    function show($userNum) {
		$result = $this->fib(intval($userNum));
    	return response()->json($result, 200);
    }

    function fib($number) {

	    $fib = 1;
	    $next = 0;
	    $prev = 0;
		$nice_string = '';
		
		if($number == 0) {
			return 'Nahhhhhh man';
		}

	    while($next <= $number) {
	        $nice_string = $nice_string . $fib . ', ';
	        $next = $fib + $prev;
	        $prev = $fib;
	        $fib = $next;
	    }

	    return trim($nice_string, ', ');
	
    }
}
