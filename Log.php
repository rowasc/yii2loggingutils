<?php
/**
 * Created by PhpStorm.
 * User: rsuarez
 * Date: 8/16/15
 * Time: 8:51 PM
 */

namespace rowasc\components;
use \Yii;

trait Log
{

    public function _logError($message) {
        Yii::error($message, $this->log_category);

    }

    public function _logInfo($message) {
        Yii::trace(var_export($message,true), $this->log_category);
    }

    public function _logTrace($variable) {
        Yii::info($variable, $this->log_category);
    }

    public function _logWarning($message) {
        Yii::warning($message, $this->log_category);
    }

}
