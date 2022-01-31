<?php

require_once 'Repository.php';
require_once 'UserRepository.php';
require_once __DIR__.'/../models/Package.php';

class PackageRepository extends Repository
{
    public function newPackage(Package $package, $added_by) :void{
        $stmt = $this->database->connect()->prepare('
            INSERT INTO packages (id_added_by, start_city, destination, start_address, destination_address, start_post_code, destination_post_code, package_size, send_date, send_time)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ');


        $stmt->execute([
            $added_by,
            $package->getStartCity(),
            $package->getDestination(),
            $package->getStartAddress(),
            $package->getDestinationAddress(),
            $package->getStartPostCode(),
            $package->getDestinationPostCode(),
            $package->getPackageSize(),
            $package->getDate(),
            $package->getTime()
        ]);
    }

    public function getPackages($id): ?array{
        $result = [];

        $stmt = $this->database->connect()->prepare('
        SELECT * FROM packages WHERE id_added_by = :id
        ');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $packages = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($packages as $package){
            $result[] = new Package(
                $package['start_city'],
                $package['destination'],
                $package['start_address'],
                $package['destination_address'],
                $package['start_post_code'],
                $package['destination_post_code'],
                $package['package_size'],
                $package['send_date'],
                $package['send_time']
            );
        }
        return $result;
    }
}