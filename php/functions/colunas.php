<?php

function funcaochamadora($funcao, $text01,$funcao02,$text02) {
    // Verifica se a função existe
    if (function_exists($funcao)) {
        // Chama a função dinamicamente com os argumentos passados
        call_user_func_array($funcao, [$text01]);
        call_user_func_array($funcao02, [$text02]);

    } else {
        echo "A função $funcao não existe.";
    }
}


?>