<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Greeter Using GET Request - PHP </title>
</head>
<body>
    <?php
    // if the button with name="greet" is clicked
    if (isset($_GET['greet'])) {
        echo "<h1> Hello " . $_GET['name'] . "</h1>";
    }

    ?>
    <form action="greeter_v1.php">
        <input type="text" name="name">
        <button type="submit" name="greet"> Submit </button>
    </form>
</body>
</html>