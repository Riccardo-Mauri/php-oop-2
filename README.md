# php-oop-2
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
BONUS (Opzionale):
Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
           PRIMO APPROCCIO


per me le classi sono "Cani" e "Gatti"

le due classi avranno al loro interno per ognuna degli oggetti che sono in questo caso

l'oggetto cibo avrà al suo interno : 
$nome;
$prezzo;
$kg;
taglia;
$marchio;

l'oggetto "giochi" avrà al suo interno:
$nome;
$prezzo;
marchio;

l'oggetto "cucce" avrà al suo interno:
$nome;
$prezzo;
$taglia;
$marchio;

che poi saranno divisi per A-"Cani" e B-"Gatti"

potrebbero essere altre due classi principali che poi noi aggiungiamo ai figli con l'ereditarietà 

----------------------------------------------------------------------------------------------------------------
                     SECONDO APPROCCIO

Creerei una "Macrocategoria" che contiene tutte le informazioni: 

cioè creare 
class Prodotto : $nome; $prezzo; $marchio; $categoria; ----> che in questo caso sono "Cani" e/o "Gatti"


in questo caso poi andrei a creare le classi gnerali cioè "Giochi, cibo e cucce"
 |_ così facendo poi io posso ereditare dal padre cioè "Prodotto" 
 gli attributi che ho specificato prima cioè $nome - $prezzo - $marchio
e siccome è una classe nuova aggiungere $kg -->(cioè per $cibo la quantità del prodotto)
                                        $taglia -->(cioè per chi è rivolto il $cibo perché in base alla taglia può differire o essere consigliato diversamente)


lo stesso per $cucce che andrei a estendrmi il padre e aggiungere
                                        $taglia -->(che come per il cibo esistono dimensioni differenti)

mentre per i $giochi non saprei che aggiungere come attributi quindi gli farei ereditare quelli dal padre e basta.