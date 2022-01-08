<?php 

for ($contador = 1; $contador <=15; $contador++){
  echo "#$contador" . PHP_EOL;
}


//--------------PULANDO NUMBER---------------------
for ($contador = 1; $contador <= 15; $contador ++) {
  if ($contador == 13) {
      continue;
  } 
  echo "#$contador" . PHP_EOL;
}

//----´PARANDO QUANDO CHEGAR ONDE EU QUERO-----------

for ($contador = 1; $contador <= 15; $contador ++) {
  if ($contador == 13) {
      break;
  } 
  echo "#$contador" . PHP_EOL;
}