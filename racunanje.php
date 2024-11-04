<?php

$cena = $_GET["cena"];
$vrstaProizvoda = $_GET["vrstaProizvoda"];
$racunanjePoreza = isset($_GET["porez"]);

if($vrstaProizvoda == "hrana")
{
    $cena += 50;
}
else if($vrstaProizvoda == "opremaZaRacunare")
{
    $cena += 350;
}

if($racunanjePoreza)
{
    $cena = $cena + 0.1 * $cena;

}

echo $cena;

?>