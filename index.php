
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
$sum = 0;
$nPari = 0;

//risoluzione con costrutto foreach
foreach($numbers as $number){ 
    if($number % 2 == 0){
        $sum+= $number;
        $nPari += 1;
    };
}

echo $average = $sum/$nPari . "\n"; 


/* risoluzione con costrutto for
for ($i = 0; $i < count($numbers); $i++) { 
    if($numbers[$i] % 2 == 0){
        $sum += $numbers[$i];
        $nPari += 1;
    }
};

echo $average = $sum/$nPari;  */
?>