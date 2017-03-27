<html>
    <head>
        <title> </title>
            
     </head>
     <body>
         
         <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', 1)
        ?>  
        <?php
            $game[0] = 'League of legends';
            $game[1] = 'Minecraft';
            $game[2] = 'StarcraftII';
            
            $tekst = '  Zo denken veel schrijvers: korte tekst is goede tekst. Toch is het nodig om dat te nuanceren. Er schuilt namelijk een gevaar in korte teksten. In je drang om zo kort mogelijk te zijn, sluipen containerbegrippen de tekst binnen.
                        Wat is een containerbegrip? Van Dale zegt: “een begrip zonder scherp afgebakende betekenis waaraan de taalgebruiker zelf nader invulling kan geven en dat op veel verschillende toestanden, gebeurtenissen of zaken wordt toegepast.”
                        Een woord als ding is misschien wel het het meest gebruikte containerbegrip. Het laat de lezer (of luisteraar) volledig de ruimte om te bedenken wat dat dan precies is. In die zin is. Voor de duidelijkheid: het gaat hier om teksten waarin de schrijvers deze woorden containerbegrippen noemden.
                        Misschien denk je: wat is nou precies het probleem? Het probleem is dat containerbegrippen algemeen zijn en abstract. Ze laten veel ruimte voor de beoordeling van de lezer. Dat lijkt een voordeel. Maar je maakt het je lezer moeilijk. Hij moet namelijk gaan nadenken over wat jij (misschien wel) hebt bedoeld. En dat kost tijd.';
                              
    
            echo "<table style='border: solid 1px black;'>";
            echo "<tr><th>League of legends</th><th>Minecraft</th><th>StarcraftII</th></tr>";
            
            echo $tekst.'<br><br><br>' . 'het aantal letters gebruikt: ' .strlen($tekst).'<br><br><br>'  . ' aantal woorden gebruikt: '. str_word_count($tekst).'<br><br><br>';
            
            
        
                 
            
            
        
        ?>
        
        <form>
            <input type="text" name=""/>
            
            <input type="submit" value="Submit"/>
        </form>
     </body>    
</html>
