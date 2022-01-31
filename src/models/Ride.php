<?php

class Ride
{
    private $start_city;
    private $destination;
    private $date;
    private $time;
    private $car_type;
    private $accepted_package_sizes;
    private $id_added_by;

    public function __construct($start_city, $destination, $date, $time, $car_type, $accepted_package_sizes, $id_added_by)
    {
        $this->start_city = $start_city;
        $this->destination = $destination;
        $this->date = $date;
        $this->time = $time;
        $this->car_type = $car_type;
        $this->accepted_package_sizes = $accepted_package_sizes;
        $this->id_added_by = $id_added_by;
    }
    public function getStartCity(): string
    {
        return $this->start_city;
    }

    public function setStartCity(string $start_city)
    {
        $this->start_city = $start_city;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function setDestination(string $destination)
    {
        $this->destination = $destination;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date)
    {
        $this->date = $date;
    }

    public function getTime(): string
    {
        return $this->time;
    }

    public function setTime(string $time)
    {
        $this->time = $time;
    }

    public function getCarType(): string
    {
        return $this->car_type;
    }

    public function setCarType(string $car_type)
    {
        $this->car_type = $car_type;
    }

    public function getAcceptedPackageSizes(): string
    {
        return $this->accepted_package_sizes;
    }

    public function setAcceptedPackageSizes(string $accepted_package_sizes)
    {
        $this->accepted_package_sizes = $accepted_package_sizes;
    }

    public function getIdAddedBy(): string
    {
        return $this->id_added_by;
    }

    public function setIdAddedBy(string $id_added_by)
    {
        $this->id_added_by = $id_added_by;
    }

}