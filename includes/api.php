<?php
/**
 * Author: Marius Bjercke
 * Date: 12.01.2020
 * Time: 12.07
 */

class API {

    public $key;

    function __construct($apiKey) {
        $this->key = $apiKey;
    }

    function searchBooks($searchString) {

        $key = $this->key;

        // API key and query parameter
        $data = [
            'key' => $key,
            'q' => $searchString
        ];

        $url = "https://www.goodreads.com/search/index.xml";
        $finalURL = $url . "?" . http_build_query($data);

        // Initializes a new cURL session
        $curl = curl_init($finalURL);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);

        // Create object from XML response
        $obj = simplexml_load_string($response);
        $json  = json_encode($obj);
        $result = json_decode($json, true);

        return $result;

    }

}