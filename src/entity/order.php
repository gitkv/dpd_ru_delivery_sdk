<?php
/**
 * Created by PhpStorm.
 * User: gitkv
 * Date: 07.09.16
 * Time: 13:29
 */

namespace dpd\entity;


/**
 * Class order
 * @package dpd\entity
 */
class order extends entity{

    /**
     * @var array
     */
    protected $header = [
        /*
        'datePickup'=>null, // date (required) Дата приёма груза
        'payer'=>null, // number Клиентский номер плательщика в системе DPD (номер договора с DPD). Если этот параметр не заполнен, то плательщиком будет считаться заказчик (номер из параметра auth).
        'senderAddress'=>null, // address (required) Адрес приёма груза
        'pickupTimePeriod'=>null, // string (required) Интервал времени приёма груза. Доступные для выбора интервалы приёма см. в разделе «Интервалы времени приёма».
        'regularNum'=>null, // string Номер регулярного заказа DPD. Если вы используете доставку на регулярной основе, уточните этот номер у своего менеджера.
        */
    ];

    /**
     * @var array
     */
    protected $order = [
        /*
        'orderNumberInternal'=>null, // string (required) Номер заказа в информационной системе клиента
        'serviceCode'=>null, // string (required) Код услуги DPD. Уточните код нужной Вам услуги у своего менеджера или используйте код услуги, полученный из веб-сервиса «Калькулятор стоимости»
        'serviceVariant'=>null, // string (required) Вариант доставки. Доступно 4 варианта: ДД, ДТ, ТД и ТТ. Расшифровку вариантов см. в разделе «Варианты доставки».
        'cargoNumPack'=>null, // integer (required) Количество грузомест (посылок) в отправке
        'cargoWeight'=>null, // number (required) Вес отправки, кг
        'cargoVolume'=>null, // number Объём, м3
        'cargoRegistered'=>null, // boolean (required) Ценный груз. Внутреннее вложение, включенное в перечень товаров, требующих дополнительных мер безопасности, снижающих риск его утери или повреждения при перевозке. Перечень товаров, относимых к категории «Ценный груз»: 1. Мобильные телефоны 2. Ноутбуки, планшеты
        'cargoValue'=>null, // number Сумма объявленной ценности, руб.
        'cargoCategory'=>null, // string (required) Содержимое отправки
        'deliveryTimePeriod'=>null, // string Интервал времени доставки груза. Доступные для выбора интервалы доставки см. в разделе «Интервалы времени доставки».
        'paymentType'=>null, // string Форма оплаты «Возможные варианты оплаты»
        'extraParam'=>null, // parameter Зарезервированный параметр для ввода новых параметров без изменения схемы сервиса
        'dataInt'=>null, // dataInternational Данные для международных отправок
        'receiverAddress'=>null, // address (required) Адрес доставки
        'extraService'=>null, // extraService Массив опций доставки
        'parcel'=>null, // parcel Массив посылок отправки
        'unitLoad'=>null, // unitLoad Массив вложений в посылке
        */
    ];

    /**
     * @return string
     */
    public function getDatePickup() {
        return $this->header['datePickup'];
    }

    /**
     * Дата приёма груза
     * required
     * @param string $datePickup
     * @return order
     */
    public function setDatePickup($datePickup) {
        $this->header['datePickup'] = $datePickup;
        return $this;
    }

    /**
     * @return number
     */
    public function getPayer() {
        return $this->header['payer'];
    }

    /**
     * Клиентский номер плательщика в системе DPD (номер договора с DPD). Если этот параметр не заполнен,
     * то плательщиком будет считаться заказчик (номер из параметра auth).
     * number
     * @param number $payer
     * @return order
     */
    public function setPayer($payer) {
        $this->header['payer'] = $payer;
        return $this;
    }

    /**
     * @return address
     */
    public function getSenderAddress() {
        return $this->header['senderAddress'];
    }

