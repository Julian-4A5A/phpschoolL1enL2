<!DOCTYPE html>
<html>
    <head>
        <title>PHP TEMPLATE</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <style>
            
        body {
            font-family: 'Open Sans', sans-serif;
            /*font-size: 90%;*/
        }
        
        #formulier {
            float: left;
            width: 30%;
            margin-left: 20%;
        }
        
        #formulier h2 {
            font-weight: bold;
            border-bottom: 2px solid gray;
        }
        
        #resultaten {
            float: right;
            width: 30%;
            margin-right: 18%;
        }
        
        #resultaten h2 {
            font-weight: bold;
            border-bottom: 2px solid gray;
        }
        
        .tabel {
            margin-top: -8%;
            position: absolute;
        }
        
        textarea {
            width: 200px;
            height: 100px;
        }
        form{
            background-color:yellow;
            border:green solid 2px;
        }
        </style>
        
    </head>
    <body>
        
        <?php
    
    $voornaamErr = $achternaamErr = $huisnummerErr = $postcodeErr = $klasErr = $leeftijdErr = $geslachtErr = "";
    $voornaam = $achternaam = $huisnummer = $postcode = $woonplaats = $klas = $leeftijd = $geslacht = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["voornaam"])) {
         $voornaamErr = "Voornaam moet ingevuld zijn!";
       } else {
         $voornaam = test_input($_POST["voornaam"]);
         
         if (!preg_match("/^[a-zA-Z ]*$/",$voornaam)) {
            $voornaamErr = "U kunt alleen letters gebruiken!"; 
         }
         
       }
       
       if (empty($_POST["achternaam"])) {
         $achternaamErr = "Achternaam moet ingevuld zijn!";
       } else {
         $achternaam = test_input($_POST["achternaam"]);
         
         if (!preg_match("/^[a-zA-Z ]*$/",$achternaam)) {
            $achternaamErr = "U kunt alleen letters gebruiken!"; 
         }
       }
       
        if (empty($_POST["straat"])) {
            $straat = "";
        } else {
            $straat = test_input($_POST["straat"]);
         if (!preg_match("/^[a-zA-Z ]*$/",$straat)) {
            $straatErr = "U kunt alleen letters gebruiken!"; 
         }
        }
         
        if (empty($_POST["huisnummer"])) {
         $huisnummerErr = "Huisnummer moet ingevuld zijn!";
       } else {
         $huisnummer = test_input($_POST["huisnummer"]);
         if (!preg_match('/[^0-9]/', $huisnummer)) {
            $huisnummerErr = "U kunt alleen cijfers gebruiken!"; 
         }
       }
    
       if (empty($_POST["postcode"])) {
         $postcodeErr = "Postcode moet ingevuld zijn!";
       } else {
         $postcode = test_input($_POST["postcode"]);
         if (!preg_match('/^[1-9][0-9]{3} ?[a-zA-Z]{2}$/', $postcode)) {
             $postcodeErr = "Gebruik vier letters en twee cijfers!";
         }
       }
       
        if (empty($_POST["woonplaats"])) {
            $woonplaats = "";
        } else {
            $woonplaats = test_input($_POST["woonplaats"]);
         if (!preg_match("/^[a-zA-Z ]*$/",$woonplaats)) {
            $woonplaatsErr = "U kunt alleen letters gebruiken!"; 
         }
        }
    
       if (empty($_POST["klas"])) {
         $klasErr = "Klas moet ingevuld zijn!";
       } else {
         $klas = test_input($_POST["klas"]);
         if (!preg_match("/^[a-zA-Z0-9]+$/", $klas)) {
             $klasErr = "Gebruik de volgorde van het voorbeeld: 4A5A!";
             
         }
       }
       
       if (empty($_POST["leeftijd"])) {
         $leeftijdErr = "Leeftijd moet ingevuld zijn!";
       } else {
         $leeftijd = test_input($_POST["leeftijd"]);
         if (!preg_match('/[^0-9]/', '', $straat)) {
            $straatErr = "U kunt alleen cijfers gebruiken!"; 
         }
       }
       
        if (empty($_POST["opmerking"])) {
            $opmerking = "";
        } else {
            $opmerking = test_input($_POST["opmerking"]);
        }
       
       if (empty($_POST["geslacht"])) {
         $geslachtErr = "Geslacht moet ingevuld zijn!";
       } else {
         $geslacht = test_input($_POST["geslacht"]);
       }
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
       return $data;
    }


    

    ?>
        
    <div id="formulier">
        
    <h2>Formulier</h2>
    <p><span class="error">* is een verplicht veld!</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
       Voornaam<br>
       <input type="text" name="voornaam" maxlength="30"> <span class="error">* <?php echo $voornaamErr;?></span><br>
       
       Achternaam<br>
       <input type="text" name="achternaam" maxlength="50"> <span class="error">* <?php echo $achternaamErr;?></span><br>
       
       Straat<br>
       <input type="text" name="straat" maxlength="40"><br>
       
       Huisnummer<br>
       <input type="text" name="huisnummer" maxlength="4" size="4"> <span class="error">* <?php echo $huisnummerErr;?></span><br>
        Postcode<br>
       <input type="text" name="postcode" maxlength="6" size="6"> <span class="error">* <?php echo $postcodeErr;?></span><br>
       
       Woonplaats<br>
       <input type="text" name="woonplaats" maxlength="40"><br>
       
       Klas<br>
       <input type="text" name="klas" maxlength="4" size="4"> <span class="error">* <?php echo $klasErr;?></span><br>
       
       Leeftijd<br>
       <input type="text" name="leeftijd" maxlength="3" size="3"> <span class="error">* <?php echo $leeftijdErr;?></span><br>
       
       Opmerking<br>
       <textarea name="opmerking" maxlength="200"></textarea><br>
       
       <input type="radio" name="geslacht" value="Man"> Man 
       <input type="radio" name="geslacht" value="Vrouw"> Vrouw <span class="error">* <?php echo $geslachtErr;?></span><br>
       
       <br><br>
       <input type="submit" name="submit" value="Submit" id="verstuurknop"> 
       
    </div>
       
       <?php
        echo "<div id='resultaten'>";
        echo "<h2>Invoer</h2>";
        echo "<table class='tabel'>";
        echo "<tr><td>" . "<b>Voornaam:</b> " . "</td><td>" . $voornaam . "</td></tr>";
        echo "<br>";
        echo "<tr><td>" . "<b>Achternaam:</b> " . "</td><td>" . $achternaam . "</td></tr>";
        echo "<br>";
        echo "<tr><td>" . "<b>Straat:</b> " . "</td><td>" . $straat . "</td></tr>";
        echo "<br>";
        echo "<tr><td>" . "<b>Huisnummer:</b> " . "</td><td>" . $huisnummer . "</td></tr>";
        echo "<br>";
        echo "<tr><td>" . "<b>Postcode:</b> " . "</td><td>" . $postcode . "</td></tr>";
        echo "<br>";
        echo "<tr><td>" . "<b>Woonplaats:</b> " . "</td><td>" . $woonplaats . "</td></tr>";
        echo "<br>";
        echo "<tr><td>" . "<b>Klas:</b> " . "</td><td>" . $klas . "</td></tr>";
        echo "<br>";
        echo "<tr><td>" . "<b>Leeftijd:</b> " . "</td><td>" . $leeftijd . "</td></tr>";
        echo "<br>";
        echo "<tr><td>" . "<b>Opmerking:</b> " . "</td><td>" . $opmerking . "</td></tr>";
        echo "<br>";
        echo "<tr><td>" . "<b>Geslacht:</b> " . "</td><td>"  . $geslacht . "</td></tr>";
        echo "</table>";
        echo "</div>";
        
        ?>
       
    </form>

    </body>
</html>