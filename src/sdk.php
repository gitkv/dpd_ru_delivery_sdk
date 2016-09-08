<?php
/**
 * Created by PhpStorm.
 * User: gitkv
 * Date: 07.09.16
 * Time: 17:41
 */

namespace dpd;


use dpd\webService\order;

class sdk {

    protected $clientNumber;
    protected $clientKey;
    protected $testMode;

    protected $calc;
    protected $geography;
    protected $label;
    protected $order;
    protected $report;
    protected $status;
    
    function __construct($clientNumber, $clientKey, $testMode=0) {
        $this->clientNumber = $clientNumber;
        $this->clientKey = $clientKey;
        $this->testMode = $testMode;
    }

    public function getNewOrder(){
        //if(!$this->order){
            $this->order = new order($this->clientNumber, $this->clientKey, $this->testMode);
        //}
        return $this->order;
    }
    

}