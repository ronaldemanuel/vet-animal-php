<?php

require_once "./src/infrastructure/respositories/AnimalRepository.class.php";
require_once "./src/models/Animal.class.php";

class AnimalService
{
    private AnimalRepository $animalRepository;

    function __construct(AnimalRepository $animalRepository)
    {
        $this->animalRepository = $animalRepository;
    }

    public function listAnimals(): array
    {
        try {
            $list = $this->animalRepository->index();
            return array_map(function ($e) {
                return new Animal($e['id'], $e['name'], $e['race'], $e['age']);
            }, $list);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function createAnimal(String $name, String $race, Int $age, Int $userId): bool
    {
        try {
            return $this->animalRepository->store($name, $race, $age, $userId);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updateAnimal(Int $id, String $name, String $race, Int $age): bool
    {
        try {
            return $this->animalRepository->update($id, $name, $race, $age);
        } catch(Exception $e) {
            echo $e->getMessage();
        } 
    }

    public function deleteAnimal(Int $id): bool
    {
        try {
            return $this->animalRepository->destroy($id);
        } catch(Exception $e) {
            echo $e->getMessage();
        } 
    }
}