<?php
// initialize $name and $error variables
$name = "";
$error = "";

  // if the button with name="greet" on the form is clicked
    if (isset($_POST['greet'])) {
        $name = $_POST['name'];
        if (empty($name)) {
            $error = "Please Provide Username";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeter Using POST Request - PHP </title>
</head>
<body>
      <!-- display greeting if the $name is not empty -->
    <?php if (!empty($name)) { ?>
        <h1> Hello <?php echo $name; ?></h1>
     <?php  } ?>

       <!-- display validation message if there is an error -->
        <?php if (!empty($error)) { ?>
            <p style="color: red;"><?php echo $error; ?> </p>
        <?php } ?>

        <form action="greeter_v2.php" method="post">
            <input type="text" name="name">
            <button type="submit" name="greet"> Submit </button>
        </form>

</body>
</html>