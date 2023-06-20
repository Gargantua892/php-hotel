<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
    </style>
</head>
<body>
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

    echo '<div class="container">
            <div class="row">';
    foreach ($hotels as $value) {
        echo '<div class="col-lg-6">
        <div class="card">
                <div class="card-body">';
        
                echo '<h5 class="card-title">' . $value["name"] . '</h5>';
                echo '<p class="card-text">' . $value["description"] . '</p>';

                //testo che appare per il parcheggio
                echo '<a href="#" class="card-link">'. 'parcheggio: ' . $tmp = ($value["parking"]) ? 'Si' : 'No' .'</a>';
                echo '<a href="#" class="card-link">'. 'voto: ' . $value["vote"] .'</a>';
                echo '<a href="#" class="card-link">'. 'Distanza dal centro: ' . $value["distance_to_center"] . ' km' . '</a>';

            echo "</div>
            </div>
        </div>";
    }

    echo '</div>
    </div>';
    
   
    ?>

<!-- echo "<h1>" . $x . "</h1>"; -->


</body>
</html>