<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BADWORDS</title>
</head>
<body>
    <form action="result.php" method="GET">
        <div>
            <div>
            <label for="text">
                Inserisci il testo
            </label>

            </div>
            
            
            <textarea name="text" id="text" rows="4" cols="50">
            </textarea>
            <hr>

            <div>
            <label for="censure">
                Inserisci la parola che verrà censurata:
            </label>

            </div>

            
            <input type="text" name="censure" id="censure">
            <hr>
            <button type="submit" value="submit">
                Invia il modulo
            </button>

        </div>
    </form>
    
</body>
</html>