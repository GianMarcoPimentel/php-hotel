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
    <link rel="stylesheet" href="style.css">
    <title>PHP-Hotel</title>
</head>
<body>
    <h1>Hotels</h1>

    <div class="container">
        <table class="table">
           <?php
           // var_dump($hotels);
           /* foreach ($hotels as $currentHotel){
               
                   foreach ($currentHotel as $currentHotelPropriety){
                       echo "
                       <li>
                       " . $currentHotelPropriety . "
                       
                       </li>
                       ";
                   } 
           } */
           
           echo "<tr>";
           echo "<th> Nome </th>";
           foreach ($hotels as $currentHotel) {
               echo "<th>
               " . $currentHotel['name'] . "
               </th>";
           }
           echo "</tr>";
   
           echo "<tr>";
           echo "<th> Descrizione </th>";
           foreach ($hotels as $currentHotel) {
               echo "<td>
               " . $currentHotel['description'] . "
               </td>";
           }
           echo "</tr>";
   
           
           echo "<tr>";
           echo "<th> Parcheggio </th>";
           foreach ($hotels as $currentHotel) {
            
               echo "<td>
               " . $currentHotel['parking'] . "
               </td>";
           }
           echo "</tr>";
   
           echo "<tr>";
           echo "<th> Voto  </th>";
           foreach ($hotels as $currentHotel) {
               echo "<td>
               " . $currentHotel['vote'] . "
               </td>";
           }
           echo "</tr>";
   
           echo "<tr>";
           echo "<th> Distanza </th>";
           foreach ($hotels as $currentHotel) {
               echo "<td>
               " . $currentHotel['distance_to_center'] . "
               </td>";
           }
           echo "</tr>";
   
           
           ?>
           
           </table>
    </div>
    
    <div class="container">
        <form action="filtered.php" method="get">

            <label for="parcheggio">Parcheggio:</label>
            <input type="checkbox" name="parcheggio" id="parcheggio" value="true">
            <br>
            <label for="voto">Voto minimo:</label>
            <select id="voto" name="voto">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
            </select>
             <input type="submit" value="Ricerca">
            
        </form>
    </div>

   

    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


<!-- 
echo "<table>";
echo "<tr>";
foreach ($array as $elemento) {
  echo "<th>$elemento</th>";
}
echo "</tr>";

echo "<tr>";
foreach ($array as $elemento) {
  echo "<td>$elemento</td>";
}
echo "</tr>";

echo "</table>";
 -->

<!-- 
         //var_dump($hotels);
        //foreach ($hotels as $currentHotel){
            //echo " 
            //<li>
                //<ul>
                   // <li>
                   // " . $currentHotel['name'] . "
                    //</li>
                  //  <li>
                    //" . $currentHotel['description'] . "
                    //</li>
                    //<li>
                   // " . $currentHotel['parking'] . "
                   // </li>
                   // <li>
                  //  " . $currentHotel['vote'] . "
                   // </li>
                  //  <li>
                   // " . $currentHotel['distance_to_center'] . "
                   // </li>
               // </ul>
          //  </li>
           // ";
       // }
       //  -->