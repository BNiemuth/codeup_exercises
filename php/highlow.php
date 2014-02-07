<?php

if ($argc == 3) {

//Get the starting number.

$min = $argv[1];

//Get the ending number.

$max = $argv[2];
}

//Guess a number between 1 & 100.

$rand = rand($min, $max);

$tries = 0;

//Ask for user's input.

do {

	fwrite(STDOUT, "Guess a number $min-$max ");

	$guess = fgets(STDIN);

//If user's guess is less than the number, output "HIGHER".
	
	$tries++;

	if ($guess == 37) {fwrite(STDOUT, "YOU REALLY THOUGHT IT WOULD BE THAT EASY? TRY AGAIN \n");}

	elseif ($guess < $rand) {fwrite(STDOUT, "HIGHER \n");}

//If user's guess is greater than that the number, output 
//	"LOWER".

	elseif ($guess > $rand) {fwrite(STDOUT, "LOWER \n");}

//If user guesses the correct number, output "WELL DONE!"

	elseif ($guess == $rand) {fwrite(STDOUT, "WELL DONE! \n");}

} 	while ($guess != $rand);

	fwrite(STDOUT, "IT TOOK YOU $tries TRIES. \n\n");

?>