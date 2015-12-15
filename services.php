<?php

  if($_GET['brand'] == "btctoyou"){
    echo $bitcointoyou =  file_get_contents("https://www.bitcointoyou.com/api/ticker.aspx");
  }

  if($_GET['brand'] == "negociecoins"){
    echo $negociecoins =  file_get_contents("http://www.negociecoins.com.br/api/v3/btcbrl/ticker");
  }

  if($_GET['brand'] == "mtc"){
    echo $mtc =  file_get_contents("https://www.mercadobitcoin.net/api/ticker");
  }


?>
