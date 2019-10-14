<?php

class Farmer
{
    // Attributes
    protected $name;
    protected $description;
    protected $location;
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
    // Set the farmer's image.
    public function setImage($image)
    {
        if (!is_string($image)) {
            throw new Exception('$image must be a string!');
        }
        $this->image = $image;
    }

    // Construct
    public function __construct(string $name, string $description, string $location, string $image)
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setLocation($location);
        $this->setImage($image);

        $array = array(
            ":name" => $name,
            ":description" => $description,
            ":location" => $location,
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
        $sql = "INSERT INTO farmers (name, description, location, image) VALUES (:name, :description, :location, :image);";

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
        // $sql = "INSERT INTO farmers (name, description, location, image) VALUES (:name, :description, :location, :image);";

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
        // $sql = "INSERT INTO farmers (name, description, location, image) VALUES (:name, :description, :location, :image);";

        // Insert into DB
        $db = new Database;
        $db->req($sql, $array);
    }

    public static function getAllFarmers()
    {
        $db = new Database;
        $sql = "select farmers.id, farmers.name, farmers.description, farmers.location, farmers.image from farmers
        order by id;";

        // $sql = "select farmers.id, farmers.name, farmers.image,
        // products.name as product from farmers 
        // LEFT JOIN products ON farmers.id = products.farmer_id 
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
