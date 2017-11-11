<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 23.10.17
 * Time: 19:28
 */

namespace app\controllers;
use app\repositories\CurrencyRepository;
use app\components\CurrencyDataProvider;
use system\BaseController;

class CurrencyRatesController extends BaseController
{
    private $currencyDataProvider;

    /**
     * @return CurrencyDataProvider
     */
    public function getCurrencyDataProvider()
    {
        if(!isset($this->currencyDataProvider)){
            $this->currencyDataProvider = new CurrencyDataProvider();
        }
        return $this->currencyDataProvider;
    }

    /**
     * @param mixed $currencyRepository
     */
    public function setCurrencyRepository($currencyRepository)
    {
        $this->currencyRepository = $currencyRepository;
    }

    /*
     *
     */
    public function actionGetCurrencyRates ()
    {
        $data = $this->getCurrencyDataProvider()->getRates();
        $this->sendApiResponse($data);
    }
}