<?php
/**
 * Created by PhpStorm.
 * User: gitkv
 * Date: 07.09.16
 * Time: 13:14
 */

namespace dpd\webService;
use dpd\soapClient;


/**
 * Class entity
 * @package dpd\webService
 */
class webService {

    /**
     * @var string
     */
    protected $route;

    /**
     * @var soapClient
     */
    protected $client;

    /**
     * @var array
     */
    protected $host = [
        0 => 'ws.dpd.ru', //production host
        1 => 'wstest.dpd.ru', //develop host
    ];

    /**
     * webService constructor.
     * @param string $clientNumber
     * @param string $clientKey
     * @param integer $testMode
     */
    function __construct($clientNumber, $clientKey, $testMode) {
        $this->client = new soapClient($this->host[$testMode], $this->route, $clientNumber, $clientKey);
    }

}