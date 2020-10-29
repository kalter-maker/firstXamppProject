<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>firstPhp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <?php include 'logo.inc.php' ?>
        <?php include 'menu.inc.php' ?>
    </header>

    <main class="main">
        <h1> <?php echo $p ?></h1>

        <div class="data">
            <div class="myImg">
                <?php echo '<img src="img/php.jpg">' ?>
            </div>
            <div class="fullName">
                <p>
                    Меня зовут <?php echo $name, ' ', $surname, '<br>';
                    echo 'Город', ' ', $city; ?>
                </p>
                <p>
                    Мне
                    <?php echo $age?>
                    лет
                </p>
            </div>
        </div>

        <div class="knowledge">
            <?php
                include 'knowledge.inc.php';
                echo $d, '<br>';
                echo $a, ' ', $b, ' ', $c, '<br><br>';
                $a = 200; $b = 360;
                echo 'a = ', $a, '    b = ', $b, '<br>';
                $c = $a + $b;
                echo 'a + b = ', $c, '<br>';
                $c = $a - $b;
                echo 'a - b = ', $c, '<br>';
                $c = $a * $b;
                echo 'a * b = ', $c, '<br>';
                $c = $a / $b;
                echo 'a / b = ', $c, '<br>';
            ?>
        </div>
    </main>

    <footer class="footer">
        <?php include 'footer.inc.php' ?>
    </footer>
</body>
</html>