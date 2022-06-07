<?php

namespace Core;

class request
{
    public function getQueryParams()
    {
        var_dump($_REQUEST);
        // var_dump($_REQUEST);
        $data = []; //INITIALISE UN TABLEAU VIDE POUR LE REMPLIR AVEC LA CLE ET LA VALEUR DU FOREACH
        if (!empty($_REQUEST)) {
            foreach ($_REQUEST as $key => $value) {
                $value = htmlspecialchars(
                    trim($value, "\n\r\t\v\x00"),
                    ENT_QUOTES,
                    'UTF-8'
                ); //SUPPRIME LES ESPACE AU DEBUT ET A LA FIN ET CONVERTIT LES CARACTERE SPECIAUX EN HTML
                $value = stripslashes($value); //SUPPRIME LES BACKSLASH
                $data[$key] = $value; //LA KEY ET EGALE A SA VALEUR
            }
        }
        // var_dump($data);
        return $data; //VERIFIE TOUT LES INPUTS, ENSUITE RENVOIE UN TABLEAU DES INPUT VERIFIER DANS LE CONSTRUCTEUR DU
        //CONTROLLER
    }
}
