<?php



$text = $_GET['text'];
$censure = $_GET['censure'];

$my_text_length = strlen($text);

$my_text_cleaned = str_ireplace($censure, '***', $text);

$my_text_cleaned_length = strlen($my_text_cleaned);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h2>
        Paragrafo da censurare
    </h2>
    <p>
        <?php echo $text; ?>
    </p>

    <h3>
        Parola da censurare
    </h3>
    <p>
        <?php echo $censure; ?>
    </p>
    
    <h3>
        Numero di caratteri del paragrafo da censurare
    <h3>
    
    <p>
        <?php echo $my_text_length; ?>
    </p>
    
    <hr>
    
    <h2>Paragrafo censurato</h2>
    <p>
        <?php echo $my_text_cleaned; ?>
    </p>
    <h3>
        Numero di caratteri del paragrafo da censurare
    </h3>
    
    <p>
        <?php echo $my_text_cleaned_length; ?>
    </p>
    
</body>
</html>