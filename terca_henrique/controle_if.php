<?php
    $mes=5;

    if ($mes==1 || $mes==12){
        echo "Férias";   
        echo "<br>";
        echo "Início ou final do ano";
    }
    else{
        echo "Trabalho";
        echo "<br>";
        echo "Ganhar dinheiro";
    }
   
     echo "<br>";
    
    $sexo='f';
    
    if($sexo=='F' || $sexo=="f")
      echo "Sexo feminino";
    
      else
      echo "Sexo indefinido";

?>