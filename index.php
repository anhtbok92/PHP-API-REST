<?php

class Common
{
    public function clientGet($urlEndPoint) {
        // URL API
        $url = $urlEndPoint;

        $client = curl_init();

        $options = array(
            CURLOPT_URL				=> $url, // Set URL of API
            CURLOPT_CUSTOMREQUEST 	=> "GET", // Set request method
            CURLOPT_RETURNTRANSFER	=> true, // true, to return the transfer as a string
        );

        curl_setopt_array( $client, $options );

        // Execute and Get the response
        $response = curl_exec($client);

        // Get HTTP Code response
        $httpCode = curl_getinfo($client, CURLINFO_HTTP_CODE);

        // Close cURL session
        curl_close($client);

        return [
            'status' => $httpCode,
            'response' => $response
        ];
    }
}
class Travel
{
    protected $common;
    protected $URL = 'https://5f27781bf5d27e001612e057.mockapi.io/webprovise/travels';
    public function __construct() {
        $this->common = new Common();
    }

    public function getTravels() {
        return $this->common->clientGet($this->URL);
    }
}

class Company
{
    protected $common;
    protected $URL = 'https://5f27781bf5d27e001612e057.mockapi.io/webprovise/companies';
    public function __construct() {
        $this->common = new Common();
    }

    public function getCompanies() {
        return $this->common->clientGet($this->URL);
    }
}

class TestScript
{
    public function execute()
    {
        $start = microtime(true);
        // Enter your code here
        $travels = (new Travel())->getTravels();
        $companies = (new Company())->getCompanies();
        var_dump($companies);

        // Get parent company


        // Push child company to parent company



        // (new TestScript())->execute();
        echo 'Total time: '.  (microtime(true) - $start). "\n";
    }
}

(new TestScript())->execute();