    /**
     * Адрес приёма груза
     * required
     * @param address $senderAddress
     * @return order
     */
    public function setSenderAddress($senderAddress) {
        $this->header['senderAddress'] = $senderAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimePeriod() {
        return $this->header['pickupTimePeriod'];
    }

    /**
     * Интервал времени приёма груза. Доступные для выбора интервалы приёма см. в разделе «Интервалы времени приёма».
     * required
     * @param string $pickupTimePeriod
     * @return order
     */
    public function setPickupTimePeriod($pickupTimePeriod) {
        $this->header['pickupTimePeriod'] = $pickupTimePeriod;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegularNum() {
        return $this->header['regularNum'];
    }

    /**
     * Номер регулярного заказа DPD. Если вы используете доставку на регулярной основе, уточните этот номер у своего менеджера.
     * @param string $regularNum
     * @return order
     */
    public function setRegularNum($regularNum) {
        $this->header['regularNum'] = $regularNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumberInternal() {
        return $this->order['orderNumberInternal'];
    }

    /**
     * Номер заказа в информационной системе клиента
     * required
     * @param string $orderNumberInternal
     * @return order
     */
    public function setOrderNumberInternal($orderNumberInternal) {
        $this->order['orderNumberInternal'] = $orderNumberInternal;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceCode() {
        return $this->order['serviceCode'];
    }

    /**
     * Код услуги DPD. Уточните код нужной Вам услуги у своего менеджера или используйте код услуги, полученный из веб-сервиса «Калькулятор стоимости»
     * required
     * @param string $serviceCode
     * @return order
     */
    public function setServiceCode($serviceCode) {
        $this->order['serviceCode'] = $serviceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceVariant() {
        return $this->order['serviceVariant'];
    }

    /**
     * Вариант доставки. Доступно 4 варианта: ДД, ДТ, ТД и ТТ. Расшифровку вариантов см. в разделе «Варианты доставки».
     * required
     * @param string $serviceVariant
     * @return order
     */
    public function setServiceVariant($serviceVariant) {
        $this->order['serviceVariant'] = $serviceVariant;
        return $this;
    }

    /**
     * @return int
     */
    public function getCargoNumPack() {
        return $this->order['cargoNumPack'];
    }

    /**
     * Количество грузомест (посылок) в отправке
     * required
     * @param int $cargoNumPack
     * @return order
     */
    public function setCargoNumPack($cargoNumPack) {
        $this->order['cargoNumPack'] = $cargoNumPack;
        return $this;
    }

    /**
     * @return number
     */
    public function getCargoWeight() {
        return $this->order['cargoWeight'];
    }

    /**
     * Вес отправки, кг
     * required
     * @param number $cargoWeight
     * @return order
     */
    public function setCargoWeight($cargoWeight) {
        $this->order['cargoWeight'] = $cargoWeight;
        return $this;
    }

    /**
     * @return number
     */
    public function getCargoVolume() {
        return $this->order['cargoVolume'];
    }

    /**
     * Объём, м3
     * @param number $cargoVolume
     * @return order
     */
    public function setCargoVolume($cargoVolume) {
        $this->order['cargoVolume'] = $cargoVolume;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCargoRegistered() {
        return $this->order['cargoRegistered'];
    }

    /**
     * Ценный груз. Внутреннее вложение, включенное в перечень товаров, требующих дополнительных мер безопасности,
     * снижающих риск его утери или повреждения при перевозке.
     * Перечень товаров, относимых к категории «Ценный груз»:
     *      1. Мобильные телефоны
     *      2. Ноутбуки, планшеты
     * required
     * @param boolean $cargoRegistered
     * @return order
     */
    public function setCargoRegistered($cargoRegistered) {
        $this->order['cargoRegistered'] = $cargoRegistered;
        return $this;
    }

    /**
     * @return number
     */
    public function getCargoValue() {
        return $this->order['cargoValue'];
    }

    /**
     * Сумма объявленной ценности, руб.
     * @param number $cargoValue
     * @return order
     */
    public function setCargoValue($cargoValue) {
        $this->order['cargoValue'] = $cargoValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getCargoCategory() {
        return $this->order['cargoCategory'];
    }

    /**
     * Содержимое отправки
     * required
     * @param string $cargoCategory
     * @return order
     */
    public function setCargoCategory($cargoCategory) {
        $this->order['cargoCategory'] = $cargoCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryTimePeriod() {
        return $this->order['deliveryTimePeriod'];
    }

    /**
     * Интервал времени доставки груза. Доступные для выбора интервалы доставки см. в разделе «Интервалы времени доставки».
     * @param string $deliveryTimePeriod
     * @return order
     */
    public function setDeliveryTimePeriod($deliveryTimePeriod) {
        $this->order['deliveryTimePeriod'] = $deliveryTimePeriod;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType() {
        return $this->order['paymentType'];
    }

    /**
     * Форма оплаты «Возможные варианты оплаты»
     * @param string $paymentType
     * @return order
     */
    public function setPaymentType($paymentType) {
        $this->order['paymentType'] = $paymentType;
        return $this;
    }

    /**
     * @return parameter
     */
    public function getExtraParam() {
        return $this->order['extraParam'];
    }

    /**
     * Зарезервированный параметр для ввода новых параметров без изменения схемы сервиса
     * @param parameter $extraParam
     * @return order
     */
    public function setExtraParam($extraParam) {
        $this->order['extraParam'] = $extraParam;
        return $this;
    }

    /**
     * @return dataInternational
     */
    public function getDataInt() {
        return $this->order['dataInt'];
    }

    /**
     * Данные для международных отправок
     * @param dataInternational $dataInt
     * @return order
     */
    public function setDataInt($dataInt) {
        $this->order['dataInt'] = $dataInt;
        return $this;
    }

    /**
     * @return address
     */
    public function getReceiverAddress() {
        return $this->order['receiverAddress'];
    }

    /**
     * Адрес доставки
     * required
     * @param address $receiverAddress
     * @return order
     */
    public function setReceiverAddress($receiverAddress) {
        $this->order['receiverAddress'] = $receiverAddress;
        return $this;
    }

    /**
     * @return extraService
     */
    public function getExtraService() {
        return $this->order['extraService'];
    }

    /**
     * Массив опций доставки
     * @param extraService $extraService
     * @return order
     */
    public function setExtraService($extraService) {
        $this->order['extraService'] = $extraService;
        return $this;
    }

    /**
     * @return parcel
     */
    public function getParcel() {
        return $this->order['parcel'];
    }

    /**
     * Массив посылок отправки
     * @param parcel $parcel
     * @return order
     */
    public function setParcel($parcel) {
        $this->order['parcel'] = $parcel;
        return $this;
    }

    /**
     * @return unitLoad
     */
    public function getUnitLoad() {
        return $this->order['unitLoad'];
    }

    /**
     * Массив вложений в посылке
     * @param unitLoad $unitLoad
     * @return order
     */
    public function setUnitLoad($unitLoad) {
        $this->order['unitLoad'] = $unitLoad;
        return $this;
    }
}