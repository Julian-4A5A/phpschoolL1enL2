<?php
$Vakken = array
   (
   array("Nederlands",8.9),
   array("Engels",5.9),
   array("Wiskunde",5.2),
   array("Latijn",8.9)
   );
     
for ($row = 0; $row <  4; $row++) {
   echo "<p><b>Vakken en cijfer</b></p>";
   echo "<ul>";
   for ($col = 0; $col <  2; $col++) {
     echo "<li>".$Vakken[$row][$col]."</li>";
   }
   
   echo "</ul>";
   
   
}
echo 'Gemiddelde cijfer:' . '7.2';
?>