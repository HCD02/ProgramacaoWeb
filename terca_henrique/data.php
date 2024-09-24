<?php
$intervalo_recarregamento = 1;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Data</title>
    <meta http-equiv="refresh" content="<?php echo $intervalo_recarregamento; ?>">
</head>

<body>
    <h1> Exemplos de Php no HTML </h1>
    <?php
    //Função usada para definir fuso horário padrão
    date_default_timezone_set("Asia/Dubai"); 
    $data_hoje = date ("d/m/Y h:i:s a", time());
    ?>
    <p text-align= "center"> Agora em Dubai: <?php echo $data_hoje ; ?> </p>

</body>
</html>
