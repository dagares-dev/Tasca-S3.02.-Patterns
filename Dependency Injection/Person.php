<?php
declare(strict_types=1);

class Person
{
    public function __construct(
        private string $name,
        private Article $wallet,
        private Article $houseKeys,
        private Article $smartphone,
        private Article $carKeys,
        private Article $transportCard
    ) {}

    public function leaveHome(): void
    {
        echo "{$this->name} surt de casa: agafa "
            . "{$this->wallet->getName()} {$this->wallet->use()}, "
            . "{$this->houseKeys->getName()} {$this->houseKeys->use()}, "
            . "{$this->smartphone->getName()} {$this->smartphone->use()}, "
            . "{$this->carKeys->getName()} {$this->carKeys->use()} i "
            . "{$this->transportCard->getName()} {$this->transportCard->use()}.\n";
    }
}