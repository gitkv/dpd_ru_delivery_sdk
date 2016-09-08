<?php
/**
 * Created by PhpStorm.
 * User: gitkv
 * Date: 07.09.16
 * Time: 13:26
 */

namespace dpd\entity;


/**
 * Class entity
 * @package dpd\entity
 */
class entity {

    /**
     * get the current object as an array
     * @param bool $showEmpty
     * @return array
     */
    public function getArray($showEmpty=false){
        $objArray = get_object_vars($this);
        if($showEmpty) {
            $resultArray = $objArray;
        }
        else{
            if($this->_is_multiarray($objArray)){
                $resultArray = array_diff_assoc($objArray, ['']);
            }
            else{
                $resultArray = array_diff($objArray, ['']);
            }
        }
        return $resultArray;
    }

    /**
     * @return object $this
     */
    public function getObj(){
        return $this;
    }

    /**
     * is multiple array
     * @param $array
     * @return bool
     */
    private function _is_multiarray($array){
        foreach ($array as $item) {
            if(is_array($item)){
                return true;
            }
        }
        return false;
    }

}