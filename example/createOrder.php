<?
include '../bootstrap.php';

//access
const CLIENT_NUMBER = '1001027795';
const CLIENT_KEY = '182A17BD6FC5557D1FCA30FA1D56593EB21AEF88';
const TEST_MODE = 1; // 0 - off or 1 - on

//get sdk
$dpdSdk = new \dpd\sdk(CLIENT_NUMBER, CLIENT_KEY, TEST_MODE);

//sender address
$senderAddress = new \dpd\entity\address();
$senderAddress = $senderAddress
    //->setCode('1234')
    ->setName('Иванов Сергей Петрович')
    //->setTerminalCode('М91')
    ->setCountryName('Россия')
    //->setIndex('140012')
    //->setRegion('Московская обл.')
    ->setCity('Люберцы')
    ->setStreet('Авиаторов')
    ->setStreetAbbr('ул')
    ->setHouse('1')
    //->setHouseKorpus('A')
    //->setStr('1')
    //->setVlad('1')
    //->setExtraInfo('Пав.1')
    //->setOffice('12')
    //->setFlat('144')
    //->setWorkTimeFrom('9:00')
    //->setWorkTimeTo('21:00')
    //->setDinnerTimeFrom('14:00')
    //->setDinnerTimeTo('15:00')
    ->setContactFio('Смирнов Игорь Николаевич')
    ->setContactPhone('89165555555')
    //->setContactEmail('smirnov@megashop.ru')
    //->setInstructions('Подъезд со стороны ул. Кирова')
    //->setNeedPass('1')
    ->getArray();

//receiver address
$receiverAddress = new \dpd\entity\address();
$receiverAddress = $receiverAddress
    //->setCode('1234')
    ->setName('Иванов Сергей Петрович')
    //->setTerminalCode('М91')
    ->setCountryName('Россия')
    //->setIndex('140012')
    //->setRegion('Московская обл.')
    ->setCity('Люберцы')
    ->setStreet('Авиаторов')
    ->setStreetAbbr('ул')
    ->setHouse('1')
    //->setHouseKorpus('A')
    //->setStr('1')
    //->setVlad('1')
    //->setExtraInfo('Пав.1')
    //->setOffice('12')
    //->setFlat('144')
    //->setWorkTimeFrom('9:00')
    //->setWorkTimeTo('21:00')
    //->setDinnerTimeFrom('14:00')
    //->setDinnerTimeTo('15:00')
    ->setContactFio('Смирнов Игорь Николаевич')
    ->setContactPhone('89165555555')
    //->setContactEmail('smirnov@megashop.ru')
    //->setInstructions('Подъезд со стороны ул. Кирова')
    //->setNeedPass('1')
    ->getArray();

//get order entity
$orderEntity = new \dpd\entity\order();
$orderEntity = $orderEntity
    ->setDatePickup('2016-09-09')
    //->setPayer(1000000000)
    ->setSenderAddress($senderAddress)
    ->setPickupTimePeriod('9-18')
    //->setRegularNum('1000')
    ->setOrderNumberInternal('14')
    ->setServiceCode('CSM')
    ->setServiceVariant('ДД')
    ->setCargoNumPack(1)
    ->setCargoWeight(5)
    //->setCargoVolume(0.05)
    ->setCargoRegistered(false)
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

//create new order
$order= $dpdSdk->getNewOrder();
$resultCreateOrder = $order->createOrder($orderEntity);
var_dump($resultCreateOrder);
