<?php

namespace app\controllers;

use app\repositories\NewsRepository;

trait GetNews
{
    public $newsRepository;

    public function getNewsRepository()
    {
        if (!$this->newsRepository) {
            $this->newsRepository = new NewsRepository();
        }
        return $this->newsRepository;
    }

    public function setNewsRepository(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }
}