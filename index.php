<!-- 
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale. Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap (da CDN) e mostrate le informazioni con una tabella. -->
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
// foreach($hotels as $hotel){
//     foreach($hotel as $key => $value){
//         echo '<br>';
//         // echo $value;
//         var_dump("$key, $value");
//     };
// }
// for($i = 0; $i < count($hotels); $i++){
//     $hotel = $hotels[$i];
   
//     $name = $hotel['name'];
//     $description = $hotel['description'];
//     $parking = $hotel['parking'];
//     $vote = $hotel['vote'];
//     $distance_to_center = $hotel['distance_to_center'];
//     var_dump($description);
//     echo '<br>';
//     // var_dump($name, $description, $parking, $vote, $distance_to_center);
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>PHP Hotel</h1>
    <table class="table table-hover">
  <thead>
    <tr>
        <th scope="col">Info:</th>
    <?php for($i = 0; $i < count($hotels); $i++){
    $hotel = $hotels[$i];
     ?> <th scope="col"><?php echo $hotel['name'];
    };?>
 
      </th>
      <!-- <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Description</th>
      <?php for($i = 0; $i < count($hotels); $i++){
    $hotel = $hotels[$i];
     ?> <td scope="col"><?php echo $hotel['description'];
    };?>
 
      </td>
    </tr>
    <tr>
      <th scope="row">Parking</th>
      <?php for($i = 0; $i < count($hotels); $i++){
    $hotel = $hotels[$i];
     ?> <td scope="col"><?php echo $hotel['parking'];
    };?>
 
      </td>
    </tr>
    <tr>
      <th scope="row">Vote</th>
      <?php for($i = 0; $i < count($hotels); $i++){
    $hotel = $hotels[$i];
     ?> <td scope="col"><?php echo $hotel['vote'];
    };?>
 
      </td>
    </tr>
    <tr>
      <th scope="row">Distance to center</th>
      <?php for($i = 0; $i < count($hotels); $i++){
    $hotel = $hotels[$i];
     ?> <td scope="col"><?php echo $hotel['distance_to_center'];
    };?>
 
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>