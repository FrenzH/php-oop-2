<?php

require __DIR__ . '/Products.php';

class Food extends Products{

    public $genre = 'Food';
    public $expire_date = ''; 

    public $type = 'umido';

   

    public $ingredients = [];

    public $forPetWithWeight = 0;

    



}


?>