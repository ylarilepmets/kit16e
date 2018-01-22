<?php
//String
$tervitus = "Tere";
//int
$nr = 1;
//float
$nr1 = 10.0121;
//boolean
$bool = False;
//massiiv
$array = array('Nimi',1986,11.26,'Perenimi');

/*
mitmerealine kommentaar
*/


echo "$tervitus World!<br>";
echo '$tervitus World!<br>';
echo $array[0]. '<br>';

if ($bool == False) {
  //loetleb kõik massiivi elemendid üksteise alla, ilma indexiteta
  for($i=0; $i < count($array); $i++){
    echo $array[$i].'<br>';
  }
  //kuvab terve masiivi sisu, ja näidatakse ära ka elementide indexid
  Print_r($array);
} else {
  echo "Midagi muud";
}

 ?>
