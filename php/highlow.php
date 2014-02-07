<?php

//Guess a number between 1 & 100.

$rand = rand(1, 100);

$tries = 0;

//Ask for user's input.

do {

	fwrite(STDOUT, 'Guess a number 1-100 ');

	$guess = fgets(STDIN);

//If user's guess is less than the number, output "HIGHER".
	
	$tries++;

	if ($guess == 37) {fwrite(STDOUT, "PREDICTABLE TRY AGAIN \n");}

	elseif ($guess < $rand) {fwrite(STDOUT, "HIGHER \n");}

//If user's guess is greater than that the number, output 
//	"LOWER".

	elseif ($guess > $rand) {fwrite(STDOUT, "LOWER \n");}

	elseif ($guess == $rand) {fwrite(STDOUT, "WELL DONE! \n");}

} 	while ($guess != $rand);

fwrite(STDOUT, "IT TOOK YOU $tries TRIES \n");

//If user guesses the correct number, output "WELL DONE!"

?>