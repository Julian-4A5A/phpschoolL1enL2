<?php 
        error_reporting(E_ALL);
        ini_set('display_errors', 1)
        ?>  
<html>
    <head>
        <title> </title>
            
     </head>
     <body>
         
         <form method="POST">
             Naam:<br>
             <input type="text" name="Naam"/><br>
             Je vak:<br>
             <input type="text" name="Vak"/><br>
             Je cijfers:<br>
             <input type="number" name="Cijfers"/><br>
             
             <input type="submit" value="Submit"/><br>
         </form>
        
        
        <table>
        <tr>
        <th>Name</th>
        <th>Vak</th>
        <th>Cijfer</th>
        </tr>

<?php 

?>

        <?php
        $username = 'julianvd000';
        $password = '';
        $conn = new PDO('mysql:host=localhost;dbname=Cijferlijst', $username, $password);
        //SELECT @@ HOSTNAME
        $Naam = $_POST['Naam'];
        $Cijfers = $_POST['Cijfers'];
        $Vak = $_POST['Vak'];
        
        
 
        $Toevoegen = "INSERT INTO Cijfer
            (vak, Naam, Cijfer) 
            VALUES ('$Vak', '$Naam' , $Cijfers)";
            $conn->exec($Toevoegen);
        
        
        
        
        // $sql = "select * from cijfer”;
        // $result = $conn->query($sql);
        
        //         foreach ($result as $row) {
        // 		echo <tr><td>" . $row['id']. "</td><td>". $row['leerlingnaam'] ."</td><td>". $row['vak']. "</td><td>". $row['Cijfer']. "</td></tr>";
        


        // var_dump($_POST);    
        
        $conn = null; 

        ?>     
         
     </body>    
</html>
