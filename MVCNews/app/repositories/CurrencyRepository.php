<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 23.10.17
 * Time: 19:38
 */

namespace app\repositories;

use app\models\CurrencyModel;
use system\NotFoundException;

class CurrencyRepository
{
    const HOST = 'https://api.privatbank.ua/';

    public function getRates()
    {
//        Самый простой вариант, через file_get_contents
//        $data = file_get_contents(self::HOST."https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5");

        $curl = curl_init('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//    $headers = array(
//        "POST ".$page." HTTP/1.0",
//        "Content-type: text/xml;charset=\"utf-8\"",
//        "Accept: text/xml",
//        "Cache-Control: no-cache",
//        "Pragma: no-cache",
//        "SOAPAction: \"run\"",
//        "Content-length: ".strlen($xml_data),
//        "Authorization: Basic " . base64_encode($credentials)
//    );
//
//    $ch = curl_init();
//    curl_setopt($ch, CURLOPT_URL,$url);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
//    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//
        $result = json_decode(curl_exec($curl));

        foreach ($result as $item){
            $model = new CurrencyModel();
            $model->curr = $item->ccy;
            $model->rate = $item->sale;
            $model->code = 980;
            $retArr[] = $model;
        }
        return $retArr;
    }
}
