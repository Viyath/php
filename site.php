<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        function setColor($color){
            switch ($color){
                case "red":
                    echo "You are qupid<br>";
                    break;
                case "blue":
                    echo "Just like the sea<br>";
                    break;
                case "black":
                    echo "colorful<br>";
                    break;
            }
        }
        setColor("red");
        setColor("black");   
    ?>
</body>
</html>