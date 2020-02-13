<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="_GET">
        <input placeholder="Jouw E-mail adress" type="email" name="Email" id="+">
        <button type="submit">verstuur</button>
    </form>

</body>

</html>

<?php
if (filter_var($_GET["Email"], FILTER_VALIDATE_EMAIL)) {
    echo '<h1>Email is geldig</h1>';
} else {
    echo '<h1>Email is niet geldig</h1>';
}

?>