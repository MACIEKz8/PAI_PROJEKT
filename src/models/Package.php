<?php

class Package
{
    private $start_city;
    private $start_post_code;
    private $start_address;
    private $destination;
    private $destination_post_code;
    private $destination_address;
    private $package_size;
    private $date;
    private $time;

    public function __construct($start_city, $destination, $start_address, $destination_address, $start_post_code, $destination_post_code, $package_size, $date, $time)
    {
        $this->start_city = $start_city;
        $this->start_post_code = $start_post_code;
        $this->start_address = $start_address;
        $this->destination = $destination;
        $this->destination_post_code = $destination_post_code;
        $this->destination_address = $destination_address;
        $this->package_size = $package_size;
        $this->date = $date;
        $this->time = $time;
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


    public function getStartCity(): string
    {
        return $this->start_city;
    }

    public function setStartCity(string $start_city)
    {
        $this->start_city = $start_city;
    }

    public function getStartPostCode(): string
    {
        return $this->start_post_code;
    }

    public function setStartPostCode(string $start_post_code)
    {
        $this->start_post_code = $start_post_code;
    }

    public function getStartAddress(): string
    {
        return $this->start_address;
    }

    public function setStartAddress(string $start_address)
    {
        $this->start_address = $start_address;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function setDestination(string $destination)
    {
        $this->destination = $destination;
    }

    public function getDestinationPostCode(): string
    {
        return $this->destination_post_code;
    }

    public function setDestinationPostCode(string $destination_post_code)
    {
        $this->destination_post_code = $destination_post_code;
    }

    public function getDestinationAddress(): string
    {
        return $this->destination_address;
    }

    public function setDestinationAddress(string $destination_address)
    {
        $this->destination_address = $destination_address;
    }

    public function getPackageSize(): string
    {
        return $this->package_size;
    }

    public function setPackageSize(string $package_size)
    {
        $this->package_size = $package_size;
    }


}