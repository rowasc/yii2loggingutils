# yii2loggingutils
A very basic logging utility to help setup log categories from the controllers that "use" this trait/ 


# Usage 

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

