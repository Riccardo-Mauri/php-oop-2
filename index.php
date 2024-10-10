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

class Toys extends Products { 
    //adesso quindi erediterò dal padre cioè "Products" gli attributi che mi interessano cioè tutti
}

class Food extends Products { //adesso quindi erediterò dal padre cioè "Products" gli attributi che mi interessano cioè tutti E le sue proprietà uniche
   public $size; //definisce la taglia adatta per il cibo
   public $kg;   //definisce la quantità in kg del cibo

   // Costruttore della classe "Food" che contiene poi le sue proprietà uniche
    function __construct($name, $price, $brand, $category, $size, $kg){
        parent::__construct($name, $price, $brand, $category);//richiamo il costruttore del padre 
        $this->size = $size;
        $this->kg = $kg;
    }

}

class Kennels extends Products { //adesso quindi erediterò dal padre cioè "Products" gli attributi che mi interessano cioè tutti E le sue proprietà uniche 
   public $size; //definisce la taglia adatta della cuccia - cioè la grandezza 

       // Costruttore della classe "Kennels" che contiene poi le sue proprietà uniche
       function __construct($name, $price, $brand, $category, $size){
        parent::__construct($name, $price, $brand, $category);//richiamo il costruttore del padre 
        $this->size = $size;
    }

}
//adesso creo i miei prodotti effettivi-variabili per i Cani

$DogToy = new Toys('Pallina per cani - Morbida', 5.99, 'FamousBrand', 'Cani');

$DogFood = new Food('Crocchette per cani', 39.99, 'Royal Canin', 'Cani', 'Grande', 5);

$DogKennel = new Kennels('Cuccia per cani morbida', 40.99, 'CareyourPet', 'Cani', 'Media');

//adesso creo i miei prodotti effettivi-variabili per i Gatti

$KatToy = new Toys('Topolino di pezza', 9.99, 'FamousBrand', 'Gatti');

$KatFood = new Food('Umido per gatti', 4.99, 'Whiskas', 'Gatti', 'Piccolo', 3);

$KatKennel = new Kennels('Cuccietta per gattini', 29.99, 'CareyourPet', 'Gatti', 'Piccolo')


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