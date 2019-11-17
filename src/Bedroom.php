<?php

declare(strict_types=1);

namespace App;


class Bedroom extends Room
{
    /**
     * Bedroom constructor.
     * @param int $roomNumber
     * @param int $price
     */
    public function __construct(int $roomNumber, int $price)
    {
        $this->roomType = 'Gold Room';
        $this->restroom = True;
        $this->balcony = True;
        $this->bedCount = 2;
        $this->roomNumber = $roomNumber;
        $this->extras = 'Tv, air-conditioner, refrigerator, mini - bar, bathtub ';
        $this->price = $price;

    }


}
