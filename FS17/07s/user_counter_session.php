<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 23.07.17
 * Time: 20:34
 */

session_start();

if (empty($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
?>


<p>
    Здравствуйте, посетитель, вы видели эту страницу <?php echo $_SESSION['count']; ?> раз.
</p>

<p>
    <a href="nextpage.php?<?php echo htmlspecialchars(SID); ?>">Нажмите
        сюда</a>, чтобы продолжить.
</p>
