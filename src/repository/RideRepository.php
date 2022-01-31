<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Ride.php';

class RideRepository extends Repository
{

    public function getRides(int $id): ?array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM rides WHERE id_added_by = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();


        $rides = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rides as $ride) {
            $result[] = new Ride(
                $ride['start_city'],
                $ride['destination'],
                $ride['date'],
                $ride['time'],
                $ride['car_type'],
                $ride['accepted_package_sizes'],
                $ride['id_added_by']
            );
        }
        return $result;
    }

    public function newRide (Ride $ride, $added_by) :void{
        $stmt = $this->database->connect()->prepare('
            INSERT INTO rides (id_added_by, start_city, destination, date, time, car_type, accepted_package_sizes)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ');


        $stmt->execute([
            $added_by,
            $ride->getStartCity(),
            $ride->getDestination(),
            $ride->getDate(),
            $ride->getTime(),
            $ride->getCarType(),
            $ride->getAcceptedPackageSizes()
        ]);
    }

    public function getAllRides(): ?array{
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM rides
        ');

        $stmt->execute();

        $rides = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rides as $ride){
            $result[] = new Ride(
                $ride['start_city'],
                $ride['destination'],
                $ride['date'],
                $ride['time'],
                $ride['car_type'],
                $ride['accepted_package_sizes'],
                $ride['id_added_by']
            );
        }
        return $result;
    }

    public function getRideByStartCity(string $searchStartCity){
        $searchStartCity = strtolower($searchStartCity);

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM rides WHERE LOWER(start_city) LIKE :searchStartCity
        ');

        $stmt->bindParam(':searchStartCity', $searchStartCity, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRideIdAddedBy($id){
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM rides WHERE id_added_by = :id
        ');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);


        $stmt->execute();

        $rides = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rides as $ride){
            $result[] = new Ride(
                $ride['start_city'],
                $ride['destination'],
                $ride['date'],
                $ride['time'],
                $ride['car_type'],
                $ride['accepted_package_sizes'],
                $ride['id_added_by']
            );
        }
        return $result;
    }

}