<?php

    require_once __DIR__ . "/listaProdutos.php";

    foreach($produtos as $produto){
        print_r($produto['nome']);
    }


?>