<?php

namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
// use Customdb\Moduledb\Model\TicketFactory;
use Customdb\Moduledb\Model\ResourceModel\Ticket\CollectionFactory;

class Ticket extends Action
{

    protected $resultFactory;

    protected $collectionFactory;


    protected function __construct(
        Context $context,
        CollectionFactory $ticketF,
        ResultFactory $resultFactory
    ) {

        $this->resultFactory     = $resultFactory;
        $this->collectionFactory = $ticketF;
        parent::__construct($context);

    }//end __construct()


    public function execute()
    {
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $result = $this->collectionFactory->create();

        $block = $page->getLayout()->getBlock('cmdb_page_ticket');
        $block->setData('tickets', $result);
        return $page;

    }//end execute()


}//end class
