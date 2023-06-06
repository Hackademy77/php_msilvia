<?php
/* Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY77". */


for ($i=1; $i <= 100 ; $i++) { 
    
    switch (false) {
        case $i % 3 || $i % 5;
            echo "HACKADEMY77 \n";
            break;
        case $i % 3:
            echo "PHP \n";
            break;
        case $i % 5:
            echo "JAVASCRIPT \n";
            break;
        default:
            echo "$i \n";
            break; 
    }; 
};
 */
?>