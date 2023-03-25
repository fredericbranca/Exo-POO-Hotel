<?php

class Client
{
    private string $_nom;
    private string $_prenom;
    private array $_reservations;

    //Constructeur pour définir un client//
    public function __construct(string $nom, string $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_reservations = [];
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
    }

    //Méthode __toString pour afficher le nom et prenom du client//
    function __toString()
    {
        return $this->_nom . " " . $this->_prenom;
    }

    //Méthode pour afficher le nombre de résa d'un client//
    public function nbResaClient()
    {
        $result = 0;
        foreach ($this->_reservations as $reservation) {
            $result += 1;
        }
        return $result;
    }

    //Méthode pour afficher la résa d'un client//
    public function resaCLient()
    {
        $result = "<div class='titre2'> Réservations de " . $this . "</div>";
        if (empty($this->_reservations)) {
            $result .= "<p> Aucune réservation ! <p>";
        } else {
            $result .= "<span class='badge-resa'>" . $this->nbResaClient() . " RESERVATION(S)</span>";
            foreach ($this->_reservations as $reservation) {
                $result .= "<p>" . $reservation->getClient() . " - Chambre " . $reservation->getChambre()->getNumero() . " - du " . $reservation->getDateDebut() . " au " . $reservation->getDateFin() . "<p>";
            }
        }
        return $result;
    }
}
