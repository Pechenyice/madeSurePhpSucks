<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <script src="js/admin.js"></script>
    <title>re:Restraunt</title>
</head>
<body>
    <?php 
        if (!isset($_COOKIE["admin"])) {
            $new_url = 'http://localhost/RE-restraunt/login.php';
            header('Location: '.$new_url);
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

    <div class="menu">
        <div class="menu__elem elem">
            <div class="elem__class">Мясо</div>

            <div class="elem__content">
                
            </div>
        </div>

        <div class="menu__elem elem">
            <div class="elem__class">Рыба</div>

            <div class="elem__content">

            </div>
        </div>

        <div class="menu__elem elem">
            <div class="elem__class">Курица</div>

            <div class="elem__content">

            </div>
        </div>

        <div class="menu__elem elem">
            <div class="elem__class">Овощи</div>

            <div class="elem__content">

            </div>
        </div>

        <div class="menu__elem elem">
            <div class="elem__class">Напитки</div>

            <div class="elem__content">

            </div>
        </div>

        <div class="menu__elem elem">
            <div class="elem__class">Алкоголь</div>

            <div class="elem__content">

            </div>
        </div>


    </div>

    <div class="addMenu">
        <div class="addMenu__listWrapper">
            <div class="addMenu__list list">
                <div class="list__preview">Категория</div>

                <div class="list__content">
                    <div class="list__elem" data-type="0">Мясо</div>
                    <div class="list__elem" data-type="1">Рыба</div>
                    <div class="list__elem" data-type="2">Курица</div>
                    <div class="list__elem" data-type="3">Овощи</div>
                    <div class="list__elem" data-type="4">Напитки</div>
                    <div class="list__elem" data-type="5">Алкоголь</div>
                </div>
            </div>
        </div>
        <form action="mealAction.php" method="post">
            <input class="input input_add" id="newHiddenInput" type="hidden" name="meal_type" />
            <input class="input input_add" type="text" name="price" placeholder="Введите цену" />
            <input class="input input_add" type="text" name="weight" placeholder="Введите вес"/>
            <input class="input input_add" type="text" name="name" placeholder="Введите название"/>
            <input class="input input_add" type="text" name="descr" placeholder="Введите описание"/>
            <button class = "button button_update button_add" type="submit" name="insert">Добавить</button>
        </form>
    </div>
</body>
</html>