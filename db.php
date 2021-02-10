<?php

$db = new PDO('mysql:host=db;dbname=collectbeer', 'root','password');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $db->prepare('SELECT * FROM beer');
$query->execute();

$allbeers = $query->fetchAll(PDO::FETCH_ASSOC);
?>


<html>
    <head>
         <link rel="stylesheet" href="style.css" type="text/css"/>
         <link rel="stylesheet" href="normalize.css" type="text/css" />
        <title>Beer Baby</title>
   </head>

<body>

    <nav>
        <p class="title">No Fun Beer Collection</p>
        <p class="subtitle">Joking, You Make Your Own Fun</p>
        <p><a href="add.php">Click here</a> to add a new beer</p>
    </nav>

</body>
</html>

<?php

foreach($allbeers as $beerarray) {

    echo '<img src="' .$beerarray["images"].' " >';
    echo "<p> " . 'Name of beer' . ': ' . $beerarray["beer_name"] . "<p>";
    echo "<p> " . 'What type of beer is it?' . ': ' . $beerarray["beer_type"] . "</p>";
    echo "<p> " . 'Where is the beer from?' .  ': ' . $beerarray["region"]  . "</p>";

}

?>







<











