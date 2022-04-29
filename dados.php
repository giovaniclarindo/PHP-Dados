<?php
    $mes = $_POST ["numero"];

    if ($mes >= 1 and $mes <= 6) {

    	echo "Você está no primeiro semestre";
    } elseif ($mes >= 7 and $mes <= 12) {

    	echo "Você está no segundo semestre";
    } else {

    	echo "Não existe mês com este número";
    };
