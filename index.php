<?php
//Definisco la mia "Macrocategoria" 

class Category {
    public $name;
    public $icon;
    //Definisco il costruttore della mia classe 
    function __construct ($name, $icon){
        $this->name = $name;
        $this->icon =$icon;
    }
}

class Products {
    public $name; 
    public $price; 
    public $brand; 
    public $category;
    public $image;

    //Definisco il COSTRUTTORE della mia classe
    function __construct ($name, $price, $brand,Category $category, $image){
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->category = $category;
        $this->image = $image;
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
    function __construct($name, $price, $brand,Category $category,$image, $size, $kg){
        parent::__construct($name, $price, $brand, $category, $image);//richiamo il costruttore del padre 
        $this->size = $size;
        $this->kg = $kg;
    }

}

class Kennels extends Products { //adesso quindi erediterò dal padre cioè "Products" gli attributi che mi interessano cioè tutti E le sue proprietà uniche 
   public $size; //definisce la taglia adatta della cuccia - cioè la grandezza 

       // Costruttore della classe "Kennels" che contiene poi le sue proprietà uniche
       function __construct($name, $price, $brand,Category $category,$image, $size){
        parent::__construct($name, $price, $brand, $category, $image);//richiamo il costruttore del padre 
        $this->size = $size;
    }

}
$dogCategory = new Category('Cani', '🐶');
$catCategory = new Category('Gatti', '🐱');

//adesso creo i miei prodotti effettivi-variabili per i Cani

$DogToy = new Toys('Pallina per cani - Morbida', 5.99, 'FamousBrand', $dogCategory, 'https://arcaplanet.vtexassets.com/arquivos/ids/229318/trixie-cane-palla-in-gomma-naturale-con-squittio.jpg?v=637454816312200000');

$DogFood = new Food('Crocchette per cani', 39.99, 'Royal Canin', $dogCategory, 'https://www.ipelosi.it/cache/royal-canin-maxi-adult-5-kg-15-crocchette-cani_78_it-750-750.jpg', 'Grande', 5);

$DogKennel = new Kennels('Cuccia per cani morbida', 40.99, 'CareyourPet', $dogCategory,'https://www.omlet.it/images/catalog/2022/07/05/dogs-love-resting-in-the-fido-studio-modern-dog-crate-omlet.jpg', 'Media');

//adesso creo i miei prodotti effettivi-variabili per i Gatti

$KatToy = new Toys('Topolino di pezza', 9.99, 'FamousBrand', $catCategory,'https://media.zooplus.com/bilder/7/400/67334_katzenspielzeug_wild_mouse_mit_sound_und_led_fg_2717_7.jpg');

$KatFood = new Food('Umido per gatti', 4.99, 'Whiskas', $catCategory,  'https://cdn.onemars.net/sites/whiskas_ph_Ropir_mwh5/image/mockup_wks_pouch_ad_tuna_new-look_-80g_f_1705068714309.png', 'Piccolo', 0.08);

$KatKennel = new Kennels('Cuccietta per gattini', 29.99, 'CareyourPet', $catCategory, 'https://climaconvenienza.it/cdn/shop/products/immagine-1-easycomfort-easycomfort-cuccia-per-gatti-a-2-ripiani-in-vimini-grigio-con-2-cuscini-lavabili-interno-esterno-56-37-40cm-ean-8054144132082-jpg.jpg?v=1703193474&width=1214', 'Piccolo');

//Metto i prodotti in un Array così posso iterarli e stamparli in html
$products = [$DogToy, $DogFood, $DogKennel, $KatToy, $KatFood, $KatKennel]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Prodotti trovati</h1>
    <div class="products-container">
    <?php
   
    foreach ($products as $index => $product) {
        echo '<div class="product-card">';
        echo '<img src="' . $product->image . '" alt="Immagine ' . $product->name . '">';
        echo '<h3>' . $product->name . '</h3>';
        echo '<p>Marca: ' . $product->brand . '</p>';
        echo '<p>Prezzo: €' . $product->price . '</p>';
        echo '<p>Categoria: ' . $product->category->name . '</p>';

        // Se il prodotto è Food o Kennels, mostriamo gli attributi specifici
        if ($product instanceof Food) {
            echo '<p>Taglia: ' . $product->size . '</p>';
            echo '<p>Quantità: ' . $product->kg . 'kg</p>';
        } elseif ($product instanceof Kennels) {
            echo '<p>Taglia: ' . $product->size . '</p>';
        }

        echo '</div>';
    }
    ?>
</div>
</body>
</html>