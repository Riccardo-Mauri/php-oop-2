<?php
//Definisco la mia "Macrocategoria" 

class Products {
    public $name; 
    public $price; 
    public $brand; 
    public $category;


    //Definisco il COSTRUTTORE della mia classe
    function __construct ($name, $price, $brand, $category){
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->category = $category;
    }
}

//Creo le altre mi classi principali che sono "Cibo - Giochi - Cucce"

class Toys extends Products { //adesso quindi erediterò dal padre cioè "Products" gli attributi che mi interessano cioè tutti
    

}

class Food extends Products { //adesso quindi erediterò dal padre cioè "Products" gli attributi che mi interessano cioè tutti E le sue proprietà uniche
   public $size; //definisce la taglia adatta per il cibo
   public $kg;   //definisce la quantità in kg del cibo

}

class Kennels extends Products { //adesso quindi erediterò dal padre cioè "Products" gli attributi che mi interessano cioè tutti E le sue proprietà uniche 
   public $size; //definisce la taglia adatta della cuccia - cioè la grandezza 

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