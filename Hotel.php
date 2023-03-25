<?php

class Hotel
{
    private string $_nom;
    private string $_adresse;
    private array $_chambres;
    private array $_reservations;

    //Constructeur pour définir un hotel//
    public function __construct(string $nom, string $adresse)
    {
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_chambres = [];
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

    public function getAdresse(): string
    {
        return $this->_adresse;
    }
    public function setAdresse(string $adresse)
    {
        $this->_adresse = $adresse;
    }

    //Méthode pour ajouter une Chambre à un Hotel//
    public function addChambre(Chambre $chambre)
    {
        $this->_chambres[] = $chambre;
    }

    //Méthode pour ajouter une reservation à un Hotel//
    public function addReservation(Reservation $reservation)
    {
        $this->_reservations[] = $reservation;
    }

    //Méthode pour afficher les chambres d'un Hotel//
    public function afficherChambres()
    {
        $result = "<br><br><div class='titre1'> Statuts des chambres de <b>" . $this->_nom . "</b> : </div>";
        $result .=   "<table>
                        <tr>
                        <th> CHAMBRE </th>
                        <th> PRIX </th>
                        <th> WIFI </th>
                        <th> ETAT </th>
                        </tr>";
        foreach ($this->_chambres as $chambre) {
            $color = "#EFEFEF";

            $result .= "<tr> 
                        <td> Chambre " . $chambre->getNumero() . "</td>
                        <td>"   . $chambre->getPrix() . " €</td>
                        <td>"   . $chambre->getWifi() . "</td>
                        <td>"   . $chambre->getEstDispo() . "</td>
                        </tr>";
        }
        $result .= "</table>";
        return $result;
    }
    //Méthode pour afficher le nombre de réservation//
    public function nbReservation()
    {
        $result=0;
        foreach ($this->_reservations as $reservation)
        {
            $result += 1;
        }
        return $result;
    }
    //Méthode pour afficher les réservations d'un Hotel//
    public function afficherReservation()
    {
        $result = "<div class='titre2'> Reservations de l'" . $this->_nom . "</div>";
        if(empty($this->_reservations)){
            $result .= "<p> Aucune réservation ! <p>";
        }
        else
        {
            $result .= "<span class='badge-resa'>" . $this->nbReservation() . " RESERVATION(S)</span>";
            foreach ($this->_reservations as $reservation) {
                $result .= "<p>" . $reservation->getClient() . " - Chambre " . $reservation->getChambre()->getNumero() . " - du " . $reservation->getDateDebut() . " au " . $reservation->getDateFin() . "<p>";
            }
        }
        $result .= "<br>";
        return $result;
    }
}
