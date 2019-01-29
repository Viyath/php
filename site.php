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
        $color="blue";
        switch ($color){
            case "red":
                echo "You are qupid";
                break;
            case "blue":
                echo "Just like the sea";
                break;
            case "black":
                echo "colorful";
                break;
        }
    ?>
</body>
</html>