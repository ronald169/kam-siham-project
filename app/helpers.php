<?php

    if (!function_exists('trouverValeur')) {
        function trouverValeur($cle, $tableau) {
            if (array_key_exists($cle, $tableau)) {
                return $tableau[$cle];
            } else {
                return null; // Ou vous pouvez choisir de retourner une valeur par défaut, ou définir un comportement particulier en cas de clé non trouvée.
            }
        }
    }

    if (!function_exists('downloadLink')) {
        function downloadLink($link) {
            return '/storage/' . $link;
        }
    }

?>
