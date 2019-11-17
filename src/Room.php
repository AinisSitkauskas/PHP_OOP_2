<?php

declare(strict_types=1);

namespace App;


class Room implements ReservableInterface
{
    /**
     * @var array
     */
    protected $reservations;

    /**
     * @var bool
     */
    protected $restroom;

    /**
     * @var bool
     */
    protected $balcony;

    /**
     * @var int
     */
    protected $bedCount;

    /**
     * @var int
     */
    protected $roomNumber;

    /**
     * @var string
     */
    protected $extras;

    /**
     * @var string
     */
    protected $roomType;

    /**
     * @var int
     */
    protected $price;

    /**
     * @param Reservation $reservation
     * @return array
     * @throws BookingException
     */
    public function addReservation($reservation) : array
    {
        $roomNumber = $this->roomNumber;
        $startDate = $reservation->getStartDate();
        $endDate = $reservation->getEndDate();
        $reservations = $this->reservations;
        if (!empty($reservations)) {
            foreach ($reservations  as $key => $value) {

                if (($reservations[$key][0] === $roomNumber && $reservations[$key][1] < $startDate && $reservations[$key][2] > $startDate) || (
                        $reservations[$key][0] === $roomNumber && $reservations[$key][1] < $endDate && $reservations[$key][2] > $endDate
                    )) {
                    Throw new BookingException('Šis kambarys jūsų pasirinktam laikotarpiui yra užrezervuotas');
                }

            }
        }
        return $this->reservations[] = [$roomNumber, $startDate, $endDate];
    }

    /**
     * @param Reservation $reservation
     * @return array
     */
    public function removeReservation($reservation) : array
    {
        $roomNumber = $this->roomNumber;
        $startDate = $reservation->getStartDate();
        $endDate = $reservation->getEndDate();
        $reservations = $this->reservations;
        foreach ($reservations as $key) {
            if ($reservations[$key][0] === $roomNumber && $reservations[$key][1] === $startDate && $reservations[$key][2] === $endDate) {
                unset($reservations[$key]);
            }
        }
        return $reservations;
    }

    public function __toString() : string
    {
        return "<strong>$this->roomNumber</strong>";
    }
}
