<?php

namespace app\controllers;

use DOMDocument;
use GuzzleHttp\Client;

use yii\web\Controller;

class ApiController extends Controller
{
    public function actionIndex()
    {
        $client = new Client();
        $response = $client->request('get', 'https://geocode-maps.yandex.ru/1.x/', [
            'query' => [
                'geocode' => 'Тверская+6',
                'apikey'  => 'e666f398-c983-4bde-8f14-e3fec900592a',
                'lang'    => 'ru_RU',
            ],
        ]);
        $content = $response->getBody()->getContents();


        $doc = new DOMDocument;
        $doc->preserveWhiteSpace = false;

        $doc->load('book.xml');

        $xpath = new DOMXPath($doc);

        $tbody = $doc->getElementsByTagName('tbody')->item(0);


// запрос относительно узла tbody
        $query = 'row/entry[. = "en"]';

        $entries = $xpath->query($query, $tbody);

        foreach ($entries as $entry) {
            echo "Найдена книга {$entry->previousSibling->previousSibling->nodeValue}," .
                " автор {$entry->previousSibling->nodeValue}\n";
        }
//        $response_data = json_decode($content, true);
//        $adressList = [];
//        foreach ($response_data['response']['GeoObjectCollection']['featureMember'] as $key => $value) {
//            $adressList[] = $value['GeoObject']['metaDataProperty']['GeocoderMetaData']['text'];
        }




}