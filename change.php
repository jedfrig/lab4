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
    <h2> Редагування нотатки</h2> <br>
    
    <form action="edit_note.php" method="get"> 
        <input type = "text" name = "nomer" placeholder = "Введіть номер нотатки"> </input>
        <br>
        <input type = "text" name = "note" placeholder = "Введіть нотатку"> </input>
        <br>
        <button type = "submit"> Редагувати нотатку </button>
    </form>
    <br>
    <a href="index.php"> На головну</a>
</body>

</html>