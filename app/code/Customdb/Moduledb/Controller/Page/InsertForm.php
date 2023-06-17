<?php

namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Customdb\Moduledb\Model\TicketFactory;
use Customdb\Moduledb\Api\TicketRepositoryInterface;
use Customdb\Moduledb\Api\Data\TicketInterface;
// https://app.magentowarden.test/customdb/page/insertform
class InsertForm extends Action
{

    protected $ticketFactory;
    protected $ticketRepository;

    protected function __construct(
        Context $context,
        TicketRepositoryInterface $ticketRepository,
        TicketFactory $ticketF
    )
    {

        $this->ticketRepository = $ticketRepository;
        $this->ticketFactory = $ticketF;
        parent::__construct($context);

    }//end __construct()


    public function execute()
    {
        $PageResult = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $ritiro = [];
        if (isset($_POST["nome"])) {
            $ritiro["nome"]=htmlspecialchars($_POST["nome"], ENT_QUOTES);
            $ritiro["cognome"]=htmlspecialchars($_POST["cognome"], ENT_QUOTES);
            $ritiro["ticketid"]=htmlspecialchars($_POST["ticketid"], ENT_QUOTES);
            $ritiro["email"]=htmlspecialchars($_POST["email"], ENT_QUOTES);

            $ticket = $this->ticketFactory->create();
            foreach ($ritiro as $key => $value) {
                $ticket->setData($key, $value);

            }

            $ticket->save();


            echo "dati inseriti";
        } else {
            echo "no username supplied";
        }

        return $PageResult;
    }



}//end class
