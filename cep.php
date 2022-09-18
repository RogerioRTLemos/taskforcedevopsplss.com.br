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
        <!--<div style="height:9000px;background-color: red;"></div>-->
        <section class="sobre">
            <div class="extras">
            <meta charset="utf-8">
<h1>Pesquisar Endereço</h1>
<form action="" method="post">
  <input type="text" name="cep">
  <button type="submit">Pesquisar Endereço</button>
</form>
<?php  //var_dump($_POST)  ?>
<?php

function get_endereco($cep){



  $cep = preg_replace("/[^0-9]/", "", $_POST['cep']);
  $url = "http://viacep.com.br/ws/$cep/xml/";

  $xml = simplexml_load_file($url);
  return $xml;
}

?>

<?php if($_POST['cep']){ ?>
<h2>Resultado da Pesquisa</h2>
<p>
<?php $endereco = get_endereco($_POST);?>
  <b>CEP: </b> <?php echo $endereco->cep; ?><br>
  <b>Logradouro: </b> <?php echo $endereco->logradouro; ?><br>
  <b>Bairro: </b> <?php echo $endereco->bairro; ?><br>
  <b>Localidade: </b> <?php echo $endereco->localidade; ?><br>
  <b>UF: </b> <?php echo $endereco->uf; ?><br>
  <b>DDD: </b> <?php echo $endereco->ddd; ?><br>
</p>

<?php } ?>
                <!-- <div class="social-media">
                    <a href=""><img src="assets/logo.png" /></a> 
                </div> -->
            </div><!--extras-->
            <!-- <div class="center">
                    <div class="texto-sobre">
                        <h1>TESTANDO O TEXTO<br/>Teste <span style="color:brown"></span></h1>
                    </div>
            </div> -->

        </section>
    </body>
</html>