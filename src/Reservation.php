<?php

declare(strict_types=1);

namespace App;


class Reservation
{
    /**
     * @var \DateTime
     */
    private $startDate;
    /**
     * @var \DateTime
     */
    private $endDate;
    /**
     * @var Guest
     */
    private $guest;

    /**
     * Reservation constructor.
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param Guest $guest
     */
    public function __construct($startDate, $endDate, $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * @return Guest
     */
    public function getGuest(): Guest
    {
        return $this->guest;
    }

    public function __toString() : string
    {
        return "<time>" . $this->startDate->format('Y-m-d') . "</time> to <time>" . $this->endDate->format('Y-m-d') . "</time>";
    }
}
