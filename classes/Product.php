<?php

/*
 * Object that represents a Product. 
 * 
 */
class Product
{
    // /**
    //  * @var Product
    //  * @access private
    //  * @static
    //  */
    // private static $_instance = null;

    /**
     * @var string
     * @access protected
     */
    protected $name;

    /**
     * @var float
     * @access protected
     */
    protected $price;

    /**
     * @var string
     * @access protected
     */
    protected $image;

    /**
     * @var integer
     * @access protected
     */
    protected $quantity;

    /**
     * @var integer
     * @access protected
     */
    protected $type_id;

    /**
     * @var integer
     * @access protected
     */
    protected $farmer_id;


    /**
     * Method that returns the product's name
     *
     * @param void
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Method that returns the product's price
     *
     * @param void
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * Method that returns the product's image
     *
     * @param void
     * @return string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * Method that returns the product's quantity
     *
     * @param void
     * @return integer
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Method that returns the product's type id
     *
     * @param void
     * @return integer
     */
    public function getType(): ?int
    {
        return $this->type_id;
    }

    /**
     * Method that returns the product's farmer id
     *
     * @param void
     * @return integer
     */
    public function getFarmer(): ?int
    {
        return $this->farmer_id;
    }


    /**
     * Method that set the product's name
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
     * Method that set the product's price
     *
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        if (!is_float($price)) {
            throw new Exception('$price must be a float!');
        }
        $this->price = $price;
    }

    /**
     * Method that set the product's image
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
     * Method that set the product's quantity
     *
     * @param integer $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        if (!is_integer($quantity)) {
            throw new Exception('$quantity must be an integer!');
        }
        $this->quantity = $quantity;
    }

    /**
     * Method that set the product's type id
     *
     * @param integer $type_id
     * @return void
     */
    public function setType($type_id)
    {
        if (!is_integer($type_id)) {
            throw new Exception('$type_id must be an integer!');
        }
        $this->type_id = $type_id;
    }

    /**
     * Method that set the product's farmer id
     *
     * @param integer $farmer_id
     * @return void
     */
    public function setFarmer($farmer_id)
    {
        if (!is_integer($farmer_id)) {
            throw new Exception('$farmer_id must be an integer!');
        }
        $this->farmer_id = $farmer_id;
    }

    /**
     * Class Constructor
     *
     * @param string $name, $image
     * @param float $price
     * @param integer $quantity, $type_id, $farmer_id
     * @return void
     */
    public function __construct(string $name, float $price, string $image, int $quantity, int $type_id, int $farmer_id)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setImage($image);
        $this->setQuantity($quantity);
        $this->setType($type_id);
        $this->setFarmer($farmer_id);

        $array = array(
            ":name" => $name,
            ":price" => $price,
            ":image" => $image,
            ":quantity" => $quantity,
            ":type_id" => $type_id,
            ":farmer_id" => $farmer_id,
        );

        Product::createProduct($array);
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
     * Method that add a product to the Database
     *
     * @param array $array
     * @return void
     */
    public static function createProduct($array)
    {
        $db = new Database;
        $sql = "INSERT INTO products (name, price, image, quantity, type_id, farmer_id) VALUES (:name, :price, :image, :quantity, :type_id, :farmer_id);";
        $db->req($sql, $array);
    }

    /**
     * Method that update a product in the Database
     *
     * @param string $name, $image
     * @param float $price
     * @param integer $id, $quantity, $type_id, $farmer_id
     * @return void
     */
    public static function updateProduct($id, $name, $price, $image, $quantity, $type_id, $farmer_id)
    {
        $db = new Database;
        $sql = "UPDATE `products` SET `name` = '$name', `price` = $price,`image` = '$image', `quantity` = $quantity, `type_id` = $type_id, `farmer_id` = $farmer_id WHERE `id` = $id;";
        $db->req($sql);
    }

    /**
     * Method that delete a product from the Database
     *
     * @param integer $id
     * @return void
     */
    public static function deleteProduct($id)
    {
        $db = new Database;
        $sql = "DELETE FROM `products` WHERE ((`id` = $id));";
        $db->req($sql);
    }

    /**
     * Method that get all products from the Database then returns them
     *
     * @param void
     * @return array
     */
    public static function getAllProducts()
    {
        $db = new Database;
        $sql = "SELECT products.id, products.name, products.image, products.price, products.quantity,
        types.name as type, farmers.name as farmer, farmers.id as farmer_id from products 
        LEFT JOIN types ON products.type_id = types.id 
        LEFT JOIN farmers ON products.farmer_id = farmers.id 
        order by id;";
        $result = $db->req($sql);
        // Functions::dd($result);
        return $result;
    }

    /**
     * Method that get a product from the Database then returns it
     *
     * @param integer $id
     * @return array
     */
    public static function getOneProduct($id)
    {
        $db = new Database;
        $sql = "SELECT products.id as id, products.name, products.image, products.price, products.quantity,
        types.name as type, types.id as type_id, farmers.name as farmer, farmers.id as farmer_id from products 
        LEFT JOIN types ON products.type_id = types.id 
        LEFT JOIN farmers ON products.farmer_id = farmers.id 
        WHERE products.id = $id;";
        $result = $db->req($sql);
        // Functions::dd($result);
        return $result[0];
    }

    /**
     * Method that get all products of one farmer from the Database then returns them
     *
     * @param integer $id
     * @return array
     */
    public static function getProductsByFarmer($id)
    {
        $db = new Database;
        $sql = "SELECT products.id, products.name, products.image, products.price, products.quantity,
        types.name as type, farmers.name as farmer, farmers.id as farmer_id
        FROM `products`
        LEFT JOIN types ON products.type_id = types.id 
        LEFT JOIN farmers ON products.farmer_id = farmers.id
        WHERE `farmer_id` = $id;";
        $result = $db->req($sql);
        // Functions::dd($result);
        return $result;
    }

    /**
     * Method that get all products types from the Database then returns them
     *
     * @param void
     * @return array
     */
    public static function getAllTypes()
    {
        $db = new Database;
        $sql = "select * from types order by id";
        $result = $db->req($sql);
        return $result;
    }
}
