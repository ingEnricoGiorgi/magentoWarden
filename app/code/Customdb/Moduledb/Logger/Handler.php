<?php
namespace Customdb\Moduledb\Logger;

use Monolog\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{

    /**
     * Logging level
     *
     * @var integer
     */
    protected $loggerType = Logger::INFO;

    /**
     * File name
     *
     * @var string
     */
    protected $fileName = '/var/log/mylogs.log';
}//end class
