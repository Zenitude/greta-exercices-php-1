<?php

// Exercice 1
$nombre1 = readline('Saisissez un nombre entre 1 et 3 :');

if($nombre1 < 1 || $nombre1 > 3)
{
	$nombre1 = readline('Saisissez un nombre entre 1 et 3 :');
}
else
{
	echo "C'est bon !; ";
}

// Exercice 2

$nombre2 = readline('Saisissez un nombre entre 10 et 20 : ');

if($nombre2 < 10)
{
	echo 'Plus grand !';
}
elseif($nombre2 > 20)
{
	echo 'Plus petit !';
}
else
{
	echo "C'est bon !; ";
}

// Exercice 3

$nombre3 = readline('Saisissez un nombre : ');

	echo ($nombre3+1).PHP_EOL;
	echo ($nombre3+2).PHP_EOL;
	echo ($nombre3+3).PHP_EOL;
	echo ($nombre3+4).PHP_EOL;
	echo ($nombre3+5).PHP_EOL;
	echo ($nombre3+6).PHP_EOL;
	echo ($nombre3+7).PHP_EOL;
	echo ($nombre3+8).PHP_EOL;
	echo ($nombre3+9).PHP_EOL;
	echo ($nombre3+10).PHP_EOL;

// Exercice 4

$nombre4 = readline('Saisissez un nombre : ');

for($i = $nombre4+1 ; $i <= $nombre4 + 10 ; $i++)
{
	echo $i.PHP_EOL;
}

// Exercice 5

$nombre5 = readline('Saisissez un nombre : ');

for($i = 1 ; $i <= 10 ; $i++)
{
	$result = $i * $nombre5;
	echo $i.' x '.$nombre5.' = '.$result.PHP_EOL;
}

// Exercice 6

$tab6 = [1,2,3,4,5,6];

echo 'La somme de ce tableau est '.array_sum($tab6).'; ';

// Exercice 7
$tab7 = [];

for($i = 0 ; $i < 20 ; $i++)
{
	$nombre7 = readLine('Saisissez un nombre : ');
	array_push($tab7, $nombre7);
}
$key = array_search(max($tab7), $tab7);
echo 'La valeur max est '.max($tab7).' qui correspond au '.($key+1).'ème nombre; ';

// Exercice 8

$tab8 = [];

do
{
	$nbr8 = readLine('Saisissez un nombre : ');
	array_push($tab8, $nbr8);
}
while($nbr8 != 0);

$key8 = array_search(max($tab8), $tab8);
echo 'La valeur max est '.max($tab8).' qui correspond au '.($key8 + 1).'ème nombre; ';

// Exercice 9
$tab9 = [];

do
{
	$nbr9 = readLine('Saisissez un nombre : ');
	array_push($tab9, $nbr9);
}
while($nbr9 != 0);

$total = array_sum($tab9);

echo 'Le client doit '.$total.' euros.; ';

$paye = readLine('Indiquez la somme versée : ');

$diff = $paye - $total;

if($diff < 0)
{
	echo 'Le client nous doit encore '.$diff.'.';
}
else
{
	echo 'Nous devons rendre au client '.$diff.'; ';


	$reste = $diff - ($diff % 10);
	$calc = $reste / 10;
	echo 'Nous lui rendons '.$calc.' billets de 10; ';

		
	$reste2 = $diff - ($calc * 10);
	$calc2 = intdiv($reste2,5);
	echo 'Nous lui rendons '.$calc2.' billets de 5; ';

	$calc3 = ($reste2) - ($calc2 * 5);
	echo 'Nous lui rendons '.$calc3.' pièces de 1; ';

}
