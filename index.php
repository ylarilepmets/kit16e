<meta charset="utf-8" />

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
$esta = 'Eesti keel';
$mata = 'Matemaatika';
$fyss = 'Füüsika';
//mitmetasemeline massiiv, masiivi sees on kolm massiivi(sidusmassivina)(indexid peavad olema unikaalsed)
//nimed on reanimed ja õppeaineon tulba pealkiri kui tabelina võtta
$hinded = array('Peeter'=>array($esta=>4, $mata=>3, $fyss=>5),
                'Kalle'=>array($esta=>3, $mata=>4, $fyss=>5),
                'Mari'=>array($esta=>5, $mata=>3, $fyss=>2));
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
  //Print_r($array).'<br>';
} else {
  echo "Midagi muud";
}
//korjab välja massivi indeksid(nimed)
$hinded_id = array_keys($hinded);
for ($i=0; $i < count($hinded) ; $i++) {
   echo $hinded_id[$i].'<br>';
   foreach ($hinded[$hinded_id[$i]] as $aine => $hinne) {
     echo $aine.":".$hinne.'<br>';
   }
}


/* counter */

//opens countlog.txt to read the number of hits
$datei = fopen("countlog.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;
echo "$count" ;
echo " hits" ;
echo "\n" ;

// opens countlog.txt to change new hit number
$datei = fopen("countlog.txt","w");
fwrite($datei, $count);
fclose($datei);










 ?>
