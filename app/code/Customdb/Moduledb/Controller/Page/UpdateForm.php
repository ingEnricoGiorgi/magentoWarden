<?php

namespace Customdb\Moduledb\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Customdb\Moduledb\Model\TicketFactory;
use Magento\Framework\App\Request\Http;

class UpdateForm extends Action
{

    protected $request;
    protected function __construct(
        Context $context,
        TicketFactory $ticketF,
        Http $request
    )
    {
        $this->request = $request;
        $this->ticketFactory = $ticketF;
        parent::__construct($context);

    }//end __construct()


    public function execute()
    {
         /*
          * @var Json $jsonResult
          */
        $PageResult = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $numberId = (int)$this->request->getParam('number_id');

        $block = $PageResult->getLayout()->getBlock('cmdb_page_updateform');
        $block->setData('numberid', $numberId);

        if (isset($_POST["nome"])) {

            $numberid= htmlspecialchars($_POST["numberid"], ENT_QUOTES);
            $nome     = htmlspecialchars($_POST["nome"], ENT_QUOTES);
            $cognome  = htmlspecialchars($_POST["cognome"], ENT_QUOTES);
            $ticketid = htmlspecialchars($_POST["ticketid"], ENT_QUOTES);
            $email = htmlspecialchars($_POST["email"], ENT_QUOTES);

            $form     = [
                'numberid'     => $numberid,
                'nome'     => $nome,
                'cognome'  => $cognome,
                'ticketid' => $ticketid,
                'email' => $email,
            ];
            echo json_encode($form);

            $ticket = $this->ticketFactory->create();
            $result = $ticket->load($numberid);
            foreach ($form as $key => $value) {
                $result->setData($key, $value);
            }
            $result->save();
            echo("dati aggiornati");
        } else {

            echo "ticket non aggiornato";
        }//end if

        return $PageResult;

    }//end execute()


}//end class
