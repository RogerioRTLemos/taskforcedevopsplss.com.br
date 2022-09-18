<?php

$chave = '0995e899'; 

// Resgata o IP do usuario
$ip = $_SERVER["REMOTE_ADDR"];


/* Nome da Cidade */
$dados = hg_request(array(
  'city_name' => 'Ponta Grossa'
), $chave);


function hg_request($parametros, $chave = null, $endpoint = 'weather'){
  $url = 'http://api.hgbrasil.com/'.$endpoint.'/?format=json&';
  
  if(is_array($parametros)){
    // Insere a chave nos parametros
    if(!empty($chave)) $parametros = array_merge($parametros, array('key' => $chave));
    
    // Transforma os parametros em URL
    foreach($parametros as $key => $value){
      if(empty($value)) continue;
      $url .= $key.'='.urlencode($value).'&';
    }
    
    // Obtem os dados da API
    $resposta = file_get_contents(substr($url, 0, -1));
    
    return json_decode($resposta, true);
  } else {
    return false;
  }
}

?>

<html>
    <head>
        <title>Task Force Devops PLSS</title>
        <link href="css/style.css" rel="stylesheet" />
        <meta name="vieweport" content="width=devide-widht, initial-scale=1.0, maximum-scale=1.0">
    </head>
    <body>
        <header>
            <div class="center">
                <div class="logo"><img src="assets/logo2.png" /></div><!--logo-->
                <div class="menu">
                    <a href="index.php">Home</a>
                    <a href="aleatorio.php">Aleatorio</a>
                    <a href="completo.php">Tempo</a>
                    <a href="cep.php">CEP</a>
                </div><!--menu-->
            </div><!--center---->
        </header>
    </body>
    <body>
    <?php echo $dados['results']['city']; ?> <?php echo $dados['results']['temp']; ?> ºC<br>
    <?php echo $dados['results']['description']; ?><br>
    Nascer do Sol: <?php echo $dados['results']['sunrise']; ?> - Pôr do Sol: <?php echo $dados['results']['sunset']; ?><br>
    Velocidade do vento: <?php echo $dados['results']['wind_speedy']; ?><br>
    <img src="imagens/<?php echo $dados['results']['img_id']; ?>.png" class="imagem-do-tempo"><br>
  </body>
</html>