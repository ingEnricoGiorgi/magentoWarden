<?php
namespace Customdb\Moduledb\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchInterface;
use Customdb\Moduledb\Api\Data\TicketInterface;
use Customdb\Moduledb\Model\TicketFactory;
use Customdb\Moduledb\Api\TicketRepositoryInterface;


class PopulateTicketData implements DataPatchInterface
{

    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    protected $ticketRepo;

    protected $ticketFactory;

    protected $ticketInterface;


    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param EavSetupFactory          $eavSetupFactory
     */
    public function __construct(ModuleDataSetupInterface $moduleDataSetup, TicketFactory $ticketF, TicketRepositoryInterface $ticketRepo, TicketInterface $ticketInterface)
    {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->ticketFactory   = $ticketF;
        $this->ticketRepo      = $ticketRepo;
        $this->ticketInterface = $ticketInterface;

    }//end __construct()


    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $data = [
            "nome"     => "Kate",
            "cognome"  => "Middletone",
            "ticketid" => "11",
        ];

        $this->moduleDataSetup->startSetup();

          $ticket = $this->ticketFactory->create();
          $ticket->setNome($data["nome"]);
          $ticket->setCognome($data["cognome"]);
          $ticket->setTicketId($data["ticketid"]);

          $this->ticketRepo->save($ticket);

        $this->moduleDataSetup->endSetup();

    }//end apply()


    /**
     * {@inheritdoc}
     */
    public static function getDependencies():array
    {
        return [];

    }//end getDependencies()


    /**
     * {@inheritdoc}
     */
    public function getAliases():array
    {
        return [];

    }//end getAliases()


    /*
        public static function getVersion()
        {
        return '2.0.0';
    }  */
}//end class
