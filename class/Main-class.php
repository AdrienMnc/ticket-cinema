<?php

// 
// Classe de base
// 


class Main
{
    protected string $date;
    protected int $place;
    protected string $tarif;



    // 
    // Constructeur
    // 

    public function __construct(string $date, int $place, string $tarif)
    {
        $this->date = $date;
        $this->place = $place;
        $this->tarif = $tarif;
    }

    // 
    // Getters
    // 

    public function getDate(): string
    {
        return $this->date;
    }

    public function getPlace(): int
    {
        return $this->place;
    }

    public function getTarif(): string
    {
        return $this->tarif;
    }
}
