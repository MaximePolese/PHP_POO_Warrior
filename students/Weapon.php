<?php

class Weapon
{
    public int $id;
    public int $strength;
    public string $imageUrl;

    public function __construct(int $id, int $strength)
    {
        $this->id = $id;
        $this->strength = $strength;
    }
}