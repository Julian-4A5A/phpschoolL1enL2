<!DOCTYPE html>
<html>
    <head>
        <title>week 3</title>
        
    </head>
    <body>
        
    <?php
    
    try {
        $host = "localhost";
        $username = "julianvd000";
        $password = "";
        $dbname = "Cijferlijst";
    
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $sql = 'SELECT * FROM Leerling';
        $q = $pdo->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
    }   catch (PDOException $e) {
            die("Er kan geen verbinding gemaakt worden. ". $e->getMessage());
        }
            
    ?>
    
            <table class="tabel">
               
                    
                    <tr>
                        <th>ID</th>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Email</th>
                        <th>Klas</th>
                        <th>Image</th>
                    </tr>
                            
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['Id']) ?></td>
                            <td><?php echo htmlspecialchars($row['voornaam']); ?></td>
                            <td><?php echo htmlspecialchars($row['achternaam']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['klas']); ?></td>
                            <td><?php echo htmlspecialchars($row['image']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                
            </table>
            
            <form method="post">
                <input type="text" name="voornaam" placeholder="Voornaam"/><br><br>
                <input type="text" name="achternaam" placeholder="Achternaam"/><br><br>
                <input type="text" name="email" placeholder="Email"/><br><br>
                <input type="text" name="klas" placeholder="Klas"/><br><br>
                <input type="submit" name="invoer" value="Invoeren"/>
            </form>
            
            <?php
            
            if (isset($_POST["invoer"])) {
                
                    $host = "localhost";
                    $username = "julianvd000";
                    $password = "";
                    $dbname = "Cijferlijst";
                    
                try {
                
                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                $sql = "INSERT INTO Leerling (voornaam, achternaam, email, klas)
                VALUES ('".$_POST["voornaam"]."','".$_POST["achternaam"]."','".$_POST["email"]."','".$_POST["klas"]."')";
                if ($conn->query($sql)) {
                echo "";
                }
                echo "Connected successfully";
                }
                catch(PDOException $e)
                {
                echo "Connection failed: " . $e->getMessage();
                }
            
            }
            
            ?>
            <br>
            <form method = "POST">
            <input type="text" name="checker" placeholder="Email"/>
            <input type = "file" name = "image" /><br><br>
            <input type = "submit" name= "opslaan" class="knop" id="upload_knop" value="Opslaan">
            </form>
            
            <?php
            var_dump($_POST);
            var_dump($_FILES);
            if(isset($_POST['opslaan'])){
                echo 'KOE';
              $errors= array();
              $file_name = $_FILES['image']['name'];
              $file_size =$_FILES['image']['size'];
              $file_tmp =$_FILES['image']['tmp_name'];
              $file_type=$_FILES['image']['type'];
              $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
              
              $expensions= array("jpeg","jpg","png");
              
              if(in_array($file_ext,$expensions)=== false){
                 $errors ="Je kunt alleen een .png of .jpg file gebruiken!";
              }
              
              if($file_size > 2097152){
                 $errors ='File mag niet groter zijn dan 2MB!';
              }
              
              if(empty($errors)==true){
                 move_uploaded_file($file_tmp,"week3/images/".$file_name);
                 echo "Profiel foto uploaded!";
                 
                    try {
                        $host = "localhost";
                        $username = "julianvd000";
                        $password = "";
                        $dbname = "Cijferlijst";
                        $email_check = $_POST['checker'];
                    
                        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                        $sql = "UPDATE Leerling SET image = '".$file_path."' WHERE `email` = '".$email_check."' ";
                        $q = $pdo->query($sql);
                        $q->setFetchMode(PDO::FETCH_ASSOC);
                    }   catch (PDOException $e) {
                            die("Er kan geen verbinding gemaakt worden. ". $e->getMessage());
                        }
                 
                }
                 
              } else {
                 echo $errors;
              }
              
              ?>

    </body>
</html>