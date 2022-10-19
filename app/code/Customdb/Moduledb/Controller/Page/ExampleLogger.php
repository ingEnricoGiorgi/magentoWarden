<?php
namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Customdb\Moduledb\Plugin\Product;
//https://app.magentowarden.test/customdb/page/examplelogger


class ExampleLogger extends Action
{
    public $logcustom;
    public $title;

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
        echo $this->setTitle('Welcome');
		//echo $this->getTitle();

        $this->logcustom->info('I did something');

        return $PageResult;
    }



	public function setTitle($title)
	{
		return $this->title = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}
}

