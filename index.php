<!-- 
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo, da bravi sviluppatori, aggiungete Bootstrap e mostrate le informazioni con una tabella.

Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
3 - Fare tutto in un'unica pagina: nella stessa pagina verrà mostrato l'elenco di tutti gli hotel e in base alla compilazione del form verrà mostrato al di sotto (dopo il refresh della pagina) l'elenco di hotel filtrato correttamente
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.
 -->
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

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Hotel</title>
</head>
<body>
    <h1>Hotels</h1>
    <ul>

        <?php
        // var_dump($hotels);
        foreach ($hotels as $currentHotel){
            echo " 
            <li>
                <ul>
                    <li>
                    " . $currentHotel['name'] . "
                    </li>
                    <li>
                    " . $currentHotel['description'] . "
                    </li>
                    <li>
                    " . $currentHotel['parking'] . "
                    </li>
                    <li>
                    " . $currentHotel['vote'] . "
                    </li>
                    <li>
                    " . $currentHotel['distance_to_center'] . "
                    </li>
                </ul>
            </li>
            ";
        }
        ?>

        <hr>
        <?php
        // var_dump($hotels);
        foreach ($hotels as $currentHotel){
            echo " 
            <li>
                <ul>
                ";
                foreach ($currentHotel as $currentHotelPropriety){
                    echo "
                    <li>
                    " . $currentHotelPropriety . "
                    
                    </li>
                    ";
                }
                
            echo "
                </ul>
            </li>
            
            ";  

            
        }
        ?>

    </ul>
    
</body>
</html>

<!--  foreach ($hotels as $currentHotel){
            echo "
            <ul>
                <li>
                    " . $currentHotel .";
                </li>
                
            </ul>
            ";
        }  -->