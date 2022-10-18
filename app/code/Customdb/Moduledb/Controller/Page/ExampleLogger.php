<?php
namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
//https://app.magentowarden.test/customdb/page/examplelogger


class ExampleLogger extends Action
{
    public $logcustom;

    public function __construct(Context $context, \Customdb\Moduledb\Logger\Logger $logger)
    {
        $this->logcustom=$logger;
        parent::__construct($context);
    }

    public function execute()
    {
          /** @var Json $jsonResult */
          $PageResult=$this->resultFactory->create(ResultFactory::TYPE_PAGE);
        echo("scrivo nel log");
        $textDisplay = new \Magento\Framework\DataObject(array('text' => 'Mageplaza'));
		$this->_eventManager->dispatch('mageplaza_helloworld_display_text', ['mp_text' => $textDisplay]);
		echo $textDisplay->getText();

        //$this->logcustom->info('I did something');

        return $PageResult;
    }
}
/*

    protected $_logger;


    public function __construct(
        \Customdb\Moduledb\Logger\Logger $logger
    ) {
        $this->_logger = $logger;
    }

    public function doSomething()
    {
        $this->_logger->info('I did something');
    }
*/
