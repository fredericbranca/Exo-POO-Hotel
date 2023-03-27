<?php

class Chambre
{
    private int $_numero;
    private float $_prix;
    private bool $_estDispo;
    private bool $_wifi;
    private int $_lit;
    private Hotel $_hotel;

                //Constructeur pour définir une chambre//
    public function __construct(int $numero, float $prix, bool $wifi, int $lit, Hotel $hotel)
    {
        $this->_numero = $numero;
        $this->_prix = $prix;
        $this->_estDispo = True;
        $this->_wifi = $wifi;
        $this->_lit = $lit;
        $this->_hotel = $hotel;
        $this->_hotel->addChambre($this);
    }

                //Getter et Setter//
    public function getNumero(): int
    {
        return $this->_numero;
    }
    public function setNumero(int $numero)
    {
        $this->_numero = $numero;
    }

    public function getPrix(): float
    {
        return $this->_prix;
    }
    public function setPrix(float $prix)
    {
        $this->_prix = $prix;
    }

    public function getEstDispo(): bool
    {
        return $this->_estDispo;
    }
    public function setEstDispo(bool $estDispo)
    {
        return $this->_estDispo = $estDispo;
    }

    public function getwifi(): bool
    {
        return $this->_wifi;
    }

    public function setWifi(bool $wifi)
    {
        $this->_wifi = $wifi;
    }

    public function getLit(): int
    {
        return $this->_lit;
    }
    public function setLit(int $lit)
    {
        $this->_lit = $lit;
    }

    public function getHotel(): Hotel
    {
        return $this->_hotel;
    }
    public function setHotel(Hotel $hotel)
    {
        $this->_hotel = $hotel;
    }

        //Méthode pour afficher la disponibilité d'une chambre en textuel//

    public function EstDispoTextuel(): string
    {
        if($this->_estDispo == True)
        {
            return "<span class='badge badge-green'>DISPONIBLE</span> ";
        }
        else
        {
            return "<span class='badge badge-red'>Réservée</span>";
        }
    }

        //Méthode pour afficher l'image du Wifi//
    public function wifiImg(): string
    {
        if($this->_wifi == True)
        {
            return "<img src='wifi.png'>";
        }
        else
        {
            return " ";
        }
    }

    //Méthode pour afficher le wifi textuel//
    public function wifiTextuel(): string 
    {
        if($this->_wifi == True)
        {
            return "Oui";
        }
        else
        {
            return "Non";
        }
    }

    //Méthode __toString//
    function __toString()
    {
        return " - Chambre " . $this->getNumero() . " (" . $this->getLit() . " lit(s) . " . $this->getPrix() . " € - Wifi : " . $this->wifiTextuel() . ") ";
    }

}
