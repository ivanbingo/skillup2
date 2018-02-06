



<?php

define('SECOND_IN_DAY', 86400);

$currentDate = time();
$yesterday = $currentDate - SECOND_IN_DAY * 7;


//require_once ('template.php')

define('PRODJECT_NAME', 'Skillup');
define('SUPPORT','Суппорт');
define('CONTACT', 'Контакты');
define('CONDITIONS', 'Условия');
define('COP','© 2018 FoodGramme');

?>


<!DOCTYPE html>
<html>
<?php require_once 'include/head.php'; ?>
<body>
<div class="container">
    <div class="header">
        <div class="logo">
            <img src="image/logo.png">
        </div>
        <div class="search">
            <form>
                <input  type="text" name="Search" value="<?= date('d.m.Y H:i:s') ?>">
                <button class="inp">Поиск</button>
            </form>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">О нас</a></li>
                <li><a href="index.php">Регистрация</a></li>
                <li><a href="index.php">Войти</a></li>

            </ul>
        </div>

    </div>
    <div class="head_posts">
        <div class="title">
            <h1>Моя любимая еда</h1>
        </div>
        <div class="ava"><img src="image/ava.png"></div>
        <div class="user">Петя заходил час назад</div>

        <div class="post_img">
            <img src="image/post.jpg">
        </div>
        <div class="footer_post">
            <div class="like">
                <a href="#"><img src="image/like.png"></a>
            </div>
            <div class="comments">
                <a href="#">Оставить комментарий</a>
            </div>
        </div>
    </div>

    <div class="head_posts">
        <div class="title">
            <h1>Моя любимая еда</h1>
        </div>
        <div class="ava"><img src="image/ava.png"></div>
        <div class="user">Петя заходил час назад</div>

        <div class="post_img">
            <img src="image/post.jpg">
        </div>
        <div class="footer_post">
            <div class="like">
                <a href="#"><img src="image/like.png"></a>
            </div>
            <div class="comments">
                <a href="#">Оставить комментарий</a>
            </div>
        </div>
    </div>

<div class="footer">
    <?php require_once 'include/footer.php'; ?>
	</div>
	
</div>
</body>
</html>