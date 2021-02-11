<?php

$db = new PDO('mysql:host=db;dbname=collectbeer', 'root','password');


$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $db->prepare('SELECT * FROM beer');
$query->execute();

$allbeers = $query->fetchAll(PDO::FETCH_ASSOC);
require'function.php';
?>


<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="normalize.css" type="text/css">
        <title>Beer Baby</title>
   </head>

<body>

    <nav class="navbar">
        <p class="title">No Fun Beer Collection</p>
        <p class=""><a href="add.php">Click here</a> to add a new beer</p>
    </nav>

<div class="allbeercollection">
    <?php echo displayallBeers($allbeers); ?>
</div>


</body>
</html>























