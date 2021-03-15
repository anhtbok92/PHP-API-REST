<?php

define("COMPANY_API", 'https://5f27781bf5d27e001612e057.mockapi.io/webprovise/companies');
define("TRAVEL_API", 'https://5f27781bf5d27e001612e057.mockapi.io/webprovise/travels');

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

    public function groupBy($array, $key) {
        $return = array();
        foreach($array as $val) {
            $return[$val[$key]][] = $val;
        }
        return $return;
    }
}

class Travel
{
    protected $common;
    protected $URL = TRAVEL_API;
    public function __construct() {
        $this->common = new Common();
    }

    public function getTravels() {
        return json_decode($this->common->clientGet($this->URL)['response'], TRUE);
    }

    public function getTotalPriceTravels() {
        $travels = $this->getTravels();
        $groupByTravels = (new Common())->groupBy($travels, 'companyId');
        $travelPriceByCompany = [];
        foreach ($groupByTravels as $companyId => $employees) {
            $travelPriceByCompany[$companyId] = array_sum(array_column($employees, 'price'));
        }

        return $travelPriceByCompany;
    }
}

class Company
{
    protected $common;
    protected $URL = COMPANY_API;
    public function __construct() {
        $this->common = new Common();
    }

    public function getCompanies() {
        return json_decode($this->common->clientGet($this->URL)['response'], TRUE);
    }

    public function addCost($travelPriceByCompany) {
        $companies = $this->getCompanies();
        foreach ($companies as $key => $company) {
            if ($company['parentId'] == "0") {
                $companies[$key]['parentId'] = $company['id'];
            }
            $companies[$key]['cost'] = $travelPriceByCompany[$company['id']];
        }

        return $companies;
    }
}

class TestScript
{
    public function getCompanyInfo($companies, $id) {
        return array_filter($companies, function($company) use($id){
            return $company['id'] == $id;
        });
    }

    public function removeCurrentCompany($companies, $id) {
        foreach ($companies as $key => $company) {
            if ($company['id'] == $id) {
                unset($companies[$key]);
            }
        }
        return $companies;
    }

    public function execute()
    {
        $start = microtime(true);

        $travelPriceByCompany = (new Travel())->getTotalPriceTravels();
        $companies = (new Company())->addCost($travelPriceByCompany);
        $groupByCompanies = (new Common())->groupBy($companies, 'parentId');

        $result = [];
        foreach ($groupByCompanies as $companyId => $companyChild) {
            $result[] = [
                'id' => $companyId,
                'name' => $this->getCompanyInfo($companies, 'uuid-1')[0]['name'],
                'cost' => array_sum(array_column($companyChild, 'cost')),
                'children' => $this->removeCurrentCompany($companyChild, $companyId)
            ];
        }

        print_r($result);
        echo 'Total time: '.  (microtime(true) - $start). "\n";
    }
}

(new TestScript())->execute();