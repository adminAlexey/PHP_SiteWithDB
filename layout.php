<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header -->
    <div class="header">
        <h1>MODERNO</h1>
    </div>
    <!-- menu -->
    <div class="menu">
        <nav class="menu-list">
            <a href="../index.php">Главная</a>
            <a href="../pages/menCards.php">Мужская одежда</a>
            <a href="../pages/womenCards.php">Женская одежда</a>
            <a href="../pages/shoesCards.php">Обувь</a>
            <!-- <a href="#authors">Об авторе</a>
                <a href="#contacts">О фирме</a> -->
        </nav>
        <a href="../pages/admin.php">Портал администратора</a>
    </div>

    <!-- body -->
    <section class="space">

    </section>
    <div class="content">
        <?= $content ?>
    </div>
    <!-- footer -->
    <div class="footer">
        <p><i>email:</i> <a href="mailto:lexa.rulitt@gmail.com">lexa.rulitt@gmail.com</a></p>
        <p>© Алексей</p>
        <p>2023</p>
    </div>
</body>

</html>