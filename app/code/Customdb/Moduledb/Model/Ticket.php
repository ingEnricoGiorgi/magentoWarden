<?php
namespace Customdb\Moduledb\Model;

use Customdb\Moduledb\Api\Data\TicketInterface;
use Magento\Framework\Model\AbstractModel;
use Customdb\Moduledb\Model\ResourceModel\Ticket as ResourceModel;

class Ticket extends AbstractModel implements TicketInterface
{


    protected function _construct()
    {

        $this->_init(ResourceModel::class);

    }//end _construct()


    /*
     * Di questi metodi non abbiamo bisogno perchè sono
    * gia gestiti dall'abstract model */

    public function getTicketId()
    {
        return $this->getData(self::TICKET_ID);

    }//end getTicketId()


    public function setTicketId($data)
    {

        return $this->setData(self::TICKET_ID, $data);

    }//end setTicketId()


    public function getNome()
    {
        return $this->getData(self::TICKET_NOME);

    }//end getNome()


    public function setNome($data)
    {
        return $this->setData(self::TICKET_NOME, $data);

    }//end setNome()


    public function getCognome()
    {
        return $this->getData(self::TICKET_COGNOME);

    }//end getCognome()


    public function setCognome($data)
    {
        return $this->setData(self::TICKET_COGNOME, $data);

    }//end setCognome()


    public function getNumberId()
    {
        return $this->getData(self::NUMBER_ID);

    }//end getNumberId()


    public function setNumberId($data)
    {
        return $this->setData(self::NUMBER_ID, $data);

    }//end setNumberId()


    public function getEmail()
    {
        return $this->getData(self::TICKET_EMAIL);

    }//end getEmail()


    public function setEmail($data)
    {
        return $this->setData(self::TICKET_EMAIL, $data);

    }//end setEmail()


}//end class
