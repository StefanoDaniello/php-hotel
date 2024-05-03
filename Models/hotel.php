<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'id' => 1,
            'vote' => 4,
            'distance_to_center' => 10.4,
            'img' => 'images/hotelimg2.jpg'
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'id'=> 2,
            'vote' => 2,
            'distance_to_center' => 2,
            'img' => 'images/hotelimg2.jpg'

        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'id'=> 3,
            'vote' => 1,
            'distance_to_center' => 1,
            'img' => 'images/hotelimg2.jpg'

        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'id'=> 4,
            'vote' => 5,
            'distance_to_center' => 5.5,
            'img' => 'images/hotelimg2.jpg'

        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'id'=> 6,
            'vote' => 2,
            'distance_to_center' => 50,
            'img' => 'images/hotelimg2.jpg'

        ],
        [
            'name' => 'Hotel Sole',
            'description' => 'Hotel Sole Descrizione',
            'parking' => true,
            'id' => 7,
            'vote' => 3,
            'distance_to_center' => 3.2,
            'img' => 'images/hotelimg2.jpg'

        ],
        [
            'name' => 'Hotel Luna',
            'description' => 'Hotel Luna Descrizione',
            'parking' => true,
            'id'=> 8,
            'vote' => 4,
            'distance_to_center' => 1.8,
            'img' => 'images/hotelimg2.jpg'

        ],
        [
            'name' => 'Hotel Stella',
            'description' => 'Hotel Stella Descrizione',
            'parking' => false,
            'id'=> 9,
            'vote' => 2,
            'distance_to_center' => 2.5,
            'img' => 'images/hotelimg2.jpg'

        ],
        [
            'name' => 'Hotel Splendido',
            'description' => 'Hotel Splendido Descrizione',
            'parking' => true,
            'id'=> 10,
            'vote' => 5,
            'distance_to_center' => 6.7,
            'img' => 'images/hotelimg2.jpg'

        ],
        [
            'name' => 'Hotel Parco',
            'description' => 'Hotel Parco Descrizione',
            'parking' => true,
            'id'=> 11,
            'vote' => 3,
            'distance_to_center' => 4.0,
            'img' => 'images/hotelimg2.jpg'

        ]
        
    ];
    function getHotel($hotels) {
        $hotelselected = array_filter($hotels, function ($hotel) {
            return $hotel['id'] == $_GET['id'];
        });
        $details = array_shift($hotelselected);
        return $details;
    }
