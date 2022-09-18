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
    <?php
//initialize with a random integer within range
$diceNumber = mt_rand(1, 6);

//initialize
$numText = "";

//calling switch statement
  switch($diceNumber) 
  {
  case 1:
    $numText = "One";
    break;
  case 2:
    $numText = "Two";
    break;
  case 3:
    $numText = "Three";
  case 4:
    $numText = "Four";
    break;
  case 5:
    $numText = "Five";
  case 6:
    $numText = "Six";

    break;
  default:
    $numText = "unknown";
  }
  
  //display result
  echo 'Dice show number '.$numText.'.';

?>
  </body>
</html>