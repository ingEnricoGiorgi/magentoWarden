<?php
namespace Customdb\Moduledb\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Ticket extends AbstractDb
{


    protected function _construct()
    {
        // creo tabella e campo
        $this->_init('ticket_its', 'number_id');

    }//end _construct()


}//end class
