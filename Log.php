<?php
/**
 * Created by PhpStorm.
 * User: rsuarez
 * Date: 8/16/15
 * Time: 8:51 PM
 */

namespace rowasc\components;
use \Yii;

/**
 * Class Log
 * @author rowasc
 * @package rowasc\components
 */
trait Log
{

    /**
     * @param      $message
     * @param null $log_category_override
     */
    public function _logInfo($message,$log_category_override=null) {
        Yii::trace(var_export($message,true), $this->_getLogCategory($log_category_override));
    }

    /**
     * @param      $variable
     * @param null $log_category_override
     */
    public function _logTrace($variable,$log_category_override=null) {
        Yii::info($variable, $this->_getLogCategory($log_category_override));
    }

    /**
     * @param      $message
     * @param null $log_category_override
     */
    public function _logError($message,$log_category_override=null) {
        Yii::error($message, $this->_getLogCategory($log_category_override));

    }

    /**
     * @param        $message
     * @param string $log_category_override
     */
    public function _logWarning($message, $log_category_override=null) {
        Yii::warning($message, $this->_getLogCategory($log_category_override));
    }

    /**
     * @param $log_category_override
     *
     * @return string
     */
    protected function _getLogCategory($log_category_override){
        return $log_category_override!==null?$log_category_override:$this->log_category;
    }
}
