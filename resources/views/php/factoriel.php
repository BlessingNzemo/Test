<?php

function factoriel(int $number) {
    $factoriel = 1;
    for ($i=$number; $i = 1; $i--) { 
        $factoriel = $factoriel * $i;
    }
    echo $factoriel;
}

factoriel(3);
