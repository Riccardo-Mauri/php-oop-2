<?php
//Definisco la mia "Macrocategoria" 

class Products {
    public $name; 
    public $price; 
    public $brand; 
    public $category


    //Definisco il COSTRUTTORE della mia classe
    function __construct ($name, $price, $brand, $category){
        $this->name;
        $this->price;
        $this->brand;
        $this->category;
    }
}

//Creo le altre mi classi principali che sono "Cibo - Giochi - Cucce"

class Toys extends Products { //adesso quindi erediterò dal padre cioè "Products" gli attributi che mi interessano cioè tutti
    

}

class Food extends Products { //adesso quindi erediterò dal padre cioè "Products" gli attributi che mi interessano cioè tutti E le sue proprietà uniche
    &size;
    $kg;

}

class kennels extends Products { //adesso quindi erediterò dal padre cioè "Products" gli attributi che mi interessano cioè tutti E le sue proprietà uniche 
    $size

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>
    
</body>
</html>