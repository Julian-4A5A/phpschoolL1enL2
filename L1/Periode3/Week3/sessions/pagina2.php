<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <style type="text/css">
        p { 
            color: <?php echo $_SESSION['kleur'];?>; 
} 
    </style>
</head>
<body>
     <a href="pagina3.php"><button>Link naar pagina 3</button></a>


<?php

echo "<p>welkom ". $_SESSION["Naam"]. "<br></p>"; 
 


            echo '<pre>';
            print_r($_POST);
            echo '</p   re>';
?>
</body>
</html>
