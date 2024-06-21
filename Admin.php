<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> welcome to admin pannel - <?php echo $_SESSION['email'] ;?>
    <button name="logout"> LOG OUT</button>

    <?php
    if(isset($_GET['logout']))
    {
        session_destroy();
        header("location: index.php");
    }
    ?>
</body>
</html>