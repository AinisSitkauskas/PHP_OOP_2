<?php

declare(strict_types=1);

namespace App;


class Apartment extends Room
{
    /**
     * Apartment constructor.
     * @param int $roomNumber
     * @param int $price
     */
    public function __construct(int $roomNumber, int $price)
    {
        $this->roomType = 'Diamond Room';
        $this->restroom = True;
        $this->balcony = True;
        $this->bedCount = 4;
        $this->roomNumber = $roomNumber;
        $this->extras = 'Tv, air-conditioner, refrigerator, mini - bar, bathtub, free Wi - fi ';
        $this->price = $price;

    }

}
