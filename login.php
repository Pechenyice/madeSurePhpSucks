<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/main.js"></script>
    <title>re:Restraunt</title>
</head>
<body>
    <?php 
        if (isset($_GET['login']) && isset($_GET['password'])) {
            $mysqli = new mysqli("localhost", "root", "root", "rerest");
            $result = $mysqli->query("SELECT * FROM admins where login = '" . $_GET['login'] . "' and password = '" . $_GET['password'] . "'");
            $accum = 0;
            while ($row = $result->fetch_assoc())
            {
                $accum += 1;
                if ($accum != 0) {
                    setcookie("admin", $row['login']);
                    $new_url = 'http://localhost/RE-restraunt/admin.php';
                    header('Location: '.$new_url);
                    break;
                }
            }
            $result->free();
            $mysqli->close();
        }
    ?>
    <div class="main">
        <div class="nav main__nav">
            <div class="logo nav__logo">
                <img src="assets/logo.png">
            </div>
            <div class="name nav__name">
            re:<span class="text text__accent">Restaurant</span>
            </div>
        </div>
    </div>

    <div class="login">
        <div>
            <form action="login.php" method="get">
                <input class="input input_log" type="text" name="login" placeholder="Логин">
                <input class="input input_log" type="text" name="password" placeholder="Пароль">
                <button type="submit" class = "button button_update">Войти</button>
            </form>
        </div>
    </div>
</body>
</html>