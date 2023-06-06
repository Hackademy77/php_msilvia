<!-- //Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere -->



<?php

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
];


$users = [
    ["name" => "Davide", "surname" => "Cariola", "gender" => "M"],
    ["name" => "Matteo", "surname" => "Di Cosmo", "gender" => "M"],
    ["name" => "Carla", "surname" => "Delfine", "gender" => "F"],
    ["name" => "Mariasilvia", "surname" => "Giacalone", "gender" => "F"],
  ];


foreach($users as $user){
    if ($user["gender"] == "M"){
    echo "Buongiorno Sig. $user[name] $user[surname] \n";
    } else if ($user["gender"] == "F"){
        echo "Buongiorno Sig.ra $user[name] $user[surname] \n";
    } else {
        echo "Buongiorno $user[name] $user[surname] \n";
    };
}


?>