<?php
/**
 * Created by PhpStorm.
 * User: gitkv
 * Date: 07.09.16
 * Time: 12:57
 */

namespace dpd;


class soapClient {

    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $route;

    /**
     * @var string
     */
    private $clientNumber;

    /**
     * @var string
     */
    private $clientKey;

    /**
     * @var SoapClient
     */
    private $connection;

    /**
     * @var mixed
     */
    private $lastResult;

    /**
     * @var mixed
     */
    private $lastError;

    /**
     * soapClient constructor.
     * @param string $host
     * @param string $route
     * @param string $clientNumber
     * @param integer $clientKey
     */
    function __construct($host, $route, $clientNumber, $clientKey) {
        $this->host = $host;
        $this->route = $route;
        $this->clientNumber = $clientNumber;
        $this->clientKey = $clientKey;
    }

    /**
     * @param mixed $lastResult
     */
    private function setLastResult($lastResult) {
        $this->lastResult = $lastResult;
    }

    /**
     * @param mixed $lastError
     */
    private function setLastError($lastError) {
        $this->lastError = $lastError;
    }

    /**
     * @return mixed
     */
    public function getLastResult() {
        return $this->lastResult;
    }

    /**
     * @return mixed
     */
    public function getLastError() {
        return $this->lastError;
    }

    /**
     * Clear last result and last error
     */
    private function clearAllResult(){
        $this->setLastError(null);
        $this->setLastResult(null);
    }

    /**
     * @return bool
     */
    public function connect(){
        $this->clearAllResult();

        try {
            $this->connection = new \SoapClient('http://'.$this->host.$this->route);
            if(!$this->connection){
                throw new \Exception('Error SOAP connection');
            }
        }
        catch(\Exception $ex) {
            $this->setLastError('Error connection DPD');
            return false;
        }
        return true;
    }

    /**
     * @param string $method
     * @param array $data
     * @param null | string $requestParam
     * @return bool
     */
    public function request($method, $data=null, $requestParam = null){
        $this->clearAllResult();

        if(!$this->connection){
            $this->connect();
        }

        $data['auth'] = [
            'clientKey' => $this->clientKey,
            'clientNumber' => $this->clientNumber,
        ];

        if($requestParam)
            $request[$requestParam] = $data;
        else
            $request = $data;


        $response = null;
        try {
            $response = $this->connection->$method($request);
            if(!$response){
                throw new \Exception('Failed to get a response');
            }
        }
        catch(\Exception $ex) {
            $this->setLastError('Error requesting data DPD:'.$method);
        }

        $result = ($response) ? $response : false;
        $this->setLastResult($result);

        return $this->getResult();
    }

    protected function getResult(){
        if(!empty($this->getLastError())){
            $result = $this->getLastError();
        }
        else{
            $result = $this->getLastResult();
        }

        return $result;
    }

}