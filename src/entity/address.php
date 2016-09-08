<?php
/**
 * Created by PhpStorm.
 * User: gitkv
 * Date: 07.09.16
 * Time: 13:29
 */

namespace dpd\entity;


/**
 * Class address
 * @package dpd\entity
 */
class address extends entity{

    /**
     * @var string
     */
    protected $countryCode;
    /**
     * @var string
     */
    protected $regionCode;
    /**
     * @var string
     */
    protected $regionName;
    /**
     * @var string
     */
    protected $cityCode;
    /**
     * @var string
     */
    protected $cityName;
    /**
     * @var string
     */
    protected $street;
    /**
     * @var string
     */
    protected $streetAbbr;
    /**
     * @var string
     */
    protected $houseNo;
    /**
     * @var string
     */
    protected $building;
    /**
     * @var string
     */
    protected $structure;
    /**
     * @var string
     */
    protected $ownership;
    /**
     * @var string
     */
    protected $descript;

    /**
     * @param string $countryCode
     * @return address
     */
    public function setCountryCode($countryCode) {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @param string $regionCode
     * @return address
     */
    public function setRegionCode($regionCode) {
        $this->regionCode = $regionCode;
        return $this;
    }

    /**
     * @param string $regionName
     * @return address
     */
    public function setRegionName($regionName) {
        $this->regionName = $regionName;
        return $this;
    }

    /**
     * @param string $cityCode
     * @return address
     */
    public function setCityCode($cityCode) {
        $this->cityCode = $cityCode;
        return $this;
    }

    /**
     * @param string $cityName
     * @return address
     */
    public function setCityName($cityName) {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * @param string $street
     * @return address
     */
    public function setStreet($street) {
        $this->street = $street;
        return $this;
    }

    /**
     * @param string $streetAbbr
     * @return address
     */
    public function setStreetAbbr($streetAbbr) {
        $this->streetAbbr = $streetAbbr;
        return $this;
    }

    /**
     * @param string $houseNo
     * @return address
     */
    public function setHouseNo($houseNo) {
        $this->houseNo = $houseNo;
        return $this;
    }

    /**
     * @param string $building
     * @return address
     */
    public function setBuilding($building) {
        $this->building = $building;
        return $this;
    }

    /**
     * @param string $structure
     * @return address
     */
    public function setStructure($structure) {
        $this->structure = $structure;
        return $this;
    }

    /**
     * @param string $ownership
     * @return address
     */
    public function setOwnership($ownership) {
        $this->ownership = $ownership;
        return $this;
    }

    /**
     * @param string $descript
     * @return address
     */
    public function setDescript($descript) {
        $this->descript = $descript;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode() {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getRegionCode() {
        return $this->regionCode;
    }

    /**
     * @return string
     */
    public function getRegionName() {
        return $this->regionName;
    }

    /**
     * @return string
     */
    public function getCityCode() {
        return $this->cityCode;
    }

    /**
     * @return string
     */
    public function getCityName() {
        return $this->cityName;
    }

    /**
     * @return string
     */
    public function getStreet() {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getStreetAbbr() {
        return $this->streetAbbr;
    }

    /**
     * @return string
     */
    public function getHouseNo() {
        return $this->houseNo;
    }

    /**
     * @return string
     */
    public function getBuilding() {
        return $this->building;
    }

    /**
     * @return string
     */
    public function getStructure() {
        return $this->structure;
    }

    /**
     * @return string
     */
    public function getOwnership() {
        return $this->ownership;
    }

    /**
     * @return string
     */
    public function getDescript() {
        return $this->descript;
    }
}