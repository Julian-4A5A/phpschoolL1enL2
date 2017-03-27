<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
  </head>
  <body>
    <canvas id="myCanvas"></canvas>
    <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/bubbles.js"></script>
    <script type="text/javascript">
        var red = [0, 100, 63];
        var orange = [40, 100, 60];
        var green = [75, 100, 40];
        var blue = [196, 77, 55];
        var purple = [280, 50, 60];
        
        var myName = "Julian";
        
        letterColors = [red, orange, green, blue, purple];
        
        if(15 > 5) {
            bubbleShape = "circle";
        }else{
        bubbleShape ="square";
        }
        bounceBubbles();
        drawName(myName, letterColors);
    </script>
  </body>
</html>