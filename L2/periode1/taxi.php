    <html>
    <head>
        <title> </title>

     </head>
<body>

    <form method="post" action="">
        kilometers gereden:<br>
        <input type="number" name="Kilo"/><br>
        minuten gereden:<br>
        <input type="number" name="Min"/><br>

        <input type="submit" value="overdag 8:00-18:00" name="tijdens"/><br>
        <input type="submit" value="Buiten overdag" name="buiten"/><br>
        <input type="submit" value="Weekend overdag vrijdag 22:00 tot maandag 7:00" name="weekendO"/><br>
        <input type="submit" value="Weekend buiten overdag vrijdag 22:00 tot maandag 7:00" name="weekendB"/><br>
     <div>
         <?php ?>
     </div>
    </form>

    <?php
    $kilometer = $_POST['Kilo'];
    $Minuten = $_POST['Min'];
    if(isset($_POST['tijdens'])){
        $GKilometers = $kilometer;
        $GMinuten = $Minuten * 0.25;
        $totaal = $GKilometers + $GMinuten;
        echo 'euro' .$totaal;
    }
    if(isset($_POST['buiten'])){
        $GKilometers = $kilometer;
        $GMinuten = $Minuten * 0.45;
        $totaal = $GKilometers + $GMinuten;
        echo 'euro' .$totaal;
    }
    if(isset($_POST['weekendO'])){
        $GKilometers = $kilometer;
        $GMinuten = $Minuten * 0.25;
        $totaalA = $GKilometers + $GMinuten;
        $totaal = $totaalA * 1.15;
        echo 'euro' .$totaal;
    }
    if(isset($_POST['weekendB'])){
        $GKilometers = $kilometer;
        $GMinuten = $Minuten * 0.45;
        $totaalB = $GKilometers + $GMinuten;
        $totaal = $totaalB * 1.15;
        echo 'euro' .$totaal;
    }
    ?>


    </body>
</html>