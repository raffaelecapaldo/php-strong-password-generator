<?php

function generatePwd($length)
{
    $index = 0;
    $password = '';
    $characters = [ //Array contenente tutti i caratteri usabili nella pwd
        ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
        ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'],
        ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
        ['!', '"', '#', '$', '%', '&', '\'', '(', ')', '*', '?', '@', '_']
    ];
    /* La password ora è più randomica, aggiunge in ordine ognuna delle quattro categorie di caratteri,
    così assicurandosi anche di averli tutti dei vari tipi nella pwd finale */
    for ($i = 0; $i < $length; $i++) {
        if ($index === count($characters)) {//Raggiunto indice massimo riporta index a 0
            $index = 0;
        }
        $randNumber = rand(0, count($characters[$index]) - 1); //Genera numero casuale da 0 a max indice array
        $password .= $characters[$index][$randNumber]; //Aggiungi il carattere dall'array attuale da un indice casuale
        $index++;//Incrementa indice
    }
    return $password; //Ritorna la pwd

}

