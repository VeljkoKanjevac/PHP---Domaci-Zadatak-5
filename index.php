<!DOCTYPE html>
<html lang="en">

<head>  
    <title>Document</title>
</head>

<body>
    <form action="racunanje.php" method="GET">

        <input type="text" name="cena" style="width:200px">
        <br>
        <select name="vrstaProizvoda" style="width:205px">
            <option value="hrana">Hrana</option>
            <option value="opremaZaRacunare">Oprema za racunare</option>
        </select>
        <br>
        <input type="checkbox" name="porez">
        <label for="porez">Izracunaj porez </label>
        <br>
        <button style="width:200px">Izracunaj</button>


    </form>
</body>

</html>