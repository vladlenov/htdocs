<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 30.10.17
 * Time: 17:01
 */

namespace app\components;

use app\repositories\CurrencyRepository;


class CurrencyDataProvider
{

    public function actionGetCurrencyRates()
    {
        if (1 != 1) {

        } else {
        return $this->getCurrencyRepository()->getRates();
        }
    }
}