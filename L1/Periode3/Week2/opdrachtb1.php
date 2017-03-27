<!DOCTYPE html>
<html lang="EN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>

<body>
   <form name="frm_rekenmachine" action="<?php print($_SERVER["PHP_SELF"]);?>" method="post">

    <input type="text" name="getal1" value="<?php print($_POST["getal1"]);?>"> <?php print("$geen1") ?><?php print("$geen_user1") ?><br>
    
    <select name="type">
          <option value ="plus">+</option>
          <option value ="min">-</option>
          <option value ="delen">:</option>
          <option value ="maal">x</option>
    </select>
<br>
    <input type="text" name="getal2" value="<?php print($_POST["getal2"]);?>"> <?php print("$geen2") ?><?php print("$geen_user2") ?>
<br>
    <input type="submit" name="sub_nogiet" value="Reken uit">
</form>

<?php
$getal1 = $_POST["getal1"];
$getal2 = $_POST["getal2"];


if($_POST["type"] == "plus"){
    $uitkomst = $getal1 + $getal2;
}else if($_POST["type"] == "min"){
    $uitkomst = $getal1 - $getal2;
}else if($_POST["type"] == "delen"){
    $uitkomst = $getal1 / $getal2;
}else if($_POST["type"] == "maal"){
    $uitkomst = $getal1 * $getal2;
}

print($getal1);?> 

<?php

if($_POST["type"] == "plus"){
    ?>+<?php
}else if($_POST["type"] == "min"){
    ?>-<?php
}else if($_POST["type"] == "delen"){
    ?>:<?php
}else if($_POST["type"] == "maal"){
    ?>x<?php
}

print($type2); ?> <?php print($getal2) ?> = <?php print("<b>$uitkomst</b>") ?>
    
    
    
    
</body>
</html>