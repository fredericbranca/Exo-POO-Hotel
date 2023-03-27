<?php

class Client
{
    private string $_nom;
    private string $_prenom;
    private int $_nbResa;
    private array $_reservations;

    //Constructeur pour définir un client//
    public function __construct(string $nom, string $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_reservations = [];
        $this->_nbResa = 0;
    }

    //Getter et Setter//
    public function getNom(): string
    {
        return $this->_nom;
    }
    public function setNom(string $nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->_prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;
    }

    //Méthode pour ajouter une résa à un client//
    public function addReservation(Reservation $reservation)
    {
        $this->_reservations[] = $reservation;
        $this->_nbResa ++; //+=1
    }
    //On pourrait ajouter une méthode pour annuler une réservation//

    //Méthode pour afficher le nombre de résa d'un client//
    // public function nbResaClient()
    // {
    //     $result = 0;
    //     foreach ($this->_reservations as $reservation) {
    //         $result += 1;
    //     }
    //     return $result;
    // }

    //Méthode pour afficher la résa d'un client//
    public function resaCLient()
    {
        $result = "<div class='titre2'> Réservations de " . $this . "</div>";
        if (empty($this->_reservations)) {
            $result .= "<p> Aucune réservation ! <p>";
        } else {
            $result .= "<span class='badge-resa'>" . $this->_nbResa . " RESERVATION(S)</span>";
            foreach ($this->_reservations as $reservation) {
                $result .= "<p>" . $reservation->getClient() . $reservation->getChambre() . $reservation;
            }
        }
        return $result;
    }

    //Méthode __toString pour afficher le nom et prenom du client//
    function __toString()
    {
        return $this->_nom . " " . $this->_prenom;
    }
}