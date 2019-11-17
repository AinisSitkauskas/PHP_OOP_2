<?php

declare(strict_types=1);

namespace App;


class SingleRoom extends Room
{


    /**
     * SingleRoom constructor.
     * @param int $roomNumber
     * @param int $price
     */
    public function __construct(int $roomNumber, int $price)
    {
        $this->roomType = 'Standard Room';
        $this->restroom = True;
        $this->balcony = False;
        $this->bedCount = 1;
        $this->roomNumber = $roomNumber;
        $this->extras = 'Tv, air-conditioner';
        $this->price = $price;

    }

}
