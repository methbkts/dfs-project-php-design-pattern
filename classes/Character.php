<?php

class Character
{
    // Attributes
    protected $name;
    protected $gender;
    protected $health;
    protected $energy;
    protected $power;
    protected $speed;
    protected $weapon;
    protected $special;
    protected $image;
    protected $role_id;
    protected $race_id;

    // Getters
    // Get the character's name.
    public function getName(): ?string
    {
        return $this->name;
    }
    // Get the character's gender.
    public function getGender(): ?string
    {
        return $this->gender;
    }
    // Get the character's health level.
    public function getHealth(): ?int
    {
        return $this->health;
    }
    // Get the character's energy level.
    public function getEnergy(): ?int
    {
        return $this->energy;
    }
    // Get the character's power.
    public function getPower(): ?int
    {
        return $this->power;
    }
    // Get the character's speed.
    public function getSpeed(): ?int
    {
        return $this->speed;
    }
    // Get the character's weapon.
    public function getWeapon(): ?string
    {
        return $this->weapon;
    }
    // Get the character's special.
    public function getSpecial(): ?string
    {
        return $this->special;
    }
    // Get the character's image.
    public function getImage(): ?string
    {
        return $this->image;
    }
    // Get the character's role.
    public function getRole(): ?int
    {
        return $this->role_id;
    }
    // Get the character's race.
    public function getRace(): ?int
    {
        return $this->race_id;
    }

    // Setters
    // Set the character's name.
    public function setName($name)
    {
        if (!is_string($name)) {
            throw new Exception('$name must be a string!');
        }
        $this->name = $name;
    }
    // Set the character's gender.
    public function setGender($gender)
    {
        if (!is_string($gender)) {
            throw new Exception('$gender must be a string!');
        }
        $this->gender = $gender;
    }
    // Set the character's health level.
    public function setHealth($health)
    {
        if (!is_int($health)) {
            throw new Exception('$health must be an integer!');
        }
        $this->health = $health;
    }
    // Set the character's energy level.
    public function setEnergy($energy)
    {
        if (!is_int($energy)) {
            throw new Exception('$energy must be an integer!');
        }
        $this->energy = $energy;
    }
    // Set the character's power.
    public function setPower($power)
    {
        if (!is_int($power)) {
            throw new Exception('$power must be an integer!');
        }
        $this->power = $power;
    }
    // Set the character's speed.
    public function setSpeed($speed)
    {
        if (!is_int($speed)) {
            throw new Exception('$speed must be an integer!');
        }
        $this->speed = $speed;
    }
    // Set the character's weapon.
    public function setWeapon($weapon)
    {
        if (!is_string($weapon)) {
            throw new Exception('$weapon must be a string!');
        }
        $this->weapon = $weapon;
    }
    // Set the character's special.
    public function setSpecial($special)
    {
        if (!is_string($special)) {
            throw new Exception('$special must be a string!');
        }
        $this->special = $special;
    }
    // Set the character's image.
    public function setImage($image)
    {
        if (!is_string($image)) {
            throw new Exception('$image must be a string!');
        }
        $this->image = $image;
    }
    // Set the character's role.
    public function setRole($role_id)
    {
        if (!is_int($role_id)) {
            throw new Exception('$role_id must be an integer!');
        }
        $this->role_id = $role_id;
    }
    // Set the character's race.
    public function setRace($race_id)
    {
        if (!is_int($race_id)) {
            throw new Exception('$race_id must be an integer!');
        }
        $this->race_id = $race_id;
    }

    // Construct
    public function __construct(string $name, string $gender, int $health, int $energy, int $power, int $speed, string $weapon, string $special, string $image, int $role_id, int $race_id)
    {
        $this->setName($name);
        $this->setGender($gender);
        $this->setHealth($health);
        $this->setEnergy($energy);
        $this->setPower($power);
        $this->setSpeed($speed);
        $this->setWeapon($weapon);
        $this->setSpecial($special);
        $this->setImage($image);
        $this->setRole($role_id);
        $this->setRace($race_id);

        $array = array(
            ":name" => $name,
            ":gender" => $gender,
            ":health" => $health,
            ":energy" => $energy,
            ":power" => $power,
            ":speed" => $speed,
            ":weapon" => $weapon,
            ":special" => $special,
            ":image" => $image,
            ":role_id" => $role_id,
            ":race_id" => $race_id,
        );

        Character::createCharacter($array);
    }

    // Other Methods
    /**
     * Create a character and store it into the Database
     * @param array $array
     */
    public static function createCharacter($array)
    {
        $sql = "INSERT INTO characters (name, gender, health, energy, power, speed, weapon, special, image, role_id, race_id) VALUES (:name, :gender, :health, :energy, :power, :speed, :weapon, :special, :image, :role_id, :race_id);";

        // Insert into DB
        $db = new Database;
        $db->req($sql, $array);
    }

    /**
     * Update a character and store it into the Database
     * @param array $array
     */
    public static function updateCharacter($id)
    {
        // $sql = "INSERT INTO characters (name, gender, health, energy, power, speed, weapon, special, image, role_id, race_id) VALUES (:name, :gender, :health, :energy, :power, :speed, :weapon, :special, :image, :role_id, :race_id);";

        // Insert into DB
        $db = new Database;
        $db->req($sql, $array);
    }

    /**
     * Delete a character and store it into the Database
     * @param array $array
     */
    public static function deleteCharacter($id)
    {
        // $sql = "INSERT INTO characters (name, gender, health, energy, power, speed, weapon, special, image, role_id, race_id) VALUES (:name, :gender, :health, :energy, :power, :speed, :weapon, :special, :image, :role_id, :race_id);";

        // Insert into DB
        $db = new Database;
        $db->req($sql, $array);
    }

    public static function getAllCharacters()
    {
        $db = new Database;
        $sql = "select characters.id, characters.name, characters.gender, characters.health, characters.energy, characters.power, characters.speed, characters.weapon, characters.special, characters.image,
        roles.name as role, races.name as race from characters 
        LEFT JOIN roles ON characters.role_id = roles.id 
        LEFT JOIN races ON characters.race_id = races.id 
        order by id;";
        $result = $db->req($sql);
        // Functions::dd($result);
        return $result;
    }

    public static function getAllRoles()
    {
        $db = new Database;
        $sql = "select * from roles order by id";
        $result = $db->req($sql);
        return $result;
    }

    public static function getAllRaces()
    {
        $db = new Database;
        $sql = "select * from races order by id";
        $result = $db->req($sql);
        return $result;
    }
}
