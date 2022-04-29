<?php
    $mes = $_POST ["numero"];

    if ($mes >= 1 and $mes <= 6) {

    	echo "voce esta no primeiro semestre";
    } elseif ($mes >= 7 and $mes <= 12) {

    	echo "voce está no segundo semestre";
    } else {

    	echo "nao existe mês com este numero";
    };