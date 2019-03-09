<?php

//echo test_fn();	// output: test function: no_in
echo test_fn("Moo");	// output: test function: Moo

function test_fn($in="no_in") {
	return "test function: $in";
}

?>