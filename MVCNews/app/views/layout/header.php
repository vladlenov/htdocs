<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>FullStack News</title>
    <style>
            .grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
                grid-template-rows: 50px;
                margin: -8px;
                margin-bottom: 10px;
                height: auto;
            }

            .grid div {
                background-color: lavender;
                padding: 8px 15px;
                color: #ffffff;
                font-size: 18px;
                font-family: roboto;
            }

            .grid div:nth-child(odd) {
                background-color: lightblue;
            }
            .news {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
                grid-template-rows: 200px;

            }
            .footer {
                grid-template-columns: 1fr;
                grid-template-rows: 1fr;
                background-color: lavender;
            }
    </style>
</head>

<body>

<!-- Navigation -->
<div class="grid">
    <? if (!\app\helper\AuthHelper::isAuth()) { ?>
    <div><a href="http://localhost/MVCNews/auth/login"><?=\system\Traslation::translate('header.login')?></a></div>
    <div><a href="http://localhost/MVCNews/auth/reg"><?=\system\Traslation::translate('header.reg')?></a></div>
    <? } else { ?>
    <div><?=$_SESSION['user_name']?></div>
    <div><a href="http://localhost/MVCNews/auth/exit"><?=\system\Traslation::translate('header.exit')?></a></div>
    <div><a href="http://localhost/MVCNews/news/addNews"><?=\system\Traslation::translate('header.add.news')?></a></div>
    <? }?>

    <div>
        <form method="post" action="http://localhost/MVCNews/system/setLang" id="langForm">

            <input type="hidden" name="redirectUrl" value="<?="http://localhost".$_SERVER['REQUEST_URI']?>">
                <? foreach(app\components\LanguagesEnum::getAllLanguages() as $langCode=> $lang) :?>

            <input type="radio" name="selectedLang" value="<?=$langCode?>" onclick="document.getElementById('langForm').submit()"> - <?=$lang?>
                <? endforeach; ?>
        </form>
    </div>
</div>