<?php 
        error_reporting(E_ALL);
        ini_set('display_errors', 1)
        ?>  
<html>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        connectie 
        parameters
        queries 
        exucte 
        <?php
        $servername = "localhost";
        $username = "julianvd000";
        $password = "";
        $dbname = "ICT";
        
        
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        Create_table("Vrienden");
        
        
        
        
        function Create_table($tablename){
        $Table =" CREATE TABLE $tablename
                (
                ID int AUTO_INCREMENT PRIMARY KEY,
                Voornaam varchar(255) NOT NULL,
                Achternaam varchar(255) NOT NULL,
                Email varchar(255) NOT NULL
                )";
           
        }
        if ($conn->query($Table) === TRUE) {
                echo "Tabel van". $tablename. "gemaakt";
            } else {
                echo "Error Geen tabel gemaakt " . $conn->error;
            }
            
            
            function Insert_table($tablename,$Voornaam,$Voornaam,$Voornaam){
                $Toevoegen =
                    "INSERT INTO $tablename
                    (Voornaam, Achternaam, Email) 
                    VALUES ('$Voornaam', '$Achternaam' , '$Email')";
            $conn->query($Toevoegen);
        
        
        
        
            
        function Update_ID($tablename,$Voornaam,$Voornaam,$Voornaam, $GenoemdeID, $updateplek){
               switch ($updateplek){
                    case $voornaam:
                        $Update = "UPDATE $tablename set Voornaam=$Voornaam WHERE ID=$GenoemdeID";
                        break;
                    case $achternaam:
                        $Update = "UPDATE $tablename set Achternaam=$Achternaam WHERE ID=$GenoemdeID";
                        break;
                    case $email:
                        $Update = "UPDATE $tablename set Email=$Email WHERE ID=$GenoemdeID";
                        break;
                    
                    default:
                        echo "Error Update ". $GenoemdeID . $conn->error;
                }   
            $conn->query($Update);
        }
            
        }
        function Delete_ID($tablename, $GenoemdeID){
            $Delete = "DELETE FROM $tablename WHERE ID=$GenoemdeID";
                $conn->query($Delete);
                if ($conn->query($sql) === TRUE) {
                    echo $GenoemdeID. " deleted successfully";
                } else {
                    echo "Error deleting". $GenoemdeID . $conn->error;
                }           
        }
        $conn = null; 
        ?>
    </body>
</html>