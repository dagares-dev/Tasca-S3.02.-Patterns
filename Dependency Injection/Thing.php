<?php
declare(strict_types=1);

class Wallet implements Article
{
    public function getName(): string
    {
        return "la cartera";
    }

    public function use(): string
    {
        return "per tenir la documentació";
    }
}

class HouseKeys implements Article
{
    public function getName(): string
    {
        return "les claus de casa";
    }

    public function use(): string
    {
        return "per obrir la casa";
    }
}

class Smartphone implements Article
{
    public function getName(): string
    {
        return "el smartphone";
    }

    public function use(): string
    {
        return "per estar comunicat";
    }
}

class CarKeys implements Article
{
    public function getName(): string
    {
        return "les claus del cotxe";
    }

    public function use(): string
    {
        return "per conduir";
    }
}

class PublicTransportCard implements Article
{
    public function getName(): string
    {
        return "la targeta del transport públic";
    }

    public function use(): string
    {
        return "per si el cotxe es espatlla";
    }
}