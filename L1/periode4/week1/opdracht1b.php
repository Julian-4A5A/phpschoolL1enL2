
          <?php
        $today= getdate();
        print_r($today);
        
            switch($today['wday']){
                case 1: $day = 'maandag';
                break;
                case 2: $day = 'dinsdag';
                break;
                case 3: $day = 'woensdag';
                break;
                case 4: $day = 'donderdag';
                break;
                case 5: $day = 'vrijdag';
                break;
                case 6: $day = 'zaterdag';
                break;
                case 7: $day = 'zondag';
            }
            
            if(isset($_POST['show'])){
                echo '<br><br>';
                echo "Het is vandaag " . $today['mday'] . " " . $today['month'] . " " .  $today['year'];
                echo '<br><br>';
                echo 'Het is vandaag de ' . $today['yday'] . "e dag van het jaar"; 
                echo '<br><br>';
                echo $day . " is de " . $today['wday'] . "e dag van de week";
                echo '<br><br>';
                echo 'De maand ' . $today['month'] . ' heeft nog ' . $today['mday'] . " dagen";
                echo '<br><br>';
                echo 'het jaar ' . $today['year'] . " heeft " . "366" . " dagen" ;
            }
            
        ?>
        
        
        <form method="post">
            <input type="submit" name="show"/>
            
        </form>