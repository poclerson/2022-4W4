<?php
    function le_titre_filtre($titre) {
        return substr(substr($titre, 8), 0, strrpos(substr($titre, 8), '('));
    }

    function le_sigle($titre) {
        return substr($titre, 0, 7);
    }

    function la_duree($titre) {
        return str_replace(
            ')', '', str_replace(
                '(', '', substr(
                    $titre, strrpos(
                        $titre, '('))));
    }
?>