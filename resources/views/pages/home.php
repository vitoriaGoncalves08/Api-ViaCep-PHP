<?php
    include_once('../../../app/Controller/pegaCep.php');
    $json_data = pegarEndereco();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    
    <div class="container">
        <div class="form">
        <h1>Localização</h1>
            <form action="." method="post">
                <input type="text" placeholder="Digite seu CEP" id="cep" name="cep" value="<?php echo $json_data->cep ?>">
               
                <input type="text" placeholder="Digite seu Logradouro" id="log" name="log" value="<?php echo $json_data->logradouro ?>">
                
                <input type="text" placeholder="Digite sua Bairro" id="bair" name="bair" value="<?php echo $json_data->bairro ?>">
            
                <input type="text" placeholder="Digite sua Localidade" id="loca" name="loca" value="<?php echo $json_data->localidade ?>">
              
                <input type="text" placeholder="UF" id="uf" name="uf" value="<?php echo $json_data->uf ?>">
               
                <input type="text" placeholder="DDD" id="ddd" name="ddd" value="<?php echo $json_data->ddd ?>">
                
                <button type="submit">Evento</button>
            </form>
        </div>
        <div class="vetor">
            <img src="../../img/Location review-amico.svg" alt="Location">
        </div>
    </div>
</body>

</html>