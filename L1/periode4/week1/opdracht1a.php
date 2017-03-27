<!DOCTYPE html>
<html>
    <head>
        <title></title>
        
    </head>
    <body>
        <?php
        $auto = array (
            array("Merk", "soort","deuren","brandstof"),
            array("Citroen", "C3", 5, "benzine"),
            array("Ford", "Ka", 3, "benzine"),
            array("Opel", "Astra", 4, "diesel"));
        
        
     

    
           echo "<table> ";
           echo "<tr><td>".$auto[0][0]."</td><td>".$auto[0][1]."</td><td>".$auto[0][2]."</td><td>".$auto[0][3]."</td></tr>";
           echo "<tr><td>".$auto[1][0]."</td><td>".$auto[1][1]."</td><td>".$auto[1][2]."</td><td>".$auto[1][3]."</td></tr>";
           echo "<tr><td>".$auto[2][0]."</td><td>".$auto[2][1]."</td><td>".$auto[1][2]."</td><td>".$auto[2][3]."</td></tr>";
           echo "<tr><td>".$auto[3][0]."</td><td>".$auto[3][1]."</td><td>".$auto[3][2]."</td><td>".$auto[3][3]."</td></tr>";
           echo "</table> ";
?>

    </body>
</html>
