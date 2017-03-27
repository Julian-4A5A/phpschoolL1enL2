<html>
    <head>
        <title> </title>
            
     </head>
     <body>
         <table>
             <tr>
                 <td>Nederlands</td>
                 <td>4,7</td>
             </tr>
             <tr>
                 <td>Engels</td>
                 <td>4,3</td>
             </tr>
             <tr>
                 <td>Wiskunde</td>
                 <td>8,3</td>
             </tr>
             <tr>
                 <td>Natuurkunde</td>
                 <td>8,0</td>
             </tr>
             <tr>
                 <td>Scheikunde</td>
                 <td>7,9</td>
             </tr>
             
        </table>
         <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', 1)
        ?>  
        
        
        
        <?php
                $vak['Nederlands'] = 4.7;
                $vak['Enegls'] = 4.3;
                $vak['Wiskunde'] = 8.3;
                $vak['Natuurkunde'] = 8.0;
                $vak['Scheikunde'] = 7.9;
                $som = ($vak['Nederlands']+ $vak['Enegls']+ $vak['Wiskunde']+$vak['Natuurkunde']+$vak['Scheikunde'])/5;
                
           
           
                
           
                
          
                

        ?>     
         
     </body>    
</html>
