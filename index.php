<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link
        href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII="
        rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>LB 4</title>
</head>

<body>
    <h2> Сайт з нотатками </h2> <br>

    <h3> <?php
        $files_amount = 0; // counter amount of files
        for ($i = 1; $i <= 5; $i++){ // for counting files
            if (file_exists("notes/{$i}.txt")){
                $files_amount++;
            } else {
                break;
            }
        }
        for ($j = 1; $j <= $files_amount; $j++){ // output files
            echo $j; // output number
            $file_array = file("notes/{$j}.txt");
            for ($i = 0; $i < count($file_array); $i++){
                echo "<br>";
                echo $file_array[$i];
            }
            echo "<br>";
            echo "<br>";
        }
             ?></h3>

            <a href="index1.php">Наступні нотатки</a>

</body>

</html>