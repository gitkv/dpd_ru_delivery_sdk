<?
print '<pre>';
include 'bootstrap.php';

//access
const CLIENT_NUMBER = '1001027795';
const CLIENT_KEY = '182A17BD6FC5557D1FCA30FA1D56593EB21AEF88';
const TEST_MODE = 1; // 0 - off or 1 - on

//get sdk
$dpdSdk = new \dpd\sdk(CLIENT_NUMBER, CLIENT_KEY, TEST_MODE);

$senderAddress = new \dpd\entity\address();
$senderAddress = $senderAddress
    ->setCountryCode('74')
    ->setRegionCode('123')
    ->setCityName('Москва')
    ->getArray();

$receiverAddress = new \dpd\entity\address();
$receiverAddress = $receiverAddress
    ->setCountryCode('74')
    ->setRegionCode('123')
    ->setCityName('Москва')
    ->getArray();

//get order entity
$orderEntity = new \dpd\entity\order();
$orderEntity = $orderEntity
    ->setDatePickup('2016-09-08')
    //->setPayer(1000000000)
    ->setSenderAddress($senderAddress)
    ->setPickupTimePeriod('9-18')
    //->setRegularNum('1000')
    ->setOrderNumberInternal('10')
    ->setServiceCode('CUR')
    ->setServiceVariant('ДД')
    ->setCargoNumPack(1)
    ->setCargoWeight(5)
    //->setCargoVolume(0.05)
    ->setCargoRegistered(true)
    //->setCargoValue(1000)
    ->setCargoCategory('Одежда')
    //->setDeliveryTimePeriod('9-18')
    //->setPaymentType('ОУП')
    //->setExtraParam(null)
    //->setDataInt(null)
    ->setReceiverAddress($receiverAddress)
    //->setExtraService(null)
    //->setParcel(null)
    //->setUnitLoad(null)
    ->getArray();
var_dump($orderEntity);

$order= $dpdSdk->getNewOrder();
$test = $order->createOrder($orderEntity);
var_dump($test);
