<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1)


?>  
<html>
    <head>
        <title> </title>
            
     </head>
     <body>
        <form method="post" /> 
        <input type="text" name="Naam" placeholder="Naam" /><br /> 
        <select name='select'> 
            <option value='green'>Zwart</option> 
            <option value='red'>Rood</option> 
            <option value='yellow'>Geel</option>
            <option value='blue'>Blauw</option>
    </select> 

        <input type="submit" value="Inloggen" /><br /> 
    </form> 
         
        <?php
            if(isset($_POST['Naam'])){ 
            
            $_SESSION['Naam'] = $_POST['Naam']; 
            $_SESSION['kleur'] = $_POST['select']; 
            echo "klik <a href='pagina2.php'>hier</a> om verder te gaan"; 
} 
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
        ?>     
         
     </body>    
</html>
