<html>
    <head>
        <title> </title>

     </head>
<body>

    <form method="post" action="">
        kilometers gereden:<br>
        <input type="number" name="Kilo"/><br>
        begin tijd<br>
        <input type="time" name="DatumB"/><br>
        eind tijd<br>
        <input type="time" name="DatumE"/><br>
        datum<br>
        <input type="date" name="Datum"/><br>
     <div>
         <?php ?>
     </div>
    </form>

    <?php
    $kilometer = $_POST['Kilo'];
    $Begin = $_POST['DatumB'];
    $Eind = $_POST['DatumE'];
    
    $Kkosten = $kilometer;
    
    
    ?>


    </body>
</html>