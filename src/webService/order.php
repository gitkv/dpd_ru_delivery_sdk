<?php
/**
 * Created by PhpStorm.
 * User: gitkv
 * Date: 07.09.16
 * Time: 13:15
 */

namespace dpd\webService;


/**
 * Class order
 * @package dpd\webService
 */
class order extends webService{

    /**
     * @var string
     */
    protected $route = '/services/order2?wsdl';

    /**
     * Создать заказ на доставку
     * @param $order
     * @return response
     */
    public function createOrder($order){
        $response = $this->client->request(__FUNCTION__, $order, 'orders');
        return $response;
    }

    /**
     * Получить статус создания заказа
     */
    public function getOrderStatus(){
        $methodName = __FUNCTION__;
    }

    /**
     * Создать адрес с кодом
     */
    public function createAddress(){
        $methodName = __FUNCTION__;
    }

    /**
     * Изменить адреса с кодом
     */
    public function updateAddress(){
        $methodName = __FUNCTION__;
    }

    /**
     * Получить файл накладной (формат файла – PDF)
     */
    public function getInvoiceFile(){
        $methodName = __FUNCTION__;
    }

    /**
     * Получить реестр заказов, передаваемых курьеру DPD (формат файла - xls)
     */
    public function getRegisterFile(){
        $methodName = __FUNCTION__;
    }

}