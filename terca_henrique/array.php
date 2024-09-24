<?php
    $valores=[7,2,8,5,1,3];
    $nomes=["Bia","Ana","Karol","Eliana"];

    for($x=0; $x<6; $x++){
        echo $valores[$x];
    }

    echo "<br>";

    $x=0;
    while($x < 6){
        echo $valores[$x];
        $x++;
    }

    echo "<br>";

    $notas=[
        "Primeira nota:" =>8,
        "Segunda nota:" =>5,
        "Terceira nota:" =>4,
        "Quarta nota:" =>9
    ];

    foreach($notas as $chave=>$valor){
        echo "$chave $valor<br>"; 
    }


    $pessoa=array(
        "nome" => "Maria",
        "idade" => 21,
        "cidade" => "São Paulo"
    );

    foreach($pessoa as $chave => $valor){
        echo "Campo - $chave: $valor<br>";
    }




?>