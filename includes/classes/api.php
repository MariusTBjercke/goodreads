<?php
/**
 * Author: Marius Bjercke
 * Date: 12.01.2020
 * Time: 12.07
 */

class API {
    public $key;
    public $searchResult;

    public function __construct($apiKey = null) {
        $this->key = $apiKey;
    }

    public function handleCurl($url) {
        // Initializes a new cURL session
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);

        // Create object from XML and convert into assoc array
        $obj = simplexml_load_string($response);
        $json  = json_encode($obj);
        $result = json_decode($json, true);
        return $result;
    }

    public function searchBooks($searchString) {
        $key = $this->key;

        $data = [
            'key' => $key,
            'q' => $searchString
        ];

        $url = "https://www.goodreads.com/search/index.xml";
        $finalURL = $url . "?" . http_build_query($data);

        $result = $this->handleCurl($finalURL);

        $this->searchResult = $result;
        return $result;
    }

    public function getTitle($int = 0) {
        $array = $this->searchResult;
        $result = $array['search']['results']['work'][$int]['best_book']['title'];
        return $result;
    }

    public function getAuthor($int = 0) {
        $array = $this->searchResult;
        $result = $array['search']['results']['work'][$int]['best_book']['author']['name'];
        return $result;
    }

    public function getSeriesByAuthor($authorID) {
        $key = $this->key;

        // API key and query parameter
        $data = [
            'key' => $key,
            'q' => $searchString
        ];

        $url = "https://www.goodreads.com/search/index.xml";
        $finalURL = $url . "?" . http_build_query($data);

        $result = $this->handleCurl($finalURL);

        $this->searchResult = $result;
        return $result;
    }

}