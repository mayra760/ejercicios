<?php

    $des=$_GET['desicion'];
    $valor=$_GET['valor'];
    
    include('clase.php');
    echo Retornar::retornarDato($des, $valor);
