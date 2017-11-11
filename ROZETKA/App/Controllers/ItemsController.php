<?php

namespace App\Controllers;
use System\BaseController;

class ItemsController extends BaseController
{
    private $newsRepository;

    /**
     * ItemsController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function actionShow()
    {
        $items = [["product_name" => "12345"]];
        $this->sendWebResponse(['items'], ['items'=>$items], true);
    }

    public function actionGetSome()
    {
        echo "";
    }
}