<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
        $paragraph= 'Ad ogni azione corrisponde una reazione uguale e contraria';
        echo $paragraph;
        echo "<br>";
        echo strlen($paragraph);

        echo "<br>";
        echo "<br>";
    
        echo str_replace($_GET ["badword"], "***", $paragraph);
        echo "<br>";
        echo strlen (str_replace($_GET ["badword"], "***", $paragraph))
    
    ?>

    
</body>
</html>
