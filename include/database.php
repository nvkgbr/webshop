<?php

/* Változók létrehozása */
$kiszolgalo =   "localhost";
$felhasznalo =  "root";
$jelszo =       "";
$tablazat =     "webshop";

/* Kapcsolódási kísérlet */
$kapcsolat = new mysqli($kiszolgalo, $felhasznalo, $jelszo, $tablazat);

/* Kapcsolat ellenőrzése: */

if ($kapcsolat)   //Ha van kapcsolat:
{
  debug_to_console("MySQL","Sikeres csatlakozás az adatbázishoz!");
}
else              //Ha nincs kapcsolat:
{
  debug_to_console("MySQL","Sikertelen csatlakozás az adatbázishoz!");
  exit();         //Oldal leállítása
}
  

function debug_to_console($modul,$data) 
{
    echo "<script>console.log('".$modul.": " . $data . "' );</script>";
}

?>
