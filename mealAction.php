<?php 

    

    $mysqli = new mysqli("localhost", "root", "root", "rerest");

    if (isset($_POST["update"])) {
        $result = $mysqli->query("UPDATE menu SET name = '" . $_POST["name"] . "', price = " . $_POST["price"] . ", weight = " . $_POST["weight"] . ", descr = '" . $_POST["descr"] . "' where id = " . $_POST["id"]);
        $mysqli->close();
        echo "UPDATE menu SET name = " . $_POST["name"] . ", price = " . $_POST["price"] . ", weight = " . $_POST["weight"] . ", descr = " . $_POST["descr"] . "where id = " . $_POST["id"];
    }

    if (isset($_POST["delete"])) {
        $result = $mysqli->query("delete from menu where id = " . $_POST["id"]);
        $mysqli->close();
    }

    if (isset($_POST["insert"])) {
        // echo var_dump($_POST);
        $result = $mysqli->query("insert into menu (meal_type, name, price, weight, descr) values (" . $_POST["meal_type"] . ", '". $_POST["name"] ."', ". $_POST["price"] .", ". $_POST["weight"] .", '". $_POST["descr"] ."')");
        $mysqli->close();
    }
    
    $new_url = 'http://localhost/RE-restraunt/admin.php';
    header('Location: '.$new_url);

?>