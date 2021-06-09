<?php
    class Meal {
        public int $id;
        public int $type;
        public string $name;
        public int $price;
        public int $weight;
        public string $description;

        public function __construct(int $id, int $type, string $name, int $price, int $weight, string $description)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->description = $description;
    }
    }

    $mysqli = new mysqli("localhost", "root", "root", "rerest");
    $result = $mysqli->query("SELECT * FROM menu order by meal_type");
    $accum = array();
    while ($row = $result->fetch_assoc())
    {
        $tmp = new Meal($row['id'], $row['meal_type'], $row['name'], $row['price'], $row['weight'], $row['descr']);
        array_push($accum, $tmp);
        
    }
    echo print_r($accum, true);
    $result->free();
    $mysqli->close();
?>
