<?php

namespace App\Models;

use Framework\Core\Model;

/**
 * Model choreografie z repertoáru súboru.
 *
 * Zodpovedá tabuľke `choreographies`. Framework ju odvodí z názvu triedy
 * (jednotné číslo → množné číslo). Atribúty majú rovnaké mená ako stĺpce
 * v databáze, preto ich ORM pri načítaní a ukladaní spáruje automaticky.
 */
class Choreography extends Model
{
    /**Primárny kľúč, kým  záznam nie je v databáze, je null.    */
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $author = null;
    protected ?int $duration_min = null;
    protected ?string $description = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }

    public function getDurationMin(): ?int
    {
        return $this->duration_min;
    }

    public function setDurationMin(int $duration_min): void
    {
        $this->duration_min = $duration_min;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}
