<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link
        href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII="
        rel="icon" type="image/x-icon">
    <title>LB 4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2> Сайт з нотатками 2</h2> <br>

    <h3> <?php 
        $files_amount = 6;
        for ($i = 6; $i <= 20 ; $i++){
            if (file_exists("notes/{$i}.txt")){
                $files_amount++;
            } else {
                break;
            }
        }
        for ($j = 6; $j < $files_amount; $j++){
            echo $j;
            $file_array = file("notes/{$j}.txt");
            for ($i=0; $i < count($file_array); $i++){
                echo "<br>";
                echo $file_array[$i];
            }
            echo "<br>";
            echo "<br>";
        }
            ?></h3>

           <div> Нотатки закінчились </div>
            <br>
           <a href="create.php">Додати нотатку</a>
           <br>
           <a href="change.php">Редагувати нотатку</a>
           <br>
           <a href="index.php"> На головну</a>
</body>
</html>