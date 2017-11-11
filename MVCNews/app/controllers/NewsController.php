<?php

namespace app\controllers;

use system\BaseController;
use system\DB;
use app\repositories\NewsRepository;
use app\models\NewsModel;

class NewsController extends BaseController
{
    use GetNews;

    public function __construct()
    {
        parent::__construct();
    }

    public function actionShow()
    {
        $news = $this->getNewsRepository()->getNews(1);
//        print_r($news); die();
        $this->sendWebResponse(['news'], ['news' => $news], true);
    }


    public function actionAddNews()
    {
        if (isset($_POST['action']) && $_POST['action'] == "addNews") {
            $this->getNewsRepository()->createNews($_POST['title'], $_POST['data_en'], $_POST['data_rus'], $_POST['ins_date']);
        }
        $this->sendWebResponse(['news/addNews'], [], true);
    }


//    public function actionIndex()
//    {
//        $lastNews = array_slice($this->getNewsRepository()->getAll(), -5, 5);
//        $this->sendWebResponse(['index'], ['news' => $lastNews], true);
//    }
}