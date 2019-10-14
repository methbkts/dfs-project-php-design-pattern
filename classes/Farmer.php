<?php

class Farmer
{
    // Attributes
    protected $name;
    protected $description;
    protected $location;
    protected $gender;
    protected $image;

    // Getters
    // Get the farmer's name.
    public function getName(): ?string
    {
        return $this->name;
    }
    // Get the farmer's description.
    public function getDescription(): ?string
    {
        return $this->description;
    }
    // Get the farmer's location.
    public function getLocation(): ?string
    {
        return $this->location;
    }
    // Get the farmer's gender.
    public function getGender(): ?string
    {
        return $this->gender;
    }
    // Get the farmer's image.
    public function getImage(): ?string
    {
        return $this->image;
    }

    // Setters
    // Set the farmer's name.
    public function setName($name)
    {
        if (!is_string($name)) {
            throw new Exception('$name must be a string!');
        }
        $this->name = $name;
    }
    // Set the farmer's description.
    public function setDescription($description)
    {
        if (!is_string($description)) {
            throw new Exception('$description must be a string!');
        }
        $this->description = $description;
    }
    // Set the farmer's location.
    public function setLocation($location)
    {
        if (!is_string($location)) {
            throw new Exception('$location must be a string!');
        }
        $this->location = $location;
    }
    // Set the farmer's gender.
    public function setGender($gender)
    {
        if (!is_string($gender)) {
            throw new Exception('$gender must be a string!');
        }
        $this->gender = $gender;
    }
    // Set the farmer's image.
    public function setImage($image)
    {
        if (!is_string($image)) {
            throw new Exception('$image must be a string!');
        }
        $this->image = $image;
    }

    // Construct
    public function __construct(string $name, string $description, string $location, string $gender, string $image)
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setLocation($location);
        $this->setGender($gender);
        $this->setImage($image);

        $array = array(
            ":name" => $name,
            ":description" => $description,
            ":location" => $location,
            ":gender" => $gender,
            ":image" => $image,
        );

        Farmer::createFarmer($array);
    }

    // Other Methods
    /**
     * Create a farmer and store it into the Database
     * @param array $array
     */
    public static function createFarmer($array)
    {
        $sql = "INSERT INTO farmers (name, description, location, gender, image) VALUES (:name, :description, :location, :gender, :image);";

        // Insert into DB
        $db = new Database;
        $db->req($sql, $array);
    }

    /**
     * Update a farmer and store it into the Database
     * @param array $array
     */
    public static function updateFarmer($id)
    {
        // $sql = "INSERT INTO farmers (name, description, location, gender, image) VALUES (:name, :description, :location, :gender, :image);";

        // Insert into DB
        $db = new Database;
        $db->req($sql, $array);
    }

    /**
     * Delete a farmer and store it into the Database
     * @param array $array
     */
    public static function deleteFarmer($id)
    {
        // $sql = "INSERT INTO farmers (name, description, location, gender, image) VALUES (:name, :description, :location, :gender, :image);";

        // Insert into DB
        $db = new Database;
        $db->req($sql, $array);
    }

    public static function getAllFarmers()
    {
        $db = new Database;
        $sql = "select farmers.id, farmers.name, farmers.description, farmers.location, farmers.gender, farmers.image,
        types.name as types, products.name as product from farmers 
        order by id;";
        // $sql = "select farmers.id, farmers.name, farmers.gender, farmers.image,
        // types.name as role, products.name as race from farmers 
        // LEFT JOIN types ON farmers.role_id = types.id 
        // LEFT JOIN products ON farmers.race_id = products.id 
        // order by id;";
        $result = $db->req($sql);
        // Functions::dd($result);
        return $result;
    }

    // public static function getAllRoles()
    // {
    //     $db = new Database;
    //     $sql = "select * from types order by id";
    //     $result = $db->req($sql);
    //     return $result;
    // }

    // public static function getAllRaces()
    // {
    //     $db = new Database;
    //     $sql = "select * from products order by id";
    //     $result = $db->req($sql);
    //     return $result;
    // }
}
