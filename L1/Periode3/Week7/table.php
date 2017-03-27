<?php 
        error_reporting(E_ALL);
        ini_set('display_errors', 1)
        ?>  
<html>
    <head>
        <title> </title>
            
     </head>
     <body>
         
        <table>
        <tr>
        <th>Name</th>
        <th>Vak</th>
        <th>Cijfer</th>
        </tr>
        
        
        
        <?php
        $username = 'julianvd000';
        $password = '';
        $conn = new PDO('mysql:host=localhost;dbname=Cijferlijst', $username, $password);
        
        $sql = "select * from cijfer";
        $result = $conn->query($sql);
        
        foreach ($result as $row) {
        		echo "<tr><td>" . $row['leerlingnaam']. "</td><td>". $row['vak']. "</td><td>"  . $row['Cijfer']. "</td></tr>";
        		}
        echo "<form method='post'>";
        echo "<input onchange='submit();' type='text' name='cijfer' value='". $row["Cijfer"]."'>";
        echo "<input type='hidden' name='id' value=".$row['leerlingnaam']."></form>"
        
        
         //haal de cijfergegevens van 1 leerling op
        //maak een for lus voor het tonen van de gegevens in een tabel
        
        //toon naam en vak
        
        //toon cijfer en hidden id veld in een form
        
        //einde lus
        
        //if (isset($_POST["cijfer")) {
        //update tabel
        ?>     
               
}

     </body>    
</html>
