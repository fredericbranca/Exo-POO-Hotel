<?php

class Reservation {
    private Chambre $_chambre;
    private Client $_client;
    private DateTime $_dateDebut;
    private DateTime $_dateFin;

    //Constructeur pour définir une réservation//
    public function __construct(Chambre $chambre, Client $client, string $dateDebut, string $dateFin)
    {
        $this->_chambre = $chambre;
        $this->_client = $client;
        $this->_dateDebut = new DateTIme($dateDebut);
        $this->_dateFin = new DateTime($dateFin);
        $this->_chambre->setEstDispo(0);
        $this->_chambre->getHotel()->addReservation($this);
        $this->_client->addReservation($this);
    }

    //Getter et Setter//
    public function getChambre(): Chambre
    {
        return $this->_chambre;
    }
    public function setChambre(Chambre $chambre)
    {
        $this->_chambre = $chambre;
    }

    public function getClient(): Client
    {
        return $this->_client;
    }
    public function setClient(Client $client)
    {
        $this->_client = $client;
    }

    public function getDateDebut(): DateTime
    {
        return $this->_dateDebut;
    }
    public function setDateDebut(string $dateDebut)
    {
        $this->_dateDebut = new DateTime($dateDebut);
    }

    public function getDateFin(): DateTime
    {
        return $this->_dateFin;
    }
    public function setDateFin(string $dateFin)
    {
        $this->_dateFin = new DateTime($dateFin);
    }

    //Méthode __toString (client, hotel et chambre)
    public function __toString()
    {
        return " du " . $this->getDateDebut()->format("d-m-Y") . " au " . $this->getDateFin()->format("d-m-Y");
    }
}