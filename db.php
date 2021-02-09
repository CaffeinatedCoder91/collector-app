<?php
//note down this line/ change only dbname
$db = new PDO('mysql:host=db;dbname=collectbeer', 'root','password');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);


$query = $db->prepare('SELECT * FROM beer');
$query->execute();

$allbeers = $query->fetchAll(PDO::FETCH_ASSOC);





//fetching all the entries, storing them in a variable.
foreach($allbeers as $beerarray)
{
    echo "<p> " . $beerarray["beer_name"] . "<p>";
    echo "<p> " . $beerarray["beer_type"] . "</p>";
    echo "<p> " . $beerarray["strength"] . "</p>";
    echo "<p> " . $beerarray["region"]  . "</p>";


}
?>





