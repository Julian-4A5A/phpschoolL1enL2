
        
        
        <?php
        $servername = "julianvd000-php-2546590";
        $username = "julianvd000";
        $password = "";
        $dbname = "ICT";


Create_table('Vrienden');



function Create_table($tablename){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sql = "CREATE TABLE ".$tablename." (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    Voornaam VARCHAR(30) NOT NULL,
    Achternaam VARCHAR(30) NOT NULL,
    Email VARCHAR(50)
    )";

    $Toevoegen =
    "INSERT INTO $tablename
    (Voornaam, Achternaam, Email) 
    VALUES ('$Voornaam', '$Achternaam' , '$Email')";
    
    
    $conn->exec($sql);
    $conn->exec($Toevoegen);
    echo "Table $tablename created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
function Read_table($tablename){
            $read = $conn->prepare("SELECT * FROM $tablename");
            
                 $conn->query($read);
                 
                    foreach ($read->fetchAll(PDO::FETCH_ASSOC) as $row) 
                    {
            echo  '<tr>' . '<td>'. $row['ID']  . '</td><td>'. '<td>'. $row['Voornaam']  . '</td><td>' . $row['Achternaam'] . '</td><td>' . $row['Email'] . '</td>' . '</tr>';
            
        }}
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
?>


        
    </body>
</html>