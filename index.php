<?php

function SeculoAno($ano){
    $valor = $ano / 100;
    if(is_float($valor)){
        $seculo = intval($valor) + 1;
    }else{
        $seculo = intval($valor);
    }

    echo "O ano {$ano} é do século {$seculo}";
}

SeculoAno(1801);