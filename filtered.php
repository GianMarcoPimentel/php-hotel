<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
   $parking = $_GET['parcheggio'];

   $voto = $_GET['voto'];

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Filtered-Parking-Hotels</title>
</head>
<body>
    <h1>Filtered-Hotels</h1>

    <?php
    // filtro gli hotel in base al parcheggio
        $filteredHotels = [];
        
        
            if($parking == true ){
              $hotels = array_filter($hotels, function($currentHotel) {
                return $currentHotel['parking'] == true;
               });
            } 
            if($voto !== ""){
                $hotels = array_filter($hotels, function($currentHotel) use ($voto) {
                    return $currentHotel['vote'] > $voto;
                   });
            }

            foreach ($hotels as $currentHotel) {
                echo " <p> {$currentHotel['name']} voto: {$currentHotel['vote']}</p> ";
             }

    // mostro i risultati in pagina
   /*  echo "Hotel con parcheggio: " . ($parking == true ? 'Si' : ' ') . " ";
    echo "<ul>";
    foreach ($filteredHotels as $currentHotel) {
        echo "
            <li>
                " . $currentHotel['name'] . ";
            </li>
        ";
    } 
    echo "</ul>"; */
    ?>
</body>
</html>