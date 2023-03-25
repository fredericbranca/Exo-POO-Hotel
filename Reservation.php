<?php

class Reservation {
    private Chambre $_chambre;
    private Client $_client;
    private string $_dateDebut;
    private string $_dateFin;
    private Hotel $_hotel;

    //Constructeur pour définir une réservation//
    private function __construct(Chambre $chambre, Client $client, string $dateDebut, string $dateFin)
    {
        $this->_chambre = $chambre;
        $this->_client = $client;
        $this->_dateDebut = new DateTime($dateDebut);
        $this->_dateFin = new DateTime($dateFin);
        $this->_hotel->addReservation($this);
    }

    //Getter et Setter//
    private function getChambre(): Chambre
    {
        return $this->_chambre;
    }
    private function setChambre(Chambre $chambre)
    {
        $this->_chambre = $chambre;
    }

    private function getClient(): Client
    {
        return $this->_client;
    }
    private function setClient(Client $client)
    {
        $this->_client = $client;
    }

    private function getDateDebut(): string
    {
        return $this->_dateDebut;
    }
    private function setDateDebut(string $dateDebut)
    {
        $this->_dateDebut = new DateTime($dateDebut);
    }

    private function getDateFin(): string
    {
        return $this->_dateFin;
    }
    private function setDateFin(string $dateFin)
    {
        $this->_dateFin = new DateTime($dateFin);
    }
}