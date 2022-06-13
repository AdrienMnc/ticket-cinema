<?php

require_once __DIR__ . "/Main-class.php";

class Cinema extends Main
{
    protected string $choixFilm;
    protected int $salle;
    protected int $ageMini;
    protected int $heureSeance;

    public function __construct(string $date, int $place, string $tarif, string $choixFilm, int $salle, int $ageMini, int $heureSeance)
    {
        parent::__construct($date, $place, $tarif);

        $this->choixFilm = $choixFilm;
        $this->salle = $salle;
        $this->ageMini = $ageMini;
        $this->heureSeance = $heureSeance;
    }


    // Getter

    public function getChoixFilm(): string
    {
        return $this->choixFilm;
    }

    // Setters

    public function setSalle(): int
    {
        if ($this->choixDuFilm === "nemo") {
            return  4;
        } else if ($this->choixDuFilm === "topGun") {
            return  8;
        } else if ($this->choixDuFilm === "pornoulala") {
            return  69;
        }
    }

    public function setAgeMini(): int
    {
        if ($this->choixDuFilm === "nemo") {
            return  4;
        } else if ($this->choixDuFilm === "topGun") {
            return  8;
        } else if ($this->choixDuFilm === "pornoulala") {
            return  18;
        }
    }

    public function setHeureSeance(): int
    {
        if ($this->choixDuFilm === "nemo") {
            return  11 . "" . 16;
        } else if ($this->choixDuFilm === "topGun") {
            return  14 . "" . 18 . "" . 21;
        } else if ($this->choixDuFilm === "pornoulala") {
            return  23;
        }
    }
}
