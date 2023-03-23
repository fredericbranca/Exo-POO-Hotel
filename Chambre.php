<?php

class Chambre
{
    private int $_numero;
    private float $_prix;
    private bool $_estDispo;
    private Hotel $_hotel;

                //Constructeur pour définir une chambre//
    public function __construct(int $numero, float $prix, Hotel $hotel)
    {
        $this->_numero = $numero;
        $this->_prix = $prix;
        $this->_estDispo = 1;
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
        $this->_estDispo = $estDispo;
    }

    public function getHotel(): Hotel
    {
        return $this->_hotel;
    }
    public function setHotel(Hotel $hotel)
    {
        $this->_hotel = $hotel;
    }

}
