<?php

class Farmer
{
    /**
     * @var Farmer
     * @access private
     * @static
     */
    private static $_instance = null;

    /**
     * @var string
     * @access protected
     */
    protected $name;

    /**
     * @var string
     * @access protected
     */
    protected $description;

    /**
     * @var string
     * @access protected
     */
    protected $location;

    /**
     * @var string
     * @access protected
     */
    protected $image;


    /**
     * Method that returns the farmer's name
     *
     * @param void
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Method that returns the farmer's description
     *
     * @param void
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Method that returns the farmer's location
     *
     * @param void
     * @return string
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * Method that returns the farmer's image
     *
     * @param void
     * @return string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }


    /**
     * Method that set the farmer's name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        if (!is_string($name)) {
            throw new Exception('$name must be a string!');
        }
        $this->name = $name;
    }

    /**
     * Method that set the farmer's description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        if (!is_string($description)) {
            throw new Exception('$description must be a string!');
        }
        $this->description = $description;
    }

    /**
     * Method that set the farmer's location
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location)
    {
        if (!is_string($location)) {
            throw new Exception('$location must be a string!');
        }
        $this->location = $location;
    }

    /**
     * Method that set the farmer's image
     *
     * @param string $image
     * @return void
     */
    public function setImage($image)
    {
        if (!is_string($image)) {
            throw new Exception('$image must be a string!');
        }
        $this->image = $image;
    }

    /**
     * Class Constructor
     *
     * @param string $name, $description, $location, $image
     * @return void
     */
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

    // /**
    //  * Method that creates the single instance of the class 
    //  * if it does not exist yet then returns it.
    //  * 
    //  * @param void
    //  * @return Farmer
    //  */
    // public static function getInstance(string $name, string $description, string $location, string $image)
    // {

    //     if (is_null(self::$_instance)) {
    //         self::$_instance = new Farmer(string $name, string $description, string $location, string $image);
    //     }

    //     return self::$_instance;
    // }


    /**
     * Method that create a farmer and store it into the Database
     *
     * @param array $array
     * @return void
     */
    public static function createFarmer($array)
    {
        $sql = "INSERT INTO farmers (name, description, location, image) VALUES (:name, :description, :location, :image);";

        // Insert into DB
        $db = new Database;
        $db->req($sql, $array);
    }

    /**
     * Method that update a farmer and update the Database
     *
     * @param array $array
     * @return void
     */
    public static function updateFarmer($id)
    {
        // $sql = "INSERT INTO farmers (name, description, location, image) VALUES (:name, :description, :location, :image);";

        // Insert into DB
        $db = new Database;
        $db->req($sql, $array);
    }

    /**
     * Method that delete a farmer and delete it from the Database
     *
     * @param array $array
     * @return void
     */
    public static function deleteFarmer($id)
    {
        // $sql = "INSERT INTO farmers (name, description, location, image) VALUES (:name, :description, :location, :image);";

        // Insert into DB
        $db = new Database;
        $db->req($sql, $array);
    }

    /**
     * Method that get all farmers from the Database then returns them
     *
     * @param void
     * @return array
     */
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
