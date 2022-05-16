<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare 
uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi
e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Dividete bene in classi e implementate gli attributi e i metodi necessari per
il corretto funzionamento dell'e-commerce. Il focus è sulla parte di slide condivisa oggi su Drive.

BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un
periodo particolare (es. da maggio ad agosto). -->
<?php
class Ecommerce
{
    public $name;
    public $address;
    public $phoneNumber;
    public $state;
    public $salesArea;

    function __construct($name, $address, $phoneNumber, $state, $salesArea)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->state = $state;
        $this->salesArea = $salesArea;
    }
}

class Products extends Ecommerce
{
    public $prova;
    function __construct($prova)
    {
        $this->prova = $prova;
    }
}
