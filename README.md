# yii2loggingutils
A very basic logging utility to help setup log categories from the controllers that "use" this trait/ 


# Usage 

##Configuration

In your Yii2's application config, under components=>log setup new logging categories you want to use

```php

'components' =>[
'log' => [
    'traceLevel' => YII_DEBUG ? 3 : 0,
    'targets' => [
        [
            'class' => 'yii\log\FileTarget',
            'levels' => ['info', 'error', 'warning', 'trace'],
            'categories' => ['myawesomecategory'],
            'logFile' => '@app/runtime/logs/myawesomecategory.log',
            'maxFileSize' => 2048,
            'maxLogFiles' => 10,
            'logVars' => []
        ]
```
        
## Define your default log category for each class, so you have well defined categories to look into when something goes wrong.


```php
namespace your\own\namespace;
use rowasc\components\Log;
class YourClass extends AnyClass {
    use Log;
    public $log_category="categoryOfYourLog";
    public function yourFancyFunction(){
        /** now use some loggers ! **/
        $this->_logError("Error that you really want to log " );
        $this->_logTrace($e);
    
    }
}
```


## If you want to have a different category for some messages, just override the category when calling the logging functions. 


```php
namespace your\own\namespace;
use rowasc\components\Log;
class YourClass extends AnyClass {
    use Log;
    public $log_category="categoryOfYourLog";
    public function yourFancyFunction(){
        /** now use some loggers ! **/
        $this->_logError("Error that you really want to log " ,"myawesomecategory");
        $this->_logTrace($e,"myerrorcategory");
    
    }
}
```

