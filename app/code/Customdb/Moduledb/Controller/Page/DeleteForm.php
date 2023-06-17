<?php

namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Customdb\Moduledb\Model\TicketFactory;

class DeleteForm extends Action
{
    protected function __construct(Context $context, TicketFactory $ticketF)
    {

        $this->ticketFactory = $ticketF;
        parent::__construct($context);

    }//end __construct()


    public function execute()
    {
         /*
          * @var Json $jsonResult
          */
        $PageResult = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        if (isset($_POST["numberid"])) {
            $numberid = htmlspecialchars($_POST["numberid"], ENT_QUOTES);
            $send      = htmlspecialchars($_POST["send"], ENT_QUOTES);
            //serve a niente
            $form      = [
                'ticketid' => $numberid,
                'send'      => $send,
            ];
            echo json_encode($form);

            $ticket = $this->ticketFactory->create();
            $result = $ticket->load($numberid);
            $result->delete();
            echo("dati cancellati");
            $result->save();
        } else {
            echo "no username supplied";
        }

        return $PageResult;

    }//end execute()


}//end class
