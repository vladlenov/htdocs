<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 11.07.17
 * Time: 20:51
 */

include 'comment_include.php';

if ($_POST['action'] == 2) {
    $i = $_POST['index'];
    $comments = getGoods();
    if (isset($comments[$i])) {
        $comments[$i]['flag'] = 1;
    }
    //var_dump($comments);
    saveGoods($comments);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Практическое занятие 10.07.2017</title>
</head>
<body>
<table>
<?php
$i=0;
foreach (getGoods() as $comment)
{
    if($comment['flag'] != 1) {
        ?>
        <tr>
            <td><?php echo $comment['user'] ?></td>
            <td><?php echo $comment['subject'] ?></td>
            <td><?php echo $comment['text'] ?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="index" value="<?php echo $i ?>">
                    <input type="submit" value="Одобрить">
                    <input type="hidden" name="action" value="2">
                </form>
            </td>


        </tr>
        <?php
    }
    $i++;
}
?>
</table>
</body>
</html>