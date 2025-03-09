<?php
$numero = numero;
function seeResult($numero){

          if($numero < 5){
                  $numero++;
          }else{
                  $numero--;
          }
          return $numero;
}

echo seeResult(7);
?>