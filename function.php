<?php
""
function displayallBeers($allbeers){
    $itemCard = '';
    foreach($allbeers as $beerarray) {

        $itemCard .=  '<div><img src="' . $beerarray["images"]. '" >';
        $itemCard .= '<p> Name:' .  $beerarray["beer_name"] . '<p>';
        $itemCard .=  '<p> Type of beer:' . $beerarray["beer_type"] . '</p>';
        $itemCard .=  '<p> Origin of beer:' . $beerarray["region"] . '</p></div>';
    }
     return $itemCard;
}

?>




