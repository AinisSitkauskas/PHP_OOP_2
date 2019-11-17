<?php

declare(strict_types=1);

namespace App;


class Guest
{

    private $firstName;

    private $lastName;

    /**
     * Guest constructor.
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString(): string
    {
        return "<strong>$this->firstName $this->lastName</strong>";
    }

}
