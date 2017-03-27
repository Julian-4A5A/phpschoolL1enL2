<?php 
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ?>  
           <?php
        $username = 'julianvd000';
        $password = '';
        $conn = new PDO('mysql:host=localhost;dbname=Cijferlijst', $username, $password);
        ?> 
<html>
    <head>
        <title> </title>
            
     </head>
<body>
        
        <form method="post">
            
            
        </form>
        
        
        <table>
            <tr>
                <th>Naam</th>
                <th>Vak</th>
                <th>Cijfer</th>
            </tr>
            
            <?php
            
            
           
            
            
           
        if(isset($_POST['cijfer'])){
            
            
            
                $sql = $conn->prepare("SELECT * FROM Cijfer ORDER BY cijfer ");
                $sql->execute();
                $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
                    $txt = "John Doe\n";
                    fwrite($myfile, $txt);
                    $txt = "Jane Doe\n";
                    fwrite($myfile, $txt);
                    fclose($myfile);
        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $row) {
         //var_dump($row);
            echo  '<tr>' . '<td>'. $row['Naam']  . '</td><td>' . $row['vak'] . '</td><td>' . $row['cijfer'] . '</td>' . '</tr>';
                    
                    
                    $myfile = fopen("leerlingnaam.txt", "w") or die("Unable to open file!");
                    $txt = $row['Naam'] . $row['vak'] . $row['cijfer'] ;
                    fwrite($myfile, $txt);
                    fclose($myfile);
                    
            
        }  
                    
                    
           
       
        
            
    }
    
    
            if(isset($_POST['button'])){
                
                
                
                $sql = $conn->prepare("SELECT * FROM Cijfer ORDER BY vak DESC ");
                $sql->execute();
                
        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $row) {
            //var_dump($row);
            echo  '<tr>' . '<td>'. $row['Naam']  . '</td><td>' . $row['vak'] . '</td><td>' . $row['cijfer'] . '</td>' . '</tr>';
        }  

        
    }
                
                
            if(isset($_POST['button1'])){
                
                
                
                $sql = $conn->prepare("SELECT * FROM Cijfer ORDER BY Naam DESC ");
                $sql->execute();
                
        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $row) {
            //var_dump($row);
            echo  '<tr>' . '<td>'. $row['Naam']  . '</td><td>' . $row['vak'] . '</td><td>' . $row['cijfer'] . '</td>' . '</tr>';
        }  

        
    }
            ?>
        </table>
        <form method="post">
            <input name="cijfer" type="submit" value="Show me"/>
            <input value="Show me more" type="submit" name="button"/>
            <input value="Show me more and more" type="submit" name="button1"/>
            </form>
        <script>
        
            
        </script>
    </body>
</html>