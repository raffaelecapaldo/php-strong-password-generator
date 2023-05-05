<?php

function generatePwd($length)
{
    $password = '';
    $characters = [ //Array contenente tutti i caratteri usabili nella pwd
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
        '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '!', '"', '#', '$', '%', '&', '\'', '(', ')', '*', '?', '@', '_'
    ];
    for ($i = 1; $i < $length; $i++) {
        $randNumber = rand(0, count($characters) - 1); //Genera numero casuale da 0 a max indice array
        $password .= $characters[$randNumber]; //Aggiungi il carattere dell'indice estrato a password
    }
    return $password; //Ritorna la pwd

}

