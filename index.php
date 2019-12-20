<?php
     //ricerca
     header("Content-Type:application/json");
     $fileName = "vocabolario.json";
     $input = $_GET["input"];
     $p = lcfirst($_GET["p"]);
     $vocabolario = file_get_contents($fileName);
     $vocabolario = json_decode($vocabolario, true);
     $esiste = $vocabolario[$input];
     if(!!$esiste){
          $risposta["risultato"] = $esiste;
          echo json_encode($risposta);
     }
     else{
          $risposta["risultato"] = "parola non presente";
          echo json_encode($risposta);
     }
     //inserimento
     $json = file_get_contents(filiName);
     echo $json;
     $arrayJson = json_decode($json, true);
     echo $arrayJson;
     $termine = $_GET["termine"];
     $significato=$_GET["significato"];
     $arrayJson[$termine]= $significato;
     $json_data = json_encode($arrayJson);
     file_put_contents("vocabolario.json",$json_data);
     
     echo $vocabolario;
     


?>