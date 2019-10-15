<?php

class Product
{
    // Attributes
    protected $name;
    protected $price;
    protected $image;
    protected $quantity;
    protected $type_id;
    protected $farmer_id;

    // Getters
    // Get the Product name.
    public function getName(): ?string
    {
        return $this->name;
    }
    // Get the Product price level.
    public function getPrice(): ?int
    {
        return $this->price;
    }
    // Get the Product image.
    public function getImage(): ?string
    {
        return $this->image;
    }
    // Get the Product quantity level.
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }
    // Get the Product type.
    public function getType(): ?int
    {
        return $this->type_id;
    }
    // Get the Product farmer.
    public function getRace(): ?int
    {
        return $this->farmer_id;
    }

    // Setters
    // Set the Product name.
    public function setName($name)
    {
        if (!is_string($name)) {
            throw new Exception('$name must be a string!');
        }
        $this->name = $name;
    }
    // Set the Product price.
    public function setPrice($price)
    {
        if (!is_string($price)) {
            throw new Exception('$price must be a string!');
        }
        $this->price = $price;
    }
    // Set the Product image.
    public function setImage($image)
    {
        if (!is_string($image)) {
            throw new Exception('$image must be a string!');
        }
        $this->image = $image;
    }
    // Set the quantity.
    public function setQuantity($quantity)
    {
        if (!is_string($quantity)) {
            throw new Exception('$quantity must be a int!');
        }
        $this->quantity = $quantity;
    }
    // Set the Product type.
    public function setRole($type_id)
    {
        if (!is_int($type_id)) {
            throw new Exception('$type_id must be an integer!');
        }
        $this->type_id = $type_id;
    }
    // Set the Product farmer.
    public function setFarmer($farmer_id)
    {
        if (!is_int($farmer_id)) {
            throw new Exception('$farmer_id must be an integer!');
        }
        $this->farmer_id = $farmer_id;
    }

    // Construct
    public function __construct(string $name, int $price, string $image, int $quantity, int $type_id, int $farmer_id)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setImage($image);
        $this->setQuantity($quantity);
        $this->setRole($type_id);
        $this->setRace($farmer_id);

        $array = array(
            ":name" => $name,
            ":price" => $price,
            ":image" => $image,
            ":quantity" => $quantity,
            ":type_id" => $type_id,
            ":farmer_id" => $farmer_id,
        );

        Farmer::createProduct($array);
    }

    // Other Methods
    /**
     * Create a product and store it into the Database
     * @param array $array
     */
    public static function createProduct($array)
    {
        $sql = "INSERT INTO products (name, price, image, quantity type_id, farmer_id) VALUES (:name, :price, :image, :quantity, :type_id, :farmer_id);";

        // Insert into DB
        $db = new Database;
        $db->req($sql, $array);
    }

    /**
     * Update a Product and store it into the Database
     * @param array $array
     */
    public static function updateProduct($id, $name, $price, $image, $quantity, $type_id, $farmer_id)
    {
        $sql = "UPDATE `products` SET `name` = '$name', `price` = '$price',`image` = '$image', `quantity` = '$quantity', `type_id` = '$type_id', `farmer_id` = '$farmer_id' WHERE `id` = $id";

        // Insert into DB
        $db = new Database;
        // $db->req($sql, $array);
        $db->req($sql);
    }

    /**
     * Delete a Product and store it into the Database
     * @param array $array
     */
    public static function deleteProduct($id)
    {
        $sql = "DELETE FROM `products` WHERE ((`id` = $id));";

        // Insert into DB
        $db = new Database;
        $db->req($sql);
    }

    public static function getAllProducts()
    {
        $db = new Database;
        $sql = "select product.id, product.name, product.image, product.price, product.quantity,
        types.name as type, farmers.name as farmer from farmers 
        LEFT JOIN types ON product.type_id = types.id 
        LEFT JOIN farmers ON product.farmer_id = farmer.id 
        order by id;";
        $result = $db->req($sql);
        // Functions::dd($result);
        return $result;
    }

    public static function getProductsByFarmer($id)
    {
        $db = new Database;
        $sql = "select product.id, product.name, product.image, product.price, product.quantity,
        types.name as type, farmers.name as farmer from farmers 
        LEFT JOIN types ON product.type_id = types.id 
        LEFT JOIN farmers ON product.farmer_id = farmer.id 
        order by id WHERE ((`id` = $id));";
        $result = $db->req($sql);

        return $result;
    }

    public static function getAllTypes()
    {
        $db = new Database;
        $sql = "select * from types order by id";
        $result = $db->req($sql);
        return $result;
    }

    public static function getAllFarmers()
    {
        $db = new Database;
        $sql = "select * from farmers order by id";
        $result = $db->req($sql);
        return $result;
    }
}
