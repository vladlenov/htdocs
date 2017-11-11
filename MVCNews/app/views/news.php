<style>
        .title {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            grid-template-rows: 50px;
            margin: 10px;
            margin-bottom: 10px;
            height: auto;
        }
        figure {
            background: lightblue; /* Цвет фона */
            padding: 10px; /* Поля вокруг */
            display: block; /* Блочный элемент */
            width: 150px; /* Ширина */
            height: auto;
            float: left; /* Блоки выстраиваются по горизонтали */
            margin: 0 10px 25px 0; /* Отступы */
            text-align: center; /* Выравнивание по центру */
        }

        figcaption {
            color: #fff; /* Цвет текста */

        .news {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            grid-template-rows: 200px;
        }
    </style>

    <div class="title"><H1><?=\system\traslation::translate('view.news.title')?></H1></div>

<? foreach ($news as $row) : ?>
    <div class="news">
    <figure>

        <figcaption><h2><?=$row->title;?></h2></figcaption>
        <h4><?=$row->data;?></h4>

    </figure>
    </div>
<? endforeach; ?